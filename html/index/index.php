<?php include(HTML_DIR.'overall/header.php'); ?>

<body>
<?php include(HTML_DIR.'overall/topnav.php'); ?>

<div class="modal fade" id="Login" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Iniciar Sesión</h4>
       </div>
       <div class="modal-body">
         <div role="form">
           <div class="form-group">
             <label for="usrname_or_email"><span class="glyphicon glyphicon-user"></span> Usuario o Email</label>
             <input type="text" class="form-control" id="user_login" placeholder="Introducir Email">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
             <input type="text" class="form-control" id="pass_login" placeholder="Introducir Contraseña">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" value="1" id="session_login" checked>Recordarme</label>
           </div>
           <button type="button" class="btn btn-success btn-block" id="iniciar_sesion"><span class="glyphicon glyphicon-off"></span> Iniciar Sesión</button>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         <p>¿No estás registrado? <a data-toggle="modal" data-target="#Registro">Registrate!</a></p>
         <p>Contraseña <a data-toggle="modal" data-target="#Lostpass">perdida?</a></p>
       </div>
     </div>
   </div>
 </div>

<div class="modal fade" id="Registro" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
       </div>
       <div class="modal-body">
         <form role="form">
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
             <input type="text" class="form-control" id="user_reg" placeholder="Introduce un nombre de usuario">
           </div>
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
             <input type="email" class="form-control" id="email_reg" placeholder="Introduce tu correo electrónico">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
             <input type="text" class="form-control" id="pass_reg" placeholder="Introduce tu contraseña">
           </div>
           <div class="form-group">
             <label for="psw_two"><span class="glyphicon glyphicon-eye-open"></span> Repite tu Contraseña</label>
             <input type="text" class="form-control" id="pass_reg_dos" placeholder="Introduce tu contraseña de nuevo">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" id="tyc_reg" value="1" checked>Acepto los T&C</label>
           </div>
           <button type="button" id="registrarme" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrarme</button>
         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn  pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
 </div>

 <div class="modal fade" id="Lostpass" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Recuperar Contraseña</h4>
        </div>
        <div class="modal-body">
          <div role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-enveloper"></span> Email</label>
              <input type="email" class="form-control" id="email_lostpass" placeholder="Enter email">
            </div>
            <button type="button" class="btn btn-success btn-block" id="recuperar_passs"><span class="glyphicon glyphicon-off"></span> Recuperar</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
    </div>
  </div>

<section class="engine"><a rel="external" href="https://mobirise.com">free website design software</a></section><section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-6" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-6" data-slide-to="0" class="active"></li><li data-app-prevent-settings="" data-target="#slider-6" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider-6" class="" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(assets/images/paisajes-a-01.svg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-right mbr-box__magnet--sm-padding mbr-after-navbar">

                        <div class=" container">

                            <div class="row">
                                <div class=" col-md-6 col-md-offset-5">

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text"><br><span style="font-family: inherit;">Back-end &amp; Front-end</span><br></h1>

                                    <p class="mbr-hero__subtext">Diseñamos y desarrollamos tu sitio web con todas<br>sus funcionalidades y componentes</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left mbr-buttons--right"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="https://mobirise.com">FOR WINDOWS</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/paisajes-b-01.svg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-left mbr-box__magnet--sm-padding mbr-after-navbar">

                        <div class=" container">

                            <div class="row">
                                <div class=" col-md-6 col-md-offset-1">

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Trabajo cooperativo</h1>

                                    <p class="mbr-hero__subtext">Junto con tigo, diseñamos estrategias<br>para construir la solución que necesitas&nbsp;<br>en el menor tiempo</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="https://mobirise.com">FOR WINDOWS</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/paisajes-c-01.svg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center mbr-box__magnet--sm-padding mbr-after-navbar">

                        <div class=" container">

                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Compromiso</h1>

                                    <p class="mbr-hero__subtext">Llevaremos a cabo tus ideas, y en el peor de los casos<br>te indicaremos el camino a seguir&nbsp;</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="https://mobirise.com">FOR WINDOWS</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-6">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-6">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header1-1" style="background-image: url(assets/images/sky-bg-2000x1125-6.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">

        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6 col-sm-offset-6">
                    <div class="mbr-hero animated fadeInUp">


                    </div>

                </div></div>
            </div></div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#content4-3"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="content4-3" style="background-color: rgb(255, 255, 255);">


    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            <div class="mbr-section__col col-xs-12 col-lg-2-4 col-md-4 col-sm-6">

                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">BOOTSTRAP 3</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Bootstrap 3 has been noted as one of the most reliable and proven frameworks and Mobirise has been equipped to develop websites using this framework.</p>
                    </div>
                </div>

            </div>
            <div class="mbr-section__col col-xs-12 col-lg-2-4 col-md-4 col-sm-6">

                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">RESPONSIVE</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>One of Bootstrap 3's big points is responsiveness and Mobirise makes effective use of this by generating highly responsive website for you.</p>
                    </div>
                </div>

            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="mbr-section__col col-xs-12 col-lg-2-4 col-md-4 col-sm-6">

                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">WEB FONTS</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                    </div>
                </div>

            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="mbr-section__col col-xs-12 col-lg-2-4 col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-2">

                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">UNLIMITED WEBSITES</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.</p>
                    </div>
                </div>

            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="mbr-section__col col-xs-12 col-lg-2-4 col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3">

                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">TRENDY WEBSITE BLOCKS</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="content5-4" style="background-image: url(assets/images/bg3.jpg);">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(40, 50, 78);"></div>
    <div class="mbr-section__container container mbr-section__container--first" style="padding-top: 93px;">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">EASY TO USE!</h3>

            </div>
        </div>
    </div>
    <div class="mbr-section__container container mbr-section__container--last" style="padding-bottom: 93px;">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p>Hay miles de clientes esperando que</p><p>les recuerdes que existes. Hazlo a través&nbsp;</p><p>de la web.</p></div>
        </div>
    </div>

</section>

<section class="mbr-section" id="map2-5">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg mbr-figure--caption-outside-bottom">
                    <div class="mbr-figure__map mbr-google-map">
                        <p class="mbr-google-map__marker" data-coordinates="40.748384,-73.9854792">Empire State Building</p>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>



<?php include(HTML_DIR.'overall/footer.php');?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/dropdown-menu-plugin/script.js"></script>


</body>
</html>
