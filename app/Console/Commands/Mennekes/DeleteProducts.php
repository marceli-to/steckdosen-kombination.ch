<?php
namespace App\Console\Commands\Mennekes;
use App\Models\MennekesProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class DeleteProducts extends Command
{
  protected $signature = 'mennekes:delete-products';

  protected $description = 'Deletes Mennekes products from the database';

  public function handle()
  {
    $file = storage_path('app/public/import/mennekes/delete.txt');

    $handle = fopen($file, 'r');

    while (($line = fgets($handle)) !== false)
    {
      $id = str_replace(array("\r", "\n"), array("", ""), $line);
      $product = MennekesProduct::find($id);
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
