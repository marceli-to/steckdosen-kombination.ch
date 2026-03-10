<?php
namespace App\Console\Commands\Mennekes;
use App\Models\MennekesProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class ImportTranslations extends Command
{
  protected $signature = 'mennekes:import-translations';

  protected $description = 'Imports translations for Mennekes products from a CSV';

  public function handle()
  {
    $file = storage_path('app/public/import/mennekes/import.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $array = explode(';', $line);
      $product = MennekesProduct::find($array[0]);
      if ($product)
      {
        if (isset($array[1]) && isset($array[2]) && isset($array[3]) && isset($array[4]))
        {
          $translations = [
            'de' => str_replace('"', "", $array[1]),
            'en' => str_replace('"', "", $array[2]),
            'fr' => str_replace('"', "", $array[3]),
            'it' => str_replace(array('"', "\r", "\n"), array("", "", ""), $array[4])
          ];
        }
        else
        {
          $translations = [
            'de' => 'null',
            'en' => 'null',
            'fr' => 'null',
            'it' => 'null',
          ];
        }
        $product->setTranslations('title', $translations);
        $product->save();
      }
    }

    fclose($handle);
    $this->info('import done...');
  }
}
