<?php

  ob_start( "ob_gzhandler" );
  date_default_timezone_set( 'America/Mexico_City' );
  
  $pageTitle = "¡Somos #AgentesDeCambio!";
  $pageActive = "index";
  
  
  include_once "include/_tools_pdo.php";
  include_once "include/_functions_basic.php";

  $pageScript = $pageActive;

?><!doctype html>

  <html lang="en">

    <head>
      
      <?php

        $urlBase = $isLocal ? "/" : "https://medalh.com/feb/";
        $pageURL = 'http'. ( isset( $_SERVER[ 'HTTPS' ] ) ? 's' : '' ) .
                    '://somos.medalh.com'. $_SERVER[ 'REQUEST_URI' ];
        $titleTail = "#SomosMEDALH";
        $descBase = "Ven con nosotros y prepárate para ser el mejor técnico terapeuta, contamos con capacitación en distintas disciplinas, con precios competitivos a tu alcance, para que puedas convertirte en un auténtico #AgenteDeCambio.";
        $ogImg = $pageActive == 'index' ?
          $urlBase .'img/courses/index_og.jpg?v='. randomString( 'std', 3 ) : (
            $pageActive == 'contact' ? 
              $urlBase .'img/courses/contact_og.jpg?v='. randomString( 'std', 3 ) :
              $urlBase .'img/courses/'. $wocu .'_og.jpg?v='. randomString( 'std', 3 )
              );
        $siteNam = "#SomosMEDALH";

        include_once "include/_pageSections_head.php";

        ?>     

    </head>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
      src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v16.0&appId=693583352195133&autoLogAppEvents=1" nonce="ha58srKt"></script>

    <body>

      <header class="changeHdr" data-act="n">
        <?php include_once "include/_pageSections_header.php"; ?>
      </header>
      
      <main class="wrapper index">
        
        <?php // AJAX frontSliders ?>
        <section class="owl-carousel frontCarousel"></section>
        
        <?php
          
        include_once "include/_pageSections_indexFeats.php";
        if( $blogAllowed ) include_once "include/_pageSections_indexBlog.php";

        // Falta definir
        include_once "include/_pageSections_indexFb.php";

        include_once "include/_pageSections_indexWorkshops.php"; ?>

      </main>

      <footer>
        <?php include_once "include/_pageSections_footer.php"; ?>
      </footer>

      <div class="ftr-copy">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>
                &copy; 2022 <a href="https://somos.medalh.com">CIC-MEDALH&reg;.</a> Todos los derechos reservados.
                Diseño y hospedaje: <a href="https://soy.tatoroper.com">@soytatoroper</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <?php include_once "include/_pageSections_bottomContent.php"; ?>

    </body>

  </html>
