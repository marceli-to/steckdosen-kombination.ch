<?php
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends BaseController
{
  protected $viewPath = 'pages.';

  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Show the application
   *
   * @todo Add request parameter
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function index(Request $request)
  {
    // Save request data from wholesale shop / elbridge
    $data = [];
    session()->flush();
    \Log::error($request->all());
    if ($request->all())
    {
      foreach($request->all() as $key => $value)
      {
        $data[$key] = $value;
      }
      session(['api_connection_data' => $data]);
    }
    return view($this->viewPath . 'index');
  }

  /**
   * Endpoint for testing purposes
   * @return \Illuminate\Http\Response
   */

  public function updateFormData()
  {
    $products = Product::get();
    foreach($products as $product)
    {
      $product->form_data = json_encode([
        "CONFIGURATION_URL" => "https://steckdosen-kombination.ch/",
        "ITEM" => [
          [
            "SUPPLIER_ID_GLN" => "7611971000000", 
            "MANUFACTURER_PID" => $product->number, 
            "MANUFACTURER_TYPE_DESCR" => $product->description, 
            "INTERNATIONAL_PID" => "1234567890128", 
            "DESCRIPTION_SHORT" => $product->description, 
            "PRICE_AMOUNT" => "0.00",
            "CURRENCY" => "CHF",
            "PRICE_QUANTITY" => "1", 
            "UDX.EDXF.DISCOUNT_GROUP_MANUFACTURER" => "D123", 
            "QUANTITY" => "1.00",
            "ORDER_UNIT" => "C62",
            "VALIDITY_END" => "2025-12-31",
          ],
        ]
      ]);
      $product->save();
    }
    dd($products[mt_rand(0,172)]);
  }

}
