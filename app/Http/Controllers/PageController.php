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
    $data = [];
    session()->flush();
    session()->regenerate();

    session(['api_client' => env('SUBDOMAIN_KEY')]);

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
   * Show the privacy page
   *
   * @return \Illuminate\Http\Response
   */
  public function privacy()
  {
    return view($this->viewPath . 'privacy.privacy');
  }

  /**
   * Show the cookies page
   *
   * @return \Illuminate\Http\Response
   */
  public function cookies()
  {
    return view($this->viewPath . 'privacy.cookies');
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
