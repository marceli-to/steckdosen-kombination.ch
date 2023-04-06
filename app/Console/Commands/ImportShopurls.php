<?php
namespace App\Console\Commands;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class ImportShopurls extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'import:shopurls';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Imports shop urls from a text file';

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
    $file = storage_path('app/public/import/import-shopurls.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $array = explode(';', $line);
      $product = Product::find($array[0]);
      if ($product)
      {
        $product->ferratec_shop_url_de = str_replace(array('"', "\r", "\n"), array("", "", ""), $array[1]);
        $product->ferratec_shop_url_fr = str_replace(array('"', "\r", "\n"), array("", "", ""), $array[2]);
        $product->save();
      }
    }

    fclose($handle);
    $this->info('import done...');
  }
}
