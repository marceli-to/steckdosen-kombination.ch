<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\DataCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Get a filtered list of products
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function filter(Request $request)
  {
    $match = [];
    if ($request->input('fi_ls') && $request->input('fi_ls') != 'null')
    {
      $match['fi_ls'] = $request->input('fi_ls');
    }

    if ($request->input('fi_switch') && $request->input('fi_switch') != 'null')
    {
      $match['fi_switch'] = $request->input('fi_switch');
    }

    if ($request->input('cee_16a_3p') && $request->input('cee_16a_3p') != 'null')
    {
      $match['cee_16a_3p'] = $request->input('cee_16a_3p');
    }

    if ($request->input('ch_16a_t25') && $request->input('ch_16a_t25') != 'null')
    {
      $match['ch_16a_t25'] = $request->input('ch_16a_t25');
    }

    if ($request->input('data_ports') && $request->input('data_ports') != 'null')
    {
      $match['data_ports'] = $request->input('data_ports');
    }

    if ($request->input('ch_16a_t23') && $request->input('ch_16a_t23') != 'null')
    {
      $match['ch_16a_t23'] = $request->input('ch_16a_t23');
    }

    if ($request->input('cee_63a_5p') && $request->input('cee_63a_5p') != 'null')
    {
      $match['cee_63a_5p'] = $request->input('cee_63a_5p');
    }

    if ($request->input('cee_32a_5p') && $request->input('cee_32a_5p') != 'null')
    {
      $match['cee_32a_5p'] = $request->input('cee_32a_5p');
    }

    if ($request->input('cee_16a_5p') && $request->input('cee_16a_5p') != 'null')
    {
      $match['cee_16a_5p'] = $request->input('cee_16a_5p');
    }

    // Get filtered products
    $products = Product::where($match)->get();

    // Set newly available filter options
    $filter = [
      'cee_63a_5p' => [],
      'cee_32a_5p' => [],
      'cee_16a_5p' => [],
      'ch_16a_t25' => [],
      'cee_16a_3p' => [],
      'ch_16a_t23' => [],
      'data_ports' => [],
      'fi_switch' => [],
      'fi_ls' => [],
    ];

    foreach($products as $product)
    {
      if (!in_array($product->cee_63a_5p, $filter['cee_63a_5p']) && $product->cee_63a_5p != 0)
      {
        $filter['cee_63a_5p'][] = $product->cee_63a_5p;
      }
      if (!in_array($product->cee_32a_5p, $filter['cee_32a_5p']) && $product->cee_32a_5p != 0)
      {
        $filter['cee_32a_5p'][] = $product->cee_32a_5p;
      }
      if (!in_array($product->cee_16a_5p, $filter['cee_16a_5p']) && $product->cee_16a_5p != 0)
      {
        $filter['cee_16a_5p'][] = $product->cee_16a_5p;
      }
      if (!in_array($product->ch_16a_t25, $filter['ch_16a_t25']) && $product->ch_16a_t25 != 0)
      {
        $filter['ch_16a_t25'][] = $product->ch_16a_t25;
      }
      if (!in_array($product->cee_16a_3p, $filter['cee_16a_3p']) && $product->cee_16a_3p != 0)
      {
        $filter['cee_16a_3p'][] = $product->cee_16a_3p;
      }
      if (!in_array($product->ch_16a_t23, $filter['ch_16a_t23']) && $product->ch_16a_t23 != 0)
      {
        $filter['ch_16a_t23'][] = $product->ch_16a_t23;
      }
      if (!in_array($product->data_ports, $filter['data_ports']) && $product->data_ports != 0)
      {
        $filter['data_ports'][] = $product->data_ports;
      }
      if (!in_array($product->fi_switch, $filter['fi_switch']) && $product->fi_switch != 0)
      {
        $filter['fi_switch'][] = $product->fi_switch;
      }
      if (!in_array($product->fi_ls, $filter['fi_ls']) && $product->fi_ls != 0)
      {
        $filter['fi_ls'][] = $product->fi_ls;
      }
    }
    return response()->json(['products' => $products, 'filter_options' => $filter]);
  }

}
