<?php
namespace App\Console\Commands;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class DeleteProducts extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'delete:products';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Deletes products from the database';

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
    $file = storage_path('app/public/import/delete.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $id = str_replace(array("\r", "\n"), array("", ""), $line);
      $product = Product::find($id);
      if ($product)
      {
        $product->delete();
      }  
      else
      {
        $this->info('product not found: ' . $id);
      }    
    }

    fclose($handle);
    $this->info('import done...');
  }
}
