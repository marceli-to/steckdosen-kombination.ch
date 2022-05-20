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
    $products = Product::where($match)->get();
    return response()->json($products);
  }

}
