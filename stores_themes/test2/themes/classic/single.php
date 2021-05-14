


				<div class="row bg-light">
					<div class="col-lg-9 main-content">
						<div class="product-single-container product-single-default">
							<div class="row">
								<div class="col-lg-7 col-md-6 product-single-gallery">
									<div class="product-slider-container">
										<div class="product-single-carousel owl-carousel owl-theme">
											<div class="product-item">
												<img class="product-single-image" src="<?php echo $that->getProduct($params)->image1?>" data-zoom-image="<?php echo $that->getProduct($params)->image1?>"/>
											</div>
											<div class="product-item">
												<img class="product-single-image" src="<?php echo $that->getProduct($params)->image2?>" data-zoom-image="<?php echo $that->getProduct($params)->image2?>"/>
											</div>
											<div class="product-item">
												<img class="product-single-image" src="<?php echo $that->getProduct($params)->image3?>" data-zoom-image="<?php echo $that->getProduct($params)->image3?>"/>
											</div>
										</div>
										<!-- End .product-single-carousel -->
										<span class="prod-full-screen">
											<i class="icon-plus"></i>
										</span>
									</div>
									<div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
										<div class="owl-dot">
											<img src="<?php echo $that->getProduct($params)->image1?>"/>
										</div>
										<div class="owl-dot">
											<img src="<?php echo $that->getProduct($params)->image2?>"/>
										</div>
										<div class="owl-dot">
											<img src="<?php echo $that->getProduct($params)->image3?>"/>
										</div>
									</div>
								</div><!-- End .product-single-gallery -->

								<div class="col-lg-5 col-md-6 product-single-details">
									<h1 class="product-title"><?php echo $that->getProduct($params)->nom?></h1>




									<hr class="short-divider">

									<div class="price-box">
										<span class="old-price"><?php echo $that->getProduct($params)->prix?> Fcfa</span>
										<span class="product-price"><?php echo $that->getProduct($params)->prix?> Fcfa</span>
									</div><!-- End .price-box -->

									<div class="product-desc">
										<p><?php echo $that->getProduct($params)->description?> Fcfa</p>
									</div><!-- End .product-desc -->


									<hr class="divider">

									<div class="product-action">
										<div class="product-single-qty">
											<input class="horizontal-quantity form-control" type="text">
										</div><!-- End .product-single-qty -->

										<a href="cart.html" class="btn btn-dark add-cart icon-shopping-cart" title="Add to Cart">Ajouter au panier</a>
									</div><!-- End .product-action -->

									<hr class="divider mb-1">


								</div><!-- End .product-single-details -->
							</div><!-- End .row -->
						</div><!-- End .product-single-container -->


					</div><!-- End .col-lg-9 -->

                </div>


