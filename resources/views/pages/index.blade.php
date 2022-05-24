@extends('layout.main')
@section('content')

{{-- <main class="site" id="app">
  <div class="configurator">
    <section class="configurator__filter">
      <div>
        <header>
          <h1>Konfigurator für Wand-Stromverteiler</h1>
        </header>
        
        <!-- Mobile -->
        <div class="selector is-mobile">
          <div class="is-right">
            <img src="/assets/img/powerbox-right.png" width="320" height="590">
            <div class="selector__pointer is-fi_ls">
              <div>
                <div class="select">
                  <select>
                    <option>FI / LS</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="36" viewBox="0 0 81 36">
                  <circle cx="63" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                  <circle cx="63" cy="18" r="6.4" fill="#009b68"/>
                  <circle cx="63" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                  <path d="M3 15h59c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                </svg>
              </div>
            </div>
            <div class="selector__pointer is-cee_16a_3p">
              <div>
                <div class="select">
                  <select>
                    <option>CEE 16A 3p</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="36" viewBox="0 0 81 36">
                  <circle cx="63" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                  <circle cx="63" cy="18" r="6.4" fill="#009b68"/>
                  <circle cx="63" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                  <path d="M3 15h59c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                </svg>
              </div>
            </div>
            <div class="selector__pointer is-data_ports">
              <div>
                <div class="select">
                  <select>
                    <option>Data Ports</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="107" height="36" viewBox="0 0 107 36">
                  <circle fill="#009B68" fill-opacity=".3" cx="89" cy="18" r="16"/>
                  <circle fill="#009B68" cx="89" cy="18" r="6.4"/>
                  <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity=".5" cx="89" cy="18" r="17"/>
                  <path fill="#009B68" d="M3 15h80c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z"/>
                </svg>
              </div>
            </div>
            <div class="selector__pointer is-ch_16a_t25">
              <div>
                <div class="select">
                  <select>
                    <option>16A T25</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="91" height="36" viewBox="0 0 91 36">
                  <circle fill="#009B68" fill-opacity=".3" cx="73" cy="18" r="16"/>
                  <circle fill="#009B68" cx="73" cy="18" r="6.4"/>
                  <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity=".5" cx="73" cy="18" r="17"/>
                  <path fill="#009B68" d="M3 15h69c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="is-left">
            <img src="/assets/img/powerbox-left.png" width="320" height="590">
            <div class="selector__pointer is-fi_switch">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="141" height="92" viewBox="0 0 141 92">
                  <circle cx="18" cy="74" r="16" fill="#009b68" fill-opacity=".3"/>
                  <circle cx="18" cy="74" r="6.4" fill="#009b68"/>
                  <circle cx="18" cy="74" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                  <path d="M19 0h119c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                  <path d="M21 3v67c0 1.7-1.3 3-3 3s-3-1.3-3-3V3c0-1.7 1.3-3 3-3s3 1.3 3 3z" fill="#009b68"/>
                </svg>
                <div class="select">
                  <select>
                    <option>FI-Schalter</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="selector__pointer is-ch_16a_t23">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="110" height="76" viewBox="0 0 110 76">
                  <circle cx="18" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                  <circle cx="18" cy="18" r="6.4" fill="#009b68"/>
                  <circle cx="18" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                  <path d="M18 70h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H18c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                  <path d="M21 18v54c0 1.7-1.3 3-3 3s-3-1.3-3-3V18c0-1.7 1.3-3 3-3s3 1.3 3 3z" fill="#009b68"/>
                </svg>
                <div class="select">
                  <select>
                    <option>16A T23</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="selector__pointer is-cee_63a_32a_16a_5p">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="111" height="121" viewBox="0 0 111 121">
                  <circle fill="#009B68" fill-opacity=".3" cx="18" cy="18" r="16"/>
                  <circle fill="#009B68" cx="18" cy="18" r="6.4"/>
                  <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity=".5" cx="18" cy="18" r="17"/>
                  <path fill="#009B68" d="M19 15h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3zM58.3 64h47.5c2.9 0 5.3 1.3 5.3 3s-2.4 3-5.3 3H58.3c-2.9 0-5.3-1.3-5.3-3s2.4-3 5.3-3zM56 115h50c2.8 0 5 1.3 5 3s-2.2 3-5 3H56c-2.8 0-5-1.3-5-3s2.2-3 5-3z"/>
                  <path fill="#009B68" d="M57 18v100c0 1.7-1.3 3-3 3s-3-1.3-3-3V18c0-1.7 1.3-3 3-3s3 1.3 3 3z"/>
                </svg>
                <div>
                  <div class="select">
                    <select>
                      <option>CEE 63A 5P</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                  <div class="select">
                    <select>
                      <option>CEE 32A 5P</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                  <div class="select">
                    <select>
                      <option>CEE 16A 5P</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Mobile -->

        <!-- Tablet and Desktop -->
        <div class="selector is-tablet">
          <img src="/assets/img/powerbox.png" width="590" height="590">
          <div class="selector__pointer is-fi_ls">
            <div>
              <div class="select">
                <select>
                  <option>FI / LS</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="81" height="36" viewBox="0 0 81 36">
                <circle cx="63" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                <circle cx="63" cy="18" r="6.4" fill="#009b68"/>
                <circle cx="63" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                <path d="M3 15h59c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
              </svg>
            </div>
          </div>
          <div class="selector__pointer is-cee_16a_3p">
            <div>
              <div class="select">
                <select>
                  <option>CEE 16A 3P</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="81" height="36" viewBox="0 0 81 36">
                <circle cx="63" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                <circle cx="63" cy="18" r="6.4" fill="#009b68"/>
                <circle cx="63" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                <path d="M3 15h59c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
              </svg>
            </div>
          </div>
          <div class="selector__pointer is-ch_16a_t25">
            <div>
              <div class="select">
                <select>
                  <option>16A T25</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="91" height="36" viewBox="0 0 91 36">
                <circle fill="#009B68" fill-opacity=".3" cx="73" cy="18" r="16"/>
                <circle fill="#009B68" cx="73" cy="18" r="6.4"/>
                <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity=".5" cx="73" cy="18" r="17"/>
                <path fill="#009B68" d="M3 15h69c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z"/>
              </svg>
            </div>
          </div>
          <div class="selector__pointer is-fi_switch">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="141" height="92" viewBox="0 0 141 92">
                <circle cx="18" cy="74" r="16" fill="#009b68" fill-opacity=".3"/>
                <circle cx="18" cy="74" r="6.4" fill="#009b68"/>
                <circle cx="18" cy="74" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                <path d="M19 0h119c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                <path d="M21 3v67c0 1.7-1.3 3-3 3s-3-1.3-3-3V3c0-1.7 1.3-3 3-3s3 1.3 3 3z" fill="#009b68"/>
              </svg>
              <div class="select">
                <select>
                  <option>FI-Schalter</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="selector__pointer is-ch_16a_t23">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="76" viewBox="0 0 110 76">
                <circle cx="18" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                <circle cx="18" cy="18" r="6.4" fill="#009b68"/>
                <circle cx="18" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                <path d="M18 70h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H18c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                <path d="M21 18v54c0 1.7-1.3 3-3 3s-3-1.3-3-3V18c0-1.7 1.3-3 3-3s3 1.3 3 3z" fill="#009b68"/>
              </svg>
              <div class="select">
                <select>
                  <option>16A T23</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="selector__pointer is-cee_63a_32a_16a_5p">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="111" height="121" viewBox="0 0 111 121">
                <circle fill="#009B68" fill-opacity=".3" cx="18" cy="18" r="16"/>
                <circle fill="#009B68" cx="18" cy="18" r="6.4"/>
                <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity=".5" cx="18" cy="18" r="17"/>
                <path fill="#009B68" d="M19 15h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3zM58.3 64h47.5c2.9 0 5.3 1.3 5.3 3s-2.4 3-5.3 3H58.3c-2.9 0-5.3-1.3-5.3-3s2.4-3 5.3-3zM56 115h50c2.8 0 5 1.3 5 3s-2.2 3-5 3H56c-2.8 0-5-1.3-5-3s2.2-3 5-3z"/>
                <path fill="#009B68" d="M57 18v100c0 1.7-1.3 3-3 3s-3-1.3-3-3V18c0-1.7 1.3-3 3-3s3 1.3 3 3z"/>
              </svg>
              <div>
                <div class="select">
                  <select>
                    <option>CEE 63A 5P</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="select">
                  <select>
                    <option>CEE 32A 5P</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="select">
                  <select>
                    <option>CEE 16A 5P</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="selector__pointer is-data_ports">
            <div>
              <div class="select">
                <select>
                  <option>Data Ports</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="107" height="36" viewBox="0 0 107 36">
                <circle fill="#009B68" fill-opacity=".3" cx="89" cy="18" r="16"/>
                <circle fill="#009B68" cx="89" cy="18" r="6.4"/>
                <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity=".5" cx="89" cy="18" r="17"/>
                <path fill="#009B68" d="M3 15h80c1.7 0 3 1.3 3 3s-1.3 3-3 3H3c-1.7 0-3-1.3-3-3s1.3-3 3-3z"/>
              </svg>
            </div>
          </div>
        </div>
         <!-- // Tablet and Desktop -->
      </div>
    </section>
    <section class="configurator__result">
      <header>
        <h1>Passende Produkte</h1>
      </header>
      <div>
        <p>Produkt 1</p>
        <p>Produkt 2</p>
        <p>Produkt 3</p>
      </div>
    </section>
  </div>
</main> --}}


<main class="site" id="app">
  <div>
    <app-component />
  </div>
</main>

@endsection