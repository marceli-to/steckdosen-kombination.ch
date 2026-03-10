<?php
namespace App\Console\Commands\Mennekes;
use App\Models\MennekesProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class ImportShopurls extends Command
{
  protected $signature = 'mennekes:import-shopurls';

  protected $description = 'Imports shop urls for Mennekes products from a text file';

  public function handle()
  {
    $file = storage_path('app/public/import/mennekes/import-shopurls.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $array = explode(';', $line);
      $product = MennekesProduct::find($array[0]);
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
