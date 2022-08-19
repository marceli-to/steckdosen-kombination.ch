(function () {

  const classes = {
    visible: 'is-visible',
  };

  const selectors = {
    btnShow: '.js-language-menu-show-btn',
    btnHide: '.js-language-menu-hide-btn',
    menu: '.js-language-menu'
  };

  const init = () => {

    // Handle click 'show'
    const btnShow = document.querySelector(selectors.btnShow);
    btnShow.addEventListener("click", show, false);

    // Handle click 'hide'
    const btnHide = document.querySelector(selectors.btnHide);
    btnHide.addEventListener("click", hide, false);

    // Handle keydown 'escape'
    document.addEventListener('keydown', function(event){
      if (event.key === "Escape") {
        hide();
      }
    });

    // Handle click 'outside'
    const menu = document.querySelector(selectors.menu);
    menu.addEventListener('click', function(event){
      const box = document.querySelector(selectors.menu + ' > div');
      if (event.target.contains(box) && event.target !== box) {
        hide();
      }
    });
  };

  const show = () => {
    const menu = document.querySelector(selectors.menu);
    menu.classList.add(classes.visible);
  };

  const hide = () => {
    const menu = document.querySelector(selectors.menu);
    menu.classList.remove(classes.visible);
  };


  init();
  
})();

