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
   * Initialise the configurator session.
   *
   * On entry from a wholesale shop / elbridge (incoming GET query or POST body) a fresh
   * session is started and the connection data (e.g. hookurl) is stored. On internal
   * navigation (no incoming data, e.g. picking a product on the homepage) the previously
   * stored connection data is preserved. The partner key is always (re)asserted so the
   * configurator renders the correct partner UI.
   */
  protected function initSession(Request $request)
  {
    $incoming = $request->all();

    if (count($incoming))
    {
      session()->flush();
      session()->regenerate();
      session(['api_connection_data' => $incoming]);
    }

    session(['api_client' => env('SUBDOMAIN_KEY')]);
  }

  /**
   * Show the product selection homepage
   */
  public function home(Request $request)
  {
    $this->initSession($request);
    return view($this->viewPath . 'home');
  }

  /**
   * Show the Steckdosen-Kombination landing page
   */
  public function steckdosenKombinationLanding(Request $request)
  {
    $this->initSession($request);
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
    $this->initSession($request);
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
