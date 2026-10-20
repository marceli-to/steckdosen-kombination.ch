<?php
namespace App\Console\Commands;
use App\Models\DuoiProduct;
use App\Models\MennekesProduct;
use Illuminate\Console\Command;

class ExportProducts extends Command
{
  protected $signature = 'products:export {--all : Include unpublished products (and Mennekes products without image)}';

  protected $description = 'Exports all products listed in the configurators (Mennekes + DUOi) as CSV';

  public function handle()
  {
    $dir = storage_path('app/export');

    if (!is_dir($dir))
    {
      mkdir($dir, 0755, true);
    }

    $file = $dir . '/konfigurator-artikel-' . date('Y-m-d') . '.csv';
    $handle = fopen($file, 'w');

    // UTF-8 BOM so Excel opens umlauts correctly
    fwrite($handle, "\xEF\xBB\xBF");

    fputcsv($handle, [
      'Konfigurator',
      'ID',
      'Artikelnummer',
      'Eldas-Nr.',
      'E-Nr.',
      'EAN',
      'Bezeichnung',
      'Beschreibung',
      'EK',
      'UVP EGH',
      'UVP Installateur',
      'Publiziert',
    ], ';');

    $count = 0;

    $mennekes = $this->option('all') ? MennekesProduct::query() : MennekesProduct::active();
    foreach ($mennekes->orderBy('eldas_number', 'DESC')->get() as $product)
    {
      fputcsv($handle, $this->row('Steckdosen-Kombination', $product, $product->description), ';');
      $count++;
    }

    $duoi = $this->option('all') ? DuoiProduct::query() : DuoiProduct::active();
    foreach ($duoi->orderBy('eldas_number', 'DESC')->get() as $product)
    {
      $description = implode(', ', array_filter([$product->ampere, $product->pole ? $product->pole . 'P' : null, $product->volt, $product->schutzart, $product->hilfskontakt == 'Ja' ? 'Hilfskontakt' : null]));
      fputcsv($handle, $this->row('DUOi', $product, $description), ';');
      $count++;
    }

    fclose($handle);
    $this->info($count . ' products exported to ' . $file);
  }

  protected function row($configurator, $product, $description)
  {
    return [
      $configurator,
      $product->id,
      $product->number,
      $product->eldas_number,
      $product->em_number,
      $product->ean_number,
      $product->getTranslation('title', 'de', false),
      $description,
      $product->ek,
      $product->uvp_egh,
      $product->uvp_installateur,
      $product->publish ? 'Ja' : 'Nein',
    ];
  }
}
