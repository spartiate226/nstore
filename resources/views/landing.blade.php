<!DOCTYPE html>
<html lang="en">

<head>

    <title>Mynayamax By Nayamax</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/utilities.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/vegas.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/flexslider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/fontawesome/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/landing/assets/css/ionicons.min.css')}}" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Raleway:100,200,300,400,500,700" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <script src="{{asset('assets/landing/assets/js/modernizr-custom.js')}}"></script>

</head>
<body>



<div class="global-overlay">
    <div class="overlay-inner bg-image-holder bg-cover">
        <img src="{{asset('assets/landing/shopping-cart.jpg')}}" alt="background">
    </div>
    <div class="overlay-inner bg-dark opacity-45"></div>
</div>

<div class="site-container">

    <div id="top"></div>

    <!-- Site header -->
    <header class="site-header header-mobile-light bg-dark">
        <div class="header-brand">
            <!-- Logo -->
            <a class="logo" href="#">
                <img class="logo-light" src="" alt="">
                <img class="logo-dark" src="assets/images/logo-dark.png" alt="">
            </a>
            <button type="button" class="nav-toggle" id="navigation-toggle">
                <span class="bg-warning"></span>
                <span class="bg-warning"></span>
                <span class="bg-warning"></span>
            </button>
        </div>
        <!-- Site navigation -->
        <nav id="navigation" class="site-nav bg-dark">
            <div class="nav-container bg-dark">
                <ul>
                    <li><a href="#home" class="move-to text-warning">Accueil</a></li>
                    {{--<li><a href="#subscribe" class="move-to text-warning">Boutique</a></li>--}}
                    <li><a href="#about" class="move-to text-warning">A propos</a></li>
                    <li><a href="#services" class="move-to text-warning">Services</a></li>
                    <li><a href="#contact" class="move-to text-warning">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <nav class="tooltip-nav">
        <ul>
            <li><a href="#home" class="move-to" data-toggle="tooltip" data-placement="left" title="Accueil"><span></span></a></li>
            <li><a href="#about" class="move-to" data-toggle="tooltip" data-placement="left" title="A propos"><span></span></a></li>
            {{--<li><a href="#subscribe" class="move-to" data-toggle="tooltip" data-placement="left" title="Boutique"><span></span></a></li>--}}
            <li><a href="#services" class="move-to" data-toggle="tooltip" data-placement="left" title="Services"><span></span></a></li>
            <li><a href="#contact" class="move-to" data-toggle="tooltip" data-placement="left" title="Contact"><span></span></a></li>
        </ul>
    </nav>

    <!-- Page content -->
    <div class="page-content">

        <!-- Home -->
        <div class="page-slide" id="home">
            <section class="minh--80vh fullscreen-lg d-flex align-items-center text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12 mx-lg-auto">
                            <div class="d-flex justify-content-center mb-5">
                                <img style="width: 100px;height: 100px" src="{{asset('nayamax_logo.png')}}" class="animated" data-animation="fadeInUp" data-animation-delay="700">
                            </div>
                            <h1 class="text-center fs--36 fs-md--54 fs-xl--64 mb-3 animated text-warning" data-animation="fadeInUp" data-animation-delay="800">Creer Votre Boutique en ligne</h1>
                            <p class="fs--18 text-center mb-5 animated" data-animation="fadeInUp" data-animation-delay="900">C'est aussi simple que la creation d'un compte facebook</p>
                            <div class="text-center">
                                <a href="#about" class="btn btn-warning move-to animated" data-animation="fadeInUp" data-animation-delay="1000">En savoir plus</a>
                                {{--<a href="#subscribe" class="btn btn-warning move-to animated" data-animation="fadeInUp" data-animation-delay="1000">Créer ma boutique</a>--}}
                                {{--<a href="#about" class="btn btn-link btn-link-white move-to animated" data-animation="fadeInUp" data-animation-delay="1000">En savoir plus <i class="fas fa-angle-down ml-3"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Subscribe -->
        {{--<div class="page-slide" id="subscribe">
            <section class="fullscreen-lg d-lg-flex align-items-lg-center text-white">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 col-lg-8 mx-lg-auto">
                            <h2 class="text-center animated text-warning" data-animation="fadeInUp">Demander l'ouverture de votre boutique</h2>
                            <div class="divider divider-alt bg-white mx-auto animated" data-animation="fadeInUp" data-animation-delay="200"></div>
                            <p class="text-center animated" data-animation="fadeInUp" data-animation-delay="400">Simple et efficace,remplissez le formulaire de demande et rentrez en possession de votre boutique en ligne</p>
                        </div>
                    </div>
                    <div class="row animated" data-animation="fadeInUp" data-animation-delay="600">
                        <div class="col-12 col-lg-12 mx-lg-auto">
                            <div class="subscribe-form">
                                <form class="mb-0" id="sf" name="sf" action="https://preview.erilisdesign.com/html/cany/include/subscribe.php" method="post">


                                        <div class="form-process"></div>

                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="form-item-container">
                                                    <input type="text" id="cf-name" name="nom" placeholder="Votre nom" class="form-item required">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="form-item-container">
                                                    <input type="text" id="cf-name" name="prenom" placeholder="Votre prenom" class="form-item required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="form-item-container">
                                                    <input type="text" id="cf-name" name="tel1" placeholder="Numero de telephone 1" class="form-item required">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="form-item-container">
                                                    <input type="text" id="cf-name" name="tel2" placeholder="Numero de telephone 2(optionnel)" class="form-item">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="form-item-container">
                                                    <input type="email" id="cf-name" name="email" placeholder="Votre email" class="form-item required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="form-item-container">
                                                    <input type="text" id="cf-name" name="bnom" placeholder="Nom de votre boutique" class="form-item required">
                                                </div>
                                        </div>
                                        </div>
                                    <div class="">
                                        <div class="form-item-container">
                                            <textarea name="description" id="cf-message" placeholder="Description de votre activité" class="form-item required" rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-item-container d-flex justify-content-center">
                                        <button class="btn btn-warning">Enregistrer la demande</button>
                                    </div>
                                </form>
                                <div class="subscribe-form-result pt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>--}}

        <!-- About -->
        <div class="page-slide" id="about">
            <section class="minh--80vh fullscreen-lg d-flex align-items-center text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 mx-lg-auto">
                            <h2 class="text-center text-warning animated" data-animation="fadeInUp">A propos de Nayamax</h2>
                            <div class="divider divider-alt bg-white mx-auto animated" data-animation="fadeInUp" data-animation-delay="200"></div>
                            <p class="text-center mb-5 animated" data-animation="fadeInUp" data-animation-delay="400">
                                NAYAMAX est une start-up de développement de logiciel de commerce électronique qui permet aux entreprises et aux particuliers de créer et d'animer leur propre boutique en ligne ; lesquels sont hébergés sur les serveurs de NAYAMAX contre une redevance mensuelle.</p>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <!-- Services -->
        <div class="page-slide" id="services">
            <section class="minh--80vh fullscreen-lg d-flex align-items-center text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 mx-lg-auto">
                            <h2 class="text-center animated text-warning" data-animation="fadeInUp">Nos services</h2>
                            <div class="divider divider-alt bg-white mx-auto animated" data-animation="fadeInUp" data-animation-delay="200"></div>
                            <p class="text-center mb-5 animated" data-animation="fadeInUp" data-animation-delay="400">Profiter de nos solutions tous en un pour votre business en ligne tout en aquerant plus d'expérience dans le domaine du ecommerce</p>
                            <div class="row">
                                <div class="col-12 col-lg-4 mb-4 mb-lg-0 animated" data-animation="fadeInUp" data-animation-delay="600">
                                    <div class="feature-block">
                                        <div class="feature-icon icon-lg mb-4">
                                            <div class="">
                                                <i class="fas fa-store text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="">Boutique en ligne</h4>
                                            <p>Créez une boutique de ecommerce instannanément,grâce à notre solution Mynayamax et profitez d'un suivi particulier</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 mb-lg-0 animated" data-animation="fadeInUp" data-animation-delay="800">
                                    <div class="feature-block">
                                        <div class="feature-icon icon-lg mb-4">
                                            <div class="">
                                                <i class="fas fa-book text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="feature-content ">
                                            <h4 class="">Formations</h4>
                                            <p>Recevez des formations au campus nayamax et optimisez vos chances de succès.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 animated" data-animation="fadeInUp" data-animation-delay="1000">
                                    <div class="feature-block">
                                        <div class="feature-icon icon-lg mb-4">
                                            <div class="">
                                                <i class="fas fa-truck-moving text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="">Gestion de stock et logistique</h4>
                                            <p>Stockez vo produits dans nos magasins; vendez les via votre boutique en ligne et nous gerons l'aspect logistique avec notre solution 1Livreur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Contact -->
        <div class="page-slide" id="contact">
            <section class="minh--80vh fullscreen-lg d-flex align-items-center text-white">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 col-lg-8 mx-lg-auto">
                            <h2 class="text-center animated text-warning" data-animation="fadeInUp">Contactez nous</h2>
                            <div class="divider divider-alt bg-white mx-auto animated" data-animation="fadeInUp" data-animation-delay="200"></div>
                            <p class="text-center animated" data-animation="fadeInUp" data-animation-delay="400">Besoin d'en savoir plus?Appelez nous...</p>
                        </div>
                    </div>
                    <div class="row animated" data-animation="fadeInUp" data-animation-delay="600">
                        <div class="col-12 col-lg-10 mx-lg-auto row justify-content-center">
                            <div class="col-md-6">
                                <h1 class="text-center"><i class="fab fa-phone-alt"></i>+226 68 67 05 05</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <footer class="site-footer">
        <nav class="social-nav">
            <ul>
                <li class="animated" data-animation="fadeInRightBig" data-animation-delay="800">
                    <a href="https://facebook.com/groupenayamax/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="animated" data-animation="fadeInRightBig" data-animation-delay="950">
                    <a href="https://wa.me/message/6BI7XUJ7KUHZO1"><i class="fab fa-whatsapp"></i></a>
                </li>
                <li class="animated" data-animation="fadeInRightBig" data-animation-delay="1100">
                    <a href="https://www.instagram.com/invites/contact/?i=ehp9nkqvwigj&utm_content=m1yqhqr"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="animated" data-animation="fadeInRightBig" data-animation-delay="1250">
                    <a href="https://www.linkedin.com/company/nayamax"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
        </nav>
        <div class="copyright text-sm-center">
            <div class="container-fluid">
                <p class="">© {{date("Y")}} <span>Naya</span>Max<span></span> - All Rights Reserved</p>
            </div>
        </div>
    </footer>

</div>

<script src="{{asset('assets/landing/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.easing.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/vegas.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.form.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/granim.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.smooth-scroll.min.js')}}"></script>
<script src="{{asset('assets/landing/assets/js/jquery.flexslider-min.js')}}"></script>

<script src="{{asset('assets/landing/assets/js/main.min.js')}}"></script>

</body>


</html>
