<?php
namespace App\Console\Commands\Mennekes;
use App\Models\MennekesProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class UpdateFormdata extends Command
{
  protected $signature = 'mennekes:update-formdata';

  protected $description = 'Updates the formdata columns in the mennekes_products table';

  public function handle()
  {
    $products = MennekesProduct::all();
    foreach ($products as $product)
    {
      // Formdata
      $json = json_decode($product->form_data);
      if ($product->ean_number)
      {
        $json[0]->INTERNATIONAL_PID = trim($product->ean_number);
        $product->form_data = json_encode($json);
        $product->ean_number = trim($product->ean_number);
        $product->save();
      }

      // Formdata Saesseli
      $json = json_decode($product->form_data_saesseli);
      if ($product->ean_number)
      {
        $json->ITEM[0]->INTERNATIONAL_PID = trim($product->ean_number);
        $product->form_data_saesseli = json_encode($json);
        $product->save();
      }
    }
    $this->info('update done...');
  }
}
