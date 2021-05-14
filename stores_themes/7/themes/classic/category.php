<?php include ('header.php')?>
<main class="main">
    <div class="category-banner-container">

    </div>

    <div class="container">
        <div class="row mx-0 divide-line up-effect">
            <?php
            foreach ($that->getProductBy($params) as $product){
                ?>
                <div class="col-6 col-sm-4">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="<?php echo $that->url('single') ?>">
                                <img src="<?php echo $product->image1 ?>">
                            </a>
                            <div class="btn-icon-group">
                                <a href="<?php echo $that->cart_add_item($product->id) ?>" class="btn-icon btn-add-cart"  ><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            <a href="<?php echo $that->url('single') ?>" class="btn-quickview" title="Quick View">Details</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="<?php  echo $that->url('category')   ?>" class="product-category"><?php echo $product->categorie->nom ?></a>
                                </div>

                            </div>
                            <h3 class="product-title">
                                <a href="<?php echo $that->url('single') ?>"><?php echo $product->nom ?></a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"><?php echo $that->product_rates_average($product->id) ?></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price"><?php echo $product->prix ?></span>
                                <span class="product-price"><?php echo $product->prix ?></span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <?php
            }
            ?>



        </div><!-- End .row -->

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


