<?php
namespace App\Console\Commands;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class UpdateFormdata extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'update:formdata';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Updates the formdata columns in the products table';

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
    $products = Product::all();
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
