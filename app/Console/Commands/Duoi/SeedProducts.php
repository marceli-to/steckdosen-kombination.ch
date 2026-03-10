<?php
namespace App\Console\Commands\Duoi;
use App\Models\DuoiProduct;
use Illuminate\Console\Command;

class SeedProducts extends Command
{
  protected $signature = 'duoi:seed-products';

  protected $description = 'Seeds the duoi_products table with dummy entries';

  public function handle()
  {
    $products = [
      ['number' => '5611306G', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP44',           'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5611306H', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP44 1HC',       'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5612306G', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP69',           'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP69',      'hilfskontakt' => 'Nein'],
      ['number' => '5612306H', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP67/IP69 1HC',  'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5611406G', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP44',           'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5611406H', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP44 1HC',       'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5612406G', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP67/IP69',      'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Nein'],
      ['number' => '5612406H', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP67/IP69 1HC',  'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5611506G', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP44',           'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5611506H', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP44 1HC',       'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5612506G', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP69',           'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP69',      'hilfskontakt' => 'Nein'],
      ['number' => '5612506H', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP67/IP69 1HC',  'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5613306G', 'title' => 'Wandsteckdose DUOi 32A3P 6H230V IP44',           'ampere' => '32A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5614306G', 'title' => 'Wandsteckdose DUOi 32A3P 6H230V IP67/IP69',      'ampere' => '32A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Nein'],

      ['number' => '5613406G', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP44',           'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5613406H', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP44 1HC',       'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5614406G', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP67/IP69',      'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Nein'],
      ['number' => '5614406H', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP67/IP69 1HC',  'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5613506G', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP44',           'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5613506H', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP44 1HC',       'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5614506G', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP69',           'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP69',      'hilfskontakt' => 'Nein'],
      ['number' => '5614506H', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP67/IP69 1HC',  'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],
    ];

    foreach ($products as $p)
    {
      DuoiProduct::create([
        'number'              => $p['number'],
        'title'               => ['de' => $p['title'], 'en' => $p['title'], 'fr' => $p['title'], 'it' => $p['title']],
        'eldas_number'        => 'E' . rand(1000000, 9999999),
        'em_number'           => 'EM' . rand(100000, 999999),
        'ean_number'          => (string) rand(7610000000000, 7619999999999),
        'gehaeuse'            => 'DUOi',
        'fabrikat'            => 'MENNEKES',
        'kategorie'           => 'Wandsteckdose',
        'beschreibung'        => $p['title'],
        'volt'                => $p['volt'],
        'ampere'              => $p['ampere'],
        'pole'                => $p['pole'],
        'schutzart'           => $p['schutzart'],
        'hilfskontakt'        => $p['hilfskontakt'],
        'ek'                  => rand(80, 350) + (rand(0, 99) / 100),
        'uvp_egh'             => rand(120, 500) + (rand(0, 99) / 100),
        'uvp_installateur'    => rand(150, 600) + (rand(0, 99) / 100),
        'publish'             => 1,
        'has_image'           => 1,
      ]);

      $this->line('Created: ' . $p['number'] . ' – ' . $p['title']);
    }

    $this->info('Seeded ' . count($products) . ' DUOi products.');
  }
}
