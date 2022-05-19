@extends('layout.main')
@section('content')

<main class="site" id="app">

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
            <div class="selector__pointer is-ch_16a_t25">
              <div>
                <div class="select">
                  <select>
                    <option>CH 16A T25</option>
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
            <div class="selector__pointer is-ch_16-32a_5p">
              <div>
                <div>
                  <div class="select">
                    <select>
                      <option>CEE 16A 5 P</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                  <div class="select">
                    <select>
                      <option>CEE 32A 5 P</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="86px" height="75px" viewBox="0 0 86 75" enable-background="new 0 0 86 75" xml:space="preserve">
                  <circle fill="#009B68" fill-opacity="0.3" cx="68" cy="18" r="16"/>
                  <circle fill="#009B68" cx="68" cy="18" r="6.4"/>
                  <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity="0.5" cx="68" cy="18" r="17"/>
                  <path fill="#009B68" d="M8,15h59c1.7,0,3,1.3,3,3l0,0c0,1.7-1.3,3-3,3H8c-1.7,0-3-1.3-3-3l0,0C5,16.3,6.3,15,8,15z"/>
                  <path fill="#009B68" d="M3,69h27c1.7,0,3,1.3,3,3l0,0c0,1.7-1.3,3-3,3H3c-1.7,0-3-1.3-3-3l0,0C0,70.3,1.3,69,3,69z"/>
                  <path fill="#009B68" d="M33,22v48c0,1.7-1.3,3-3,3l0,0c-1.7,0-3-1.3-3-3V22c0-1.7,1.3-3,3-3l0,0C31.7,19,33,20.3,33,22z"/>
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
            <div class="selector__pointer is-cee_16a_t23">
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
                    <option>CEE 16A T23</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="selector__pointer is-cee_63_5p">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="111" height="36" viewBox="0 0 111 36">
                  <circle cx="18" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                  <circle cx="18" cy="18" r="6.4" fill="#009b68"/>
                  <circle cx="18" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                  <path d="M19 15h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                </svg>
                <div class="select">
                  <select>
                    <option>CEE 63 5P</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="selector__pointer is-data_ports">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="111" height="36" viewBox="0 0 111 36">
                  <circle cx="18" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                  <circle cx="18" cy="18" r="6.4" fill="#009b68"/>
                  <circle cx="18" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                  <path d="M19 15h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
                </svg>
                <div class="select">
                  <select>
                    <option>Data Ports</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
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
          <div class="selector__pointer is-ch_16a_t25">
            <div>
              <div class="select">
                <select>
                  <option>CH 16A T25</option>
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
          <div class="selector__pointer is-ch_16-32a_5p">
            <div>
              <div>
                <div class="select">
                  <select>
                    <option>CEE 16A 5 P</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="select">
                  <select>
                    <option>CEE 32A 5 P</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="86px" height="75px" viewBox="0 0 86 75" enable-background="new 0 0 86 75" xml:space="preserve">
                <circle fill="#009B68" fill-opacity="0.3" cx="68" cy="18" r="16"/>
                <circle fill="#009B68" cx="68" cy="18" r="6.4"/>
                <circle fill="none" stroke="#009B68" stroke-width="2" stroke-opacity="0.5" cx="68" cy="18" r="17"/>
                <path fill="#009B68" d="M8,15h59c1.7,0,3,1.3,3,3l0,0c0,1.7-1.3,3-3,3H8c-1.7,0-3-1.3-3-3l0,0C5,16.3,6.3,15,8,15z"/>
                <path fill="#009B68" d="M3,69h27c1.7,0,3,1.3,3,3l0,0c0,1.7-1.3,3-3,3H3c-1.7,0-3-1.3-3-3l0,0C0,70.3,1.3,69,3,69z"/>
                <path fill="#009B68" d="M33,22v48c0,1.7-1.3,3-3,3l0,0c-1.7,0-3-1.3-3-3V22c0-1.7,1.3-3,3-3l0,0C31.7,19,33,20.3,33,22z"/>
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
          <div class="selector__pointer is-cee_16a_t23">
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
                  <option>CEE 16A T23</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="selector__pointer is-cee_63_5p">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="111" height="36" viewBox="0 0 111 36">
                <circle cx="18" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                <circle cx="18" cy="18" r="6.4" fill="#009b68"/>
                <circle cx="18" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                <path d="M19 15h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
              </svg>
              <div class="select">
                <select>
                  <option>CEE 63 5P</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="selector__pointer is-data_ports">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="111" height="36" viewBox="0 0 111 36">
                <circle cx="18" cy="18" r="16" fill="#009b68" fill-opacity=".3"/>
                <circle cx="18" cy="18" r="6.4" fill="#009b68"/>
                <circle cx="18" cy="18" r="17" fill="none" stroke="#009b68" stroke-width="2" stroke-opacity=".5"/>
                <path d="M19 15h89c1.7 0 3 1.3 3 3s-1.3 3-3 3H19c-1.7 0-3-1.3-3-3s1.3-3 3-3z" fill="#009b68"/>
              </svg>
              <div class="select">
                <select>
                  <option>Data Ports</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
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
  
</main>

{{-- 
<main class="site" id="app">
  <div>
    <app-component />
  </div>
</main>
--}}
@endsection