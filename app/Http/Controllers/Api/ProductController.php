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


    $products = Product::where($match)->get();
    return response()->json($products);
  }

}
