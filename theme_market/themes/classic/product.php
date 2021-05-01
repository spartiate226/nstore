<?php include ('header.php')?>
<main class="main">
    <div class="category-banner-container">
        <div class="category-banner banner banner-sm-vw home-slide2" style="background: no-repeat 70%/cover url('assets/images/banners/banner-top.jpg');">
            <img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="assets/images/slider/slide-2.jpg" alt="slider image">
            <div class="container">
                <div class="banner-layer banner-layer-middle text-uppercase">
                    <h4 class="text-white m-b-2">Over 200 products with discounts</h4>
                    <h2 class="text-white m-b-3">Great Deals</h2>
                    <h5 class="text-white d-inline-block mb-0 align-top mr-5">Starting At <b>$<em>299</em>99</b></h5>
                    <a href="category.html" class="btn btn-primary btn-md ls-10">Get Yours!</a>
                </div><!-- End .banner-layer -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mx-0 divide-line up-effect">
            <div class="col-6 col-sm-4 col-md-3 product-default inner-quickview inner-icon">
                <figure>
                    <a href="product.html">
                        <img src="assets/images/products/product-1.jpg">
                    </a>
                    <div class="label-group">
                        <div class="product-label label-hot">HOT</div>
                        <div class="product-label label-sale">-20%</div>
                    </div>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                    </div>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                </figure>
                <div class="product-details">
                    <div class="category-wrap">
                        <div class="category-list">
                            <a href="category.html" class="product-category">category</a>
                        </div>
                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                    </div>
                    <h2 class="product-title">
                        <a href="product.html">Fleece Jacket</a>
                    </h2>
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <div class="price-box">
                        <span class="old-price">$90.00</span>
                        <span class="product-price">$70.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div><!-- End .product-default -->








        </div><!-- End .row -->

        <nav class="toolbox toolbox-pagination border-0">


            <ul class="pagination toolbox-item">
                <li class="page-item disabled">
                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><span class="page-link">...</span></li>
                <li class="page-item">
                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                </li>
            </ul>
        </nav>
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- margin -->
</main><!-- End .main -->

<?php include ('footer.php')?>
<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>You've just added this product to the<br>cart:</p>
                <h4 id="productTitle"></h4>
                <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                <div class="btn-actions">
                    <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                    <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>


