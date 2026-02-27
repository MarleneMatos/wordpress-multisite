<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WHZR4X5');
  </script>
  <!-- End Google Tag Manager -->
</head>


<body <?php body_class($css_class = 'polygon mm') ?> <?php if (wp_kses_post(get_field('hero_style')) == "hero-polygon") { ?> id="polygon" <?php } ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHZR4X5"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="visually-hidden">

    <h1><?php the_title(); ?></h1>
  </div>

  <div class="dropdown bd-mode-toggle">
    <button class="btn dropdown-toggle" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown">

      <svg class="bi theme-icon-active" aria-hidden="true">
        <use href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-sun') ?>"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle mode</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-start shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="true">
          <svg class="me-2" aria-hidden="true">
            <use href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-sun') ?>"></use>
          </svg>
          Light
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="me-2" aria-hidden="true">
            <use href="<?php echo get_theme_file_uri('assets/icons/icomoon-entypoPlus/sprite.svg#icon-moon') ?>"></use>
          </svg>
          Dark
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
          <svg class="me-2" aria-hidden="true">
            <use href="<?php echo get_theme_file_uri('assets/icons/icomoon-free490/sprite.svg#icon-contrast') ?>"></use>
          </svg>
          Auto
        </button>
      </li>

    </ul>
  </div>

  <div class="container-fluid g-0">
    <a class="btn-brand" href="#home">
      <svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" id="svg1" width="800" height="800" viewBox="0 0 800 800" sodipodi:docname="marlene-matos-logo-b.svg" inkscape:version="1.4 (86a8ad7, 2024-10-11)" inkscape:export-filename="marlene-matos-logo.png" inkscape:export-xdpi="96" inkscape:export-ydpi="96">
        <defs id="defs1">
          <clipPath clipPathUnits="userSpaceOnUse" id="clipPath2">
            <path d="M 0,600 H 600 V 0 H 0 Z" transform="translate(-599.00002,-300.00001)" id="path2" />
          </clipPath>
          <clipPath clipPathUnits="userSpaceOnUse" id="clipPath4">
            <path d="M 0,600 H 600 V 0 H 0 Z" transform="translate(-300.00541,-598.99661)" id="path4" />
          </clipPath>
          <linearGradient id="rainbow" x1="0%" x2="100%" y1="0%" y2="0%">
            <stop offset="2.7%" stop-color="rgba(223,0,0,1)" />
            <stop offset="15.1%" stop-color="rgba(214,91,0,1)" />
            <stop offset="29.5%" stop-color="rgba(233,245,0,1)" />
            <stop offset="45.8%" stop-color="rgba(23,255,17,1)" />
            <stop offset="61.5%" stop-color="rgba(29,255,255,1)" />
            <stop offset="76.4%" stop-color="rgba(5,17,255,1)" />
            <stop offset="92.4%" stop-color="rgba(202,0,253,1)" />
          </linearGradient>
        </defs>
        <sodipodi:namedview id="namedview1" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" inkscape:zoom="1.085" inkscape:cx="400" inkscape:cy="547.46544" inkscape:window-width="1920" inkscape:window-height="1112" inkscape:window-x="6" inkscape:window-y="1342" inkscape:window-maximized="1" inkscape:current-layer="layer-MC0">
          <inkscape:page x="0" y="0" inkscape:label="1" id="page1" width="800" height="800" margin="1.3378533 1.3333334 1.3373333" bleed="0" />
        </sodipodi:namedview>
        <g id="layer-MC0" inkscape:groupmode="layer" inkscape:label="Layer 1">
          <path id="path1" d="m 0,0 c 0,-165.131 -133.867,-298.997 -299,-298.997 -165.133,0 -299,133.866 -299,298.997 0,165.131 133.867,298.997 299,298.997 C -133.867,298.997 0,165.131 0,0" style="display:none;fill:#fdfdfd;fill-opacity:1;fill-rule:nonzero;stroke:none" transform="matrix(1.3333333,0,0,-1.3333333,798.66667,400)" clip-path="url(#clipPath2)" />
          <path id="path3" d="m 0,0 c -165.133,0 -299.005,-133.862 -299.005,-299.005 0,-96.993 46.197,-183.178 117.774,-237.801 -2.924,2.225 -5.809,4.498 -8.644,6.83 -12.058,47.395 -21.758,83.013 -25.429,95.384 -29.448,99.145 -7.182,201.451 57.459,163.079 52.064,-30.868 75.457,-76.822 108.014,-65.229 32.565,11.593 12.548,121.938 62.702,152.94 68.929,42.588 179.709,-156.45 244.234,-250.164 1.884,-2.734 3.725,-5.26 5.6,-7.912 -8.144,-14.937 -17.579,-29.046 -28.047,-42.295 -23.615,32.647 -48.425,70.384 -74.659,113.963 -116.419,193.357 -136.668,71.063 -140.463,43.427 -3.78,-27.635 22.533,-243.607 -124.888,-71.875 -101.484,118.232 -99.091,18.025 -63.042,-102.138 4.511,-15.05 9.889,-33.852 15.712,-55.268 -9.734,5.792 -19.128,12.108 -28.121,18.927 50.213,-38.177 112.855,-60.857 180.803,-60.857 165.134,0 298.995,133.857 298.995,298.989 C 298.995,-133.862 165.134,0 0,0" style="fill:var(--wtf-primary);fill-opacity:1;fill-rule:nonzero;stroke:none" transform="matrix(1.3333333,0,0,-1.3333333,400.0072,1.3378667)" clip-path="url(#clipPath4)" />
        </g>
      </svg>
    </a>

    <nav class="navbar iconic">

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#wtf-sidenav" aria-controls="wtf-sidenav"
        aria-label="Toggle navigation">
        <span class="navbar-toggler--icon">
      </button>

      <div class="offcanvas offcanvas-end h-100" tabindex="-1" id="wtf-sidenav"
        aria-labelledby="wtf-sidenavLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 text-center">

          <ul class="navbar-nav justify-content-center flex-grow-1">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#benefits">Benefits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#contact">Contact</a>
            </li>
          </ul>




        </div>
      </div>
    </nav>


    <main class="g-0 m-0 p-0" data-bs-spy="scroll" data-bs-target="#wtf-sidenav" data-bs-smooth-scroll="true" tabindex="0">