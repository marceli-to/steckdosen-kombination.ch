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
      ['number' => '5611306G', 'eldas' => '728600130', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP44',           'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5611306H', 'eldas' => '728600140', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP44 1HC',       'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5612306G', 'eldas' => '728600190', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP69',           'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP69',      'hilfskontakt' => 'Nein'],
      ['number' => '5612306H', 'eldas' => '728600240', 'title' => 'Wandsteckdose DUOi 16A3P 6H230V IP67/IP69 1HC',  'ampere' => '16A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5611406G', 'eldas' => '728600150', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP44',           'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5611406H', 'eldas' => '728600160', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP44 1HC',       'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5612406G', 'eldas' => '728600270', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP67/IP69',      'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Nein'],
      ['number' => '5612406H', 'eldas' => '728600280', 'title' => 'Wandsteckdose DUOi 16A4P 6H400V IP67/IP69 1HC',  'ampere' => '16A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5611506G', 'eldas' => '728600170', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP44',           'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5611506H', 'eldas' => '728600180', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP44 1HC',       'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5612506G', 'eldas' => '728600290', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP69',           'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP69',      'hilfskontakt' => 'Nein'],
      ['number' => '5612506H', 'eldas' => '728600310', 'title' => 'Wandsteckdose DUOi 16A5P 6H400V IP67/IP69 1HC',  'ampere' => '16A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5613306G', 'eldas' => '728800100', 'title' => 'Wandsteckdose DUOi 32A3P 6H230V IP44',           'ampere' => '32A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5614306G', 'eldas' => '728800150', 'title' => 'Wandsteckdose DUOi 32A3P 6H230V IP67/IP69',      'ampere' => '32A', 'pole' => '3', 'volt' => '230V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Nein'],

      ['number' => '5613406G', 'eldas' => '728800110', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP44',           'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5613406H', 'eldas' => '728800120', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP44 1HC',       'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5614406G', 'eldas' => '728800160', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP67/IP69',      'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Nein'],
      ['number' => '5614406H', 'eldas' => '728800170', 'title' => 'Wandsteckdose DUOi 32A4P 6H400V IP67/IP69 1HC',  'ampere' => '32A', 'pole' => '4', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],

      ['number' => '5613506G', 'eldas' => '728800130', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP44',           'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Nein'],
      ['number' => '5613506H', 'eldas' => '728800140', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP44 1HC',       'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP44',      'hilfskontakt' => 'Ja'],
      ['number' => '5614506G', 'eldas' => '728800180', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP69',           'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP69',      'hilfskontakt' => 'Nein'],
      ['number' => '5614506H', 'eldas' => '728800190', 'title' => 'Wandsteckdose DUOi 32A5P 6H400V IP67/IP69 1HC',  'ampere' => '32A', 'pole' => '5', 'volt' => '400V', 'schutzart' => 'IP67/IP69', 'hilfskontakt' => 'Ja'],
    ];

    DuoiProduct::truncate();

    foreach ($products as $p)
    {
      DuoiProduct::create([
        'number'              => $p['number'],
        'title'               => ['de' => $p['title'], 'en' => $p['title'], 'fr' => $p['title'], 'it' => $p['title']],
        'eldas_number'        => $p['eldas'],
        'em_number'           => 'EM' . rand(100000, 999999),
        'ean_number'          => (string) rand(7610000000000, 7619999999999),
        'volt'                => $p['volt'],
        'ampere'              => $p['ampere'],
        'pole'                => $p['pole'],
        'schutzart'           => $p['schutzart'],
        'hilfskontakt'        => $p['hilfskontakt'],
        'ek'                  => rand(80, 350) + (rand(0, 99) / 100),
        'uvp_egh'             => rand(120, 500) + (rand(0, 99) / 100),
        'uvp_installateur'    => rand(150, 600) + (rand(0, 99) / 100),
        'publish'             => 1,
        'has_image'           => 0,
      ]);

      $this->line('Created: ' . $p['number'] . ' – ' . $p['title']);
    }

    $this->info('Seeded ' . count($products) . ' DUOi products.');
  }
}
