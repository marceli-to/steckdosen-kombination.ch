<?php
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use App\Models\MennekesProduct;
use Illuminate\Http\Request;

class PageController extends BaseController
{
  protected $viewPath = 'pages.';

  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Show the product selection homepage
   */
  public function home()
  {
    return view($this->viewPath . 'home');
  }

  /**
   * Show the Steckdosen-Kombination landing page
   */
  public function steckdosenKombinationLanding(Request $request)
  {
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
    return view($this->viewPath . 'steckdosen-kombination.landing');
  }

  /**
   * Show the Steckdosen-Kombination configurator app
   */
  public function steckdosenKombinationApp()
  {
    return view($this->viewPath . 'steckdosen-kombination.app');
  }

  /**
   * Show the Wandsteckdose DUOi landing page
   */
  public function wandsteckdoseDuoiLanding(Request $request)
  {
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
    return view($this->viewPath . 'wandsteckdose-duoi.landing');
  }

  /**
   * Show the Wandsteckdose DUOi configurator app
   */
  public function wandsteckdoseDuoiApp()
  {
    return view($this->viewPath . 'wandsteckdose-duoi.app');
  }

  /**
   * Show the privacy page
   */
  public function privacy()
  {
    return view($this->viewPath . 'privacy.privacy');
  }

  /**
   * Show the cookies page
   */
  public function cookies()
  {
    return view($this->viewPath . 'privacy.cookies');
  }
}
