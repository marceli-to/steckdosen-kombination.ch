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
   * Show the homepage
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function index(Request $request)
  {
    // Save request data from wholesale shop / elbridge

    // Debug only
    // \Log::error($request->all());
    
    dd(env('SUBDOMAIN_KEY'));

    $data = [];
    session()->flush();
    session()->regenerate();
    if ($request->all())
    {
      foreach($request->all() as $key => $value)
      {
        $data[$key] = $value;
      }
      session(['api_connection_data' => $data]);
    }
    return view($this->viewPath . 'landing');
  }

  /**
   * Show the app
   *
   * @return \Illuminate\Http\Response
   */
  public function app()
  {
    return view($this->viewPath . 'app');
  }

}
