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
    // Save request data from wholesale shop
    $data = [];
    session()->flush();
    if ($request->all())
    {
      foreach($request->all() as $key => $value)
      {
        $data[$key] = $value;
      }
      session(['elbridge' => $data]);
    }
    return view($this->viewPath . 'index');
  }

  /**
   * Endpoint for testing purposes
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function test(Request $request)
  {
    //dd(Product::active()->get());
  }

  // public function dev()
  // {
  //   // $images = [
  //   //   '8102617',
  //   //   '25119',
  //   //   '25219',
  //   //   '25738',
  //   //   '86992ZA',
  //   //   '94358RO',
  //   //   '900005',
  //   //   '910223',
  //   //   '910440',
  //   //   '920019',
  //   //   '920021',
  //   //   '920022',
  //   //   '920201',
  //   //   '920201SI',
  //   //   '920277',
  //   //   '920590',
  //   //   '921501',
  //   //   '922323',
  //   //   '922933',
  //   //   '924425',
  //   //   '924426',
  //   //   '930018',
  //   //   '930031',
  //   //   '930231',
  //   //   '930298',
  //   //   '930298SI',
  //   //   '930299',
  //   //   '930299SI',
  //   //   '933176',
  //   //   '933413',
  //   //   '933416',
  //   //   '933467',
  //   //   '934854',
  //   //   '937119',
  //   //   '937122',
  //   //   '940215',
  //   //   '940809',
  //   //   '940809SI',
  //   //   '940810',
  //   //   '950297',
  //   //   '960219',
  //   //   '960269',
  //   //   '960355',
  //   //   '7106982',
  //   //   '7202170',
  //   //   '7202186B',
  //   //   '7205561',
  //   //   '7206728',
  //   //   '7304214',
  //   //   '7304214SW',
  //   //   '7307682',
  //   //   '7307753',
  //   //   '7309180',
  //   //   '7309193',
  //   //   '7410385',
  //   //   '7410398',
  //   // ];
  //   // foreach($images as $img)
  //   // {
  //   //   $product = Product::where('number', $img)->first();
  //   //   if ($product)
  //   //   {
  //   //     $product->has_image = 1;
  //   //     $product->save();
  //   //   }
  //   // }

  //   // $products = [
  //   //   '84161',
  //   //   '900005',
  //   //   '6102145',
  //   //   '6104498',
  //   //   '6104652',
  //   //   '6104768',
  //   //   '6217747',
  //   //   '6218229',
  //   //   '6311514',
  //   //   '6311154',
  //   //   '7410385',
  //   //   '7410398',
  //   //   '7417283',
  //   //   '8106731',
  //   //   '9200006',
  //   //   '9200604',
  //   //   '9201009',
  //   //   '9400269',
  //   //   '9400272',
  //   //   '9400285',
  //   //   '9400298',
  //   //   '86453ZA',
  //   //   '86992ZA',
  //   //   '86993ZA',
  //   //   '9402686GE',
  //   //   '9404364RO',
  //   //   '9406524SI',
  //   //   '9406540SI',
  //   //   '9406810SI',
  //   //   '9408925SI',
  //   //   '9409076SI',
  //   //   '9409089SI',
  //   //   '9409661GE',
  //   //   '9409748SI',
  //   //   '94358RO',
  //   // ];
  //   // foreach($products as $p)
  //   // {
  //   //   $product = Product::where('number', $p)->first();
  //   //   if ($product)
  //   //   {
  //   //     $product->publish = 0;
  //   //     $product->save();
  //   //   }
  //   // }
  // }
}
