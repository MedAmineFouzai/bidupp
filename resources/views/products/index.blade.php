<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link href="{{ asset('images/logo.png')}}" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Bidup - Tout Voir</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ps-icon/style.css')}}">
    <!-- CSS Library-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/Magnific-Popup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/revolution/css/navigation.css')}}">
    <!-- Custom-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="{{ asset('')}}https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
       
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="{{ asset('images/logo.png')}}" alt="" style=" width:70px; height:70px; margin-bottom:20px;"></a></div>
          </div>
          <div class="navigation__column center">
             
            </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><i class="ps-icon-shopping-cart"></i></a>
            </div>
  
        </div>
      </nav>

      <div class="topnav">
              <a  href="././">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a class="active" href="#">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././activite">Activités <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././beaute">Beauté <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././formation">Formation <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././gastronomie">Gastronomie <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././hotel">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././sport">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././shopping">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././ville">Ma ville <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>

        

      </div>

      


    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">
          <div class="ps-product-action">
            <div class="ps-product__filter">
              <select class="ps-select selectpicker">
                <option value="1">Shortby</option>
                <option value="2">Name</option>
                <option value="3">Price (Low to High)</option>
                <option value="3">Price (High to Low)</option>
              </select>
            </div>
            <div class="ps-pagination">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="ps-product__columns">

            @foreach ($products as $product)
              
              <div class="ps-product__column">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('images/shoe/10.jpg')}}" alt=""><a class="ps-shoe__overlay" href="{{ route('products.show', $product->slug) }}"></a>
                  </div>><a class="ps-shoe__overlay" href="{{ route('products.show', $product->slug) }}"
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="normal">
                      <h3 style="padding-left:30%;">00:00:00</h3>  
                      </div>
                      <p>{{ $product->created_at->format('d/m/y') }}</p>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">{{ $product->title }}</a>
                      <p class="ps-shoe__categories">{{ $product->subtitle }}</p><span class="ps-shoe__price"> {{ $product->price }} .Dt</span>
                    </div>
                  </div>
                </div>
              </div>


          @endforeach


          </div>
          <div class="ps-product-action">
            <div class="ps-product__filter">
              <select class="ps-select selectpicker">
                <option value="1">Shortby</option>
                <option value="2">Name</option>
                <option value="3">Price (Low to High)</option>
                <option value="3">Price (High to Low)</option>
              </select>
            </div>
            <div class="ps-pagination">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="ps-sidebar" data-mh="product-listing">
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>Filtre par lieu</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
                <li><a href="product-listing.html">Tunisie</a></li>
                <li><a href="product-listing.html">Ile-de-tunisie</a></li>
                <li><a href="product-listing.html">Sud-ouest</a></li>
                <li><a href="product-listing.html">Nord-ouest</a></li>
                <li><a href="product-listing.html">Sud-est</a></li>
                <li><a href="product-listing.html">Nord & Nord-est</a></li>
                <li><a href="product-listing.html">Etranger</a></li>
              </ul>
            </div>
          </aside>
         
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>Filtre Par Envie</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
                <li><a href="product-listing.html">Activités</a></li>
                <li><a href="product-listing.html">courts Séjours(1 à 3 nuits)</a></li>
                <li><a href="product-listing.html">Vacances(4 nuits ou plus)</a></li>
              </ul>
            </div>
          </aside>
          <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
              <h3>Filtre par nombre de personne</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--checked">
                <li class=""><a href="product-listing.html">1 Personne</a></li>
                <li><a href="product-listing.html">2 Personnes</a></li>
                <li><a href="product-listing.html">3 Personnes ou plus</a></li>
              </ul>
            </div>
          </aside>
       
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="{{ asset('assets/images/ss-judge-ruling-gavel.jpg')}}">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second" style="margin-top: -50px;">
                      <header>
                        <h3 class="ps-widget__title">Contactez Nous</h3>
                      </header>
                      <footer>
                          <div class="ps-home-contact">
  

                              <form action="product-listing.html" method="post">
                                <div class="form-group">
                                  <P>Name<span>*</span></P>  
                                <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                  <P>Email<span>*</span></P>
                                  <input class="form-control" type="email">
                                </div>
                                <div class="form-group">
                                  <P>Your message<span>*</span></P>
                                  <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group text-center">
                                  <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
                                </div>
                              </form>
                        </div>                      </footer>
                    </aside>
                  </div>
    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
    
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link" >
                      <header>
                        <h3 class="ps-widget__title">Aide ? </h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li>
                            <a href="#!">Centre d'aide</a>
                          </li>
                          <li>
                            <a href="#!">FAQ</a>
                          </li>
                          <li>
                            <a href="#!">Mentions Légals</a>
                          </li>
                          <li>
                            <a href="#!">Confidentialité</a>
                          </li>
                          <li>
                              <a href="#!">Conditions générale et particuliéres de ventes</a>
                            </li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                  
    
    
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">LIENS UTILES</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li>
                            <a href="#!">Application Mobile </a>
                          </li>
                          <li>
                            <a href="#!">Blog BidUp</a>
                          </li>
                          <li>
                            <a href="#!">Le meilleur job de Tunisie</a>
                          </li>
                          <li>
                              <a href="#!">Avis sur BidUp </a>
                            </li>
                            <li>
                              <a href="#!">Press </a>
                            </li>
                            <li>
                              <a href="#!">Programme d'affiliation </a>
                            </li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  
    
    
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">INFORMATIONS</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li>
                            <a href="#!">Le concept</a>
                          </li>
                          <li>
                            <a href="#!">Devenir partenaire</a>
                          </li>
                          <li>
                            <a href="#!">Notre équipe</a>
                          </li>
                          <li>
                              <a href="#!">Cartes cadeaux</a>
                            </li>
                            <li>
                              <a href="#!">Engagement qualité </a>
                            </li>
                            <li>
                              <a href="#!">Recrutement</a>
                            </li>
                            <li>
                              <a href="#!"> Programme de fidélité </a>
                            </li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                 
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
            <h3 style="color: white;"><i class="fa fa-envelope"></i>Inscrivez vous à notre Newsletter</h3>
          </div>
          <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
            <form class="ps-subscribe__form" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="">
              <button>s'inscrire</button>
            </form>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
            <p>Recevez notre newsletter et soyez informé immédiatement des dernières nouveautés.</p>
          </div>
    </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/imagesloaded.pkgd.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery.matchHeight-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/slick/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="{{ asset('')}}plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
  </body>
</html>