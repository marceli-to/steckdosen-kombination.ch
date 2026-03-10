<?php
namespace App\Console\Commands\Mennekes;
use App\Models\MennekesProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class ImportEan extends Command
{
  protected $signature = 'mennekes:import-ean';

  protected $description = 'Imports EAN numbers for Mennekes products from a text file';

  public function handle()
  {
    $file = storage_path('app/public/import/mennekes/import-ean.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $array = explode(';', $line);
      $product = MennekesProduct::find($array[0]);
      if ($product)
      {
        $product->ean_number = str_replace(array('"', "\r", "\n"), array("", "", ""), $array[1]);
        $product->save();
      }
    }

    fclose($handle);
    $this->info('import done...');
  }
}
