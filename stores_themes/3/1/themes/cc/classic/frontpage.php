
        <!-- <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                </div>
            </div>
        </div> -->

        <?php include('header.php') ?>
        <main>

            <div class="box-white grey-bg pt-50">
                <div class="container">
                    <div class="box-white-inner">
                        <div class="row">
                            <div class="col-xl-12">

                                <!-- slider area start -->
                                <section class="slider__area slider__area-4 p-relative">
                                    <div class="slider-active">

                                        <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background=" <?php echo $that->controlervalue("Image","Slider 1","Slider") ?>">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
                                                        <div class="slider__content slider__content-4">
                                                            <h2 data-animation="fadeInUp" data-delay=".2s"> <?php  echo $that->controlervalue("Titre","Slider 1","Slider") ?></h2>
                                                            <p data-animation="fadeInUp" data-delay=".4s"> <?php  echo $that->controlervalue("Texte","Slider 1","Slider") ?> </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background=" <?php echo $that->controlervalue("Image","Slider 2","Slider") ?>">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
                                                        <div class="slider__content slider__content-4">
                                                            <h2 data-animation="fadeInUp" data-delay=".2s"> <?php  echo $that->controlervalue("Titre","Slider 2","Slider") ?></h2>
                                                            <p data-animation="fadeInUp" data-delay=".4s"> <?php  echo $that->controlervalue("Texte","Slider 2","Slider") ?> </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background=" <?php echo $that->controlervalue("Image","Slider 2","Slider") ?>">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
                                                        <div class="slider__content slider__content-4">
                                                            <h2 data-animation="fadeInUp" data-delay=".2s"> <?php  echo $that->controlervalue("Titre","Slider 3","Slider") ?></h2>
                                                            <p data-animation="fadeInUp" data-delay=".4s"> <?php  echo $that->controlervalue("Texte","Slider 3","Slider") ?> </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <!-- slider area end -->

                                <!-- banner area start -->
                                <div class="banner__area pt-20">
                                    <div class="container custom-container">
                                        <div class="row">
                                            <?php

                                            foreach($that->getProducts(3) as $produit){
                                            ?>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                                <div class="banner__item mb-30 p-relative">
                                                    <div class="banner__thumb fix">
                                                        <a href="product-details.html" class="w-img"><img src="<?php echo $produit->image1?>" alt="banner"></a>
                                                    </div>
                                                    <div class="banner__content p-absolute transition-3">
                                                        <h5><a href="product-details.html"><?php echo $produit->nom?></h5>
                                                        <a href="<?php echo $that->cart_add_item($produit->id)?>" class="link-btn">Ajouter au panier</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php

                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- banner area end -->

                                <!-- product area start -->
                                <section class="product__area pt-60 pb-100">
                                    <div class="container custom-container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="section__title-wrapper text-center mb-55">
                                                    <div class="section__title mb-10">
                                                        <h2>Tendances</h2>
                                                    </div>
                                                    <div class="section__sub-title">
                                                        <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="product__slider-4 owl-carousel">
                                                <div class="product__item">
                                                    <?php

                                                    foreach($that->getProducts(10) as $produit){
                                                        ?>
                                                        <div class="product__wrapper mb-60">
                                                            <div class="product__thumb">
                                                                <a href="product-details.html" class="w-img">
                                                                    <img src="<?php echo $produit->image1?>" alt="product-img">
                                                                    <img class="product__thumb-2" src="<?php echo $produit->image1?>" alt="product-img">
                                                                </a>
                                                                <div class="product__action transition-3">
                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>

                                                                    <!-- Button trigger modal -->
                                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="product__content p-relative">
                                                                <div class="product__content-inner">
                                                                    <h4><a href="<?php echo $that->url('single',["product"=>$produit->id]);?>"><?php echo $produit->nom?></a></h4>
                                                                    <div class="product__price transition-3">
                                                                        <span><?php echo $produit->prix?></span>
                                                                        <span class="old-price"><?php echo $produit->prix?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="add-cart p-absolute transition-3">
                                                                    <a href="<?php echo $that->cart_add_item($produit->id)?>">+ Ajouter au panier</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <?php
                                                    }

                                                    ?>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="product__load-btn text-center mt-25">
                                                    <a href="<?php echo $that->url('product')?>" class="os-btn os-btn-3">Load More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- product area end -->

                                <!-- banner area start -->
                                <div class="banner__area-2 pb-60">
                                    <div class="container-fluid p-0">
                                        <div class="row no-gutters">
                                        <?php
                                        foreach($that->getProducts(2) as $produit){
                                        ?>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                                    <div class="banner__thumb fix">
                                                        <a href="product-details.html" class="w-img"><img src="assets/img/shop/banner/banner-big-1.jpg" alt="banner"></a>
                                                    </div>
                                                    <div class="banner__content-2 banner__content-4 p-absolute transition-3">
                                                        <span>Products Essentials</span>
                                                        <h4><a href="product-details.html">Bottle With Wooden Cork</a></h4>
                                                        <p>Mirum est notare quam littera gothica<br> parum claram, antep</p>
                                                        <a href="product-details.html" class="os-btn os-btn-2">buy now / <span>$59.25</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- banner area end -->

                                <!-- product offer area start -->
                                <section class="product__offer pb-45">
                                    <div class="container custom-container">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6">
                                                <div class="product__offer-inner mb-30">
                                                    <div class="product__title mb-60">
                                                        <h4>Top Seller Products</h4>
                                                    </div>
                                                    <div class="product__offer-slider owl-carousel">


                                                        <div class="product__offer-wrapper">
                                                        <?php
                                                    $i=0;
                                           foreach($that->getProducts(3) as $produit){
                                            ?>
                                                            <div class="sidebar__widget-content">
                                                                <div class="features__product-wrapper d-flex mb-20">
                                                                    <div class="features__product-thumb mr-15">
                                                                        <a href="product-details.html"><img src="assets/img/shop/product/sm/pro-sm-1.jpg" alt="pro-sm-1"></a>
                                                                    </div>
                                                                    <div class="features__product-content">
                                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                                        <div class="price">
                                                                            <span>$98</span>
                                                                            <span class="price-old">$128</span>
                                                                            <div class="add-cart p-absolute transition-3">
                                                                                <a href="#">+ Add to Cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                           }
                                                        ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6">
                                                <div class="product__offer-inner mb-30">
                                                    <div class="product__title mb-60">
                                                        <h4>On Sale Products</h4>
                                                    </div>
                                                    <div class="product__offer-slider owl-carousel">


                                                    <div class="product__offer-wrapper">
                                                        <?php
                                                    $i=0;
                                           foreach($that->getProducts(6) as $produit){
                                            ?>
                                                            <div class="sidebar__widget-content">
                                                                <div class="features__product-wrapper d-flex mb-20">
                                                                    <div class="features__product-thumb mr-15">
                                                                        <a href="product-details.html"><img src="assets/img/shop/product/sm/pro-sm-1.jpg" alt="pro-sm-1"></a>
                                                                    </div>
                                                                    <div class="features__product-content">
                                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                                        <div class="price">
                                                                            <span>$98</span>
                                                                            <span class="price-old">$128</span>
                                                                            <div class="add-cart p-absolute transition-3">
                                                                                <a href="#">+ Add to Cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                           }
                                                        ?>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6">
                                                <div class="product__offer-inner mb-30">
                                                    <div class="product__title mb-60">
                                                        <h4>Top Rated Products</h4>
                                                    </div>
                                                    <div class="product__offer-slider owl-carousel">

                                                    <div class="product__offer-wrapper">
                                                        <?php
                                                    $i=0;
                                           foreach($that->getProducts(6) as $produit){
                                            ?>
                                                            <div class="sidebar__widget-content">
                                                                <div class="features__product-wrapper d-flex mb-20">
                                                                    <div class="features__product-thumb mr-15">
                                                                        <a href="product-details.html"><img src="assets/img/shop/product/sm/pro-sm-1.jpg" alt="pro-sm-1"></a>
                                                                    </div>
                                                                    <div class="features__product-content">
                                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                                        <div class="price">
                                                                            <span>$98</span>
                                                                            <span class="price-old">$128</span>
                                                                            <div class="add-cart p-absolute transition-3">
                                                                                <a href="#">+ Add to Cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                           }
                                                        ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- product offer area end -->



                                <!-- subscribe area start -->
                                <section class="subscribe__area pb-100">
                                        <div class="container custom-container">
                                            <div class="subscribe__inner pt-95">
                                                <div class="row">
                                                    <div class="col-xl-8 offset-xl-2">
                                                        <div class="subscribe__content text-center">
                                                            <h2>Commencer les achats</h2>
                                                            <p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                                                            <div class="subscribe__form">
                                                                <div action="#">
                                                                    <a href="<?php echo $that->url('signup')?>" class="os-btn os-btn-2 os-btn-3">s'inscrire</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>
                                <!-- subscribe area end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal start -->
            <!-- Modal -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product-modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button   data-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-box">
                                            <div class="tab-content mb-20" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-big-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-big-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-big-3.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <nav>
                                                <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                    <div class="product__nav-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-sm-1.jpg" alt="">
                                                    </div>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                    <div class="product__nav-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-sm-2.jpg" alt="">
                                                    </div>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                                    <div class="product__nav-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-sm-3.jpg" alt="">
                                                    </div>
                                                    </a>
                                                </div>
                                                </nav>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-content">
                                            <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                            <div class="rating rating-shop mb-15">
                                                <ul>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fal fa-star"></i></span></li>
                                                </ul>
                                                <span class="rating-no ml-10">
                                                    3 rating(s)
                                                </span>
                                            </div>
                                            <div class="product__price-2 mb-25">
                                                <span>$96.00</span>
                                                <span class="old-price">$96.00</span>
                                            </div>
                                            <div class="product__modal-des mb-30">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                            </div>
                                            <div class="product__modal-form">
                                                <form action="#">
                                                    <div class="product__modal-input size mb-20">
                                                        <label>Size <i class="fas fa-star-of-life"></i></label>
                                                        <select>
                                                            <option>- Please select -</option>
                                                            <option> S</option>
                                                            <option> M</option>
                                                            <option> L</option>
                                                            <option> XL</option>
                                                            <option> XXL</option>
                                                        </select>
                                                    </div>
                                                    <div class="product__modal-input color mb-20">
                                                        <label>Color <i class="fas fa-star-of-life"></i></label>
                                                        <select>
                                                            <option>- Please select -</option>
                                                            <option> Black</option>
                                                            <option> Yellow</option>
                                                            <option> Blue</option>
                                                            <option> White</option>
                                                            <option> Ocean Blue</option>
                                                        </select>
                                                    </div>
                                                    <div class="product__modal-required mb-5">
                                                        <span >Repuired Fiields *</span>
                                                    </div>
                                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                                        <div class="product-quantity-title">
                                                            <label>Quantity</label>
                                                        </div>
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                                        </div>
                                                        <div class="pro-cart-btn ml-20">
                                                            <a href="#" class="os-btn os-btn-black os-btn-3 mr-10">+ Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal end -->
        </main>
        <?php include('footer.php') ?>