<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\DataCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  protected $filter_options = [
    'fi_ls' => [],
    'fi_switch' => [],
    'cee_16a_3p' => [],
    'ch_16a_t25' => [],
    'data_ports' => [],
    'ch_16a_t23' => [],
    'cee_63a_5p' => [],
    'cee_32a_5p' => [],
    'cee_16a_5p' => [],
  ];

  /**
   * Get a filtered list of products
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function filter(Request $request)
  {
    // Build search query
    $matches = [];
    foreach($request->all() as $key => $value)
    {
      if ($request->input($key) && $request->input($key) != 'null')
      {
        $matches[$key] = $value;
      }
    }
    $products = Product::active()->where($matches)->orderBy('eldas_number', 'DESC')->get();
    $this->getFilterOptions(TRUE, $matches);
    return response()->json(['products' => $products, 'filter_options' => $this->filter_options]);
  }

  /**
   * Get filter options
   */

  public function getFilterOptions($isQuery = FALSE, $matches = [])
  {

    $products = $isQuery && !empty($matches) ? Product::active()->where($matches)->orderBy('eldas_number', 'DESC')->get() : Product::active()->orderBy('eldas_number', 'DESC')->get();

    // Loops over resulting products and set new filter options
    foreach($products as $product)
    {
      if (!in_array($product->cee_63a_5p, $this->filter_options['cee_63a_5p']) && $product->cee_63a_5p != 0)
      {
        $this->filter_options['cee_63a_5p'][] = $product->cee_63a_5p;
      }
      if (!in_array($product->cee_32a_5p, $this->filter_options['cee_32a_5p']) && $product->cee_32a_5p != 0)
      {
        $this->filter_options['cee_32a_5p'][] = $product->cee_32a_5p;
      }
      if (!in_array($product->cee_16a_5p, $this->filter_options['cee_16a_5p']) && $product->cee_16a_5p != 0)
      {
        $this->filter_options['cee_16a_5p'][] = $product->cee_16a_5p;
      }
      if (!in_array($product->ch_16a_t25, $this->filter_options['ch_16a_t25']) && $product->ch_16a_t25 != 0)
      {
        $this->filter_options['ch_16a_t25'][] = $product->ch_16a_t25;
      }
      if (!in_array($product->cee_16a_3p, $this->filter_options['cee_16a_3p']) && $product->cee_16a_3p != 0)
      {
        $this->filter_options['cee_16a_3p'][] = $product->cee_16a_3p;
      }
      if (!in_array($product->ch_16a_t23, $this->filter_options['ch_16a_t23']) && $product->ch_16a_t23 != 0)
      {
        $this->filter_options['ch_16a_t23'][] = $product->ch_16a_t23;
      }
      if (!in_array($product->data_ports, $this->filter_options['data_ports']) && $product->data_ports != 0)
      {
        $this->filter_options['data_ports'][] = $product->data_ports;
      }
      if (!in_array($product->fi_switch, $this->filter_options['fi_switch']) && $product->fi_switch != 0)
      {
        $this->filter_options['fi_switch'][] = $product->fi_switch;
      }
      if (!in_array($product->fi_ls, $this->filter_options['fi_ls']) && $product->fi_ls != 0)
      {
        $this->filter_options['fi_ls'][] = $product->fi_ls;
      }
    }

    return response()->json($this->filter_options);
  }

}
