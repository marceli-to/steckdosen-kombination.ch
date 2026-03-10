<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\DuoiProduct;
use Illuminate\Http\Request;

class DuoiProductController extends Controller
{
  protected $filter_attributes = ['volt', 'ampere', 'pole', 'schutzart', 'hilfskontakt'];

  protected $filter_options = [
    'volt'         => [],
    'ampere'       => [],
    'pole'         => [],
    'schutzart'    => [],
    'hilfskontakt' => [],
  ];

  public function filter(Request $request)
  {
    app()->setLocale('de');

    $matches = [];
    foreach($this->filter_attributes as $attr)
    {
      if ($request->input($attr) && $request->input($attr) != 'null')
      {
        $matches[] = [$attr, '=', $request->input($attr)];
      }
    }

    $products = DuoiProduct::active()->where($matches)->orderBy('eldas_number', 'DESC')->get();
    $this->getFilterOptions(TRUE, $matches);

    return response()->json(
      [
        'products' => $products,
        'filter_options' => $this->filter_options,
        'api_connection' => session()->has('api_connection_data') ? session('api_connection_data') : null,
        'api_client' => session()->has('api_client') ? session('api_client') : null
      ]
    );
  }

  public function getFilterOptions($isQuery = FALSE, $matches = [])
  {
    $products = $isQuery && !empty($matches)
      ? DuoiProduct::active()->where($matches)->orderBy('eldas_number', 'DESC')->get()
      : DuoiProduct::active()->orderBy('eldas_number', 'DESC')->get();

    foreach($products as $product)
    {
      foreach($this->filter_attributes as $attr)
      {
        if ($product->$attr && !in_array($product->$attr, $this->filter_options[$attr]))
        {
          $this->filter_options[$attr][] = $product->$attr;
        }
      }
    }

    return response()->json($this->filter_options);
  }
}
