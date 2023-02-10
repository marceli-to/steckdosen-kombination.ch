<?php
namespace App\Console\Commands;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class ImportTranslations extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'import:i18n';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Imports translations from a csv';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {
    $file = storage_path('app/public/import/import.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $array = explode(';', $line);
      $product = Product::find($array[0]);
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
