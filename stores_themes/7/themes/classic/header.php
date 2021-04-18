<header>
            <div id="header-sticky" class="header__area grey-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                            <div class="header__right p-relative d-flex justify-content-between align-items-center">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li class="active "><a href="#">Accueil</a></li>
                                            <li class="mega-menu "><a href="#">Nos Produits</a></li>
                                            <li class=""><a href="#">Connexion</a></li>
                                            <li class=""><a href="#">Inscription</a> </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu-btn d-lg-none">
                                    <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fa fa-bars"></i></a>
                                </div>
                                <div class="header__action">
                                        <ul>
                                            <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i> Recherche</a></li>
                                            <li><a href="<?php $that->url('cart') ?>" class="cart"><i class="ion-bag"></i> Panier <span>(<?php echo $that->cart_items(true)?>)</span></a>
                                                <ul class="mini-cart">
                                                    <?php
                                                      foreach($that->cart_total_byItem() as $item){
                                                    ?>

                                                    <li>
                                                        <div class="cart-img f-left">
                                                            <a href="product-details.html">
                                                                <img src="<?php echo $that->getProduct($item['id'])->image1?>" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="cart-content f-left text-left">
                                                            <h5>
                                                                <a href="">Voir les details </a>
                                                            </h5>
                                                            <div class="cart-price">
                                                                <span class="ammount"><?php echo $item['quantite'] ?> <i class="fa fa-times"></i></span>
                                                                <span class="price"><?php echo $item['total']?> Fcfa</span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon f-right mt-30">
                                                            <a href="<?php echo $that->cart_delete_item($item['id'])?>">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <?php
                                                     }
                                                    ?>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right"><?php echo $that->cart_total()?>Fcfa</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="<?php echo $that->url('cart') ?>" class="os-btn">Voire le panier</a>
                                                            <a class="os-btn os-btn-black" href="<?php echo $that->url('checkout') ?>">Page de commande</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="javascript:void(0);"><i class="fa fa-bars"></i></a>
                                                <ul class="extra-info">
                                                    <li>
                                                        <div class="my-account">
                                                            <div class="extra-title">
                                                                <h5>Mom compte</h5>
                                                            </div>
                                                            <ul>
                                                                <li><a href="login.html">Profile</a></li>
                                                                <li><a href="wishlist.html">Historique</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- <li>
                                                        <div class="lang">
                                                            <div class="extra-title">
                                                                <h5>Language</h5>
                                                            </div>
                                                            <ul>
                                                                <li><a href="#">English</a></li>
                                                                <li><a href="#">France</a></li>
                                                                <li><a href="#">Germany</a></li>
                                                                <li><a href="#">Bangla</a></li>
                                                            </ul>
                                                        </div>
                                                    </li> -->
                                                    <!-- <li>
                                                        <div class="currency">
                                                            <div class="extra-title">
                                                                <h5>currency</h5>
                                                            </div>
                                                            <ul>
                                                                <li><a href="#">USD - US Dollar</a></li>
                                                                <li><a href="#">EUR - Ruro</a></li>
                                                                <li><a href="#">GBP - Britis Pound</a></li>
                                                                <li><a href="#">INR - Indian Rupee</a></li>
                                                            </ul>
                                                        </div>
                                                    </li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fa  fa-arrow-up"></i></a>
        </div>

        <!-- search area start -->
        <section class="header__search white-bg transition-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__search-inner text-center">
                            <form action="#">
                                <div class="header__search-btn">
                                    <a href="javascript:void(0);" class="header__search-btn-close"><i class="fa fa-times"></i></a>
                                </div>
                                <div class="header__search-header">
                                    <h3>Search</h3>
                                </div>
                                <div class="header__search-input p-relative">
                                    <input type="text" placeholder="Search for products... ">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- search area end -->

        <!-- extra info area start -->
        <section class="extra__info transition-3">
            <div class="extra__info-inner">
                <div class="extra__info-close text-right">
                    <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fa fa-times"></i></a>
                </div>
                <!-- side-mobile-menu start -->
                <nav class="side-mobile-menu d-block d-lg-none">
                    <ul>
                        <li class="active "><a href="#">Accueil</a></li>
                        <li class="mega-menu "><a href="#">Nos Produits</a></li>
                        <li class=""><a href="#">Connexion</a></li>
                        <li class=""><a href="#">Inscription</a> </li>
                    </ul>
                </nav>
                <!-- side-mobile-menu end -->
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- extra info area end -->
