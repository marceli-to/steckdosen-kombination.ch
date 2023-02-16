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
  protected $signature = 'import:ean';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Imports ean numbers from a text file';

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
    $file = storage_path('app/public/import/import-ean.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $array = explode(';', $line);
      $product = Product::find($array[0]);
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
