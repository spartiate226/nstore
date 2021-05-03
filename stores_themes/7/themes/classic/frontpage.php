
	<div class="page-wrapper">


		<?php include('header.php')?>

		<main class="main">
			<div class="home-top-container mt-lg-2">
				<div class="container">

				</div><!-- End .container -->
			</div><!-- End .home-top-container -->



			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="home-product-tabs">
							<ul class="nav nav-tabs mb-2" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="latest-products-tab" data-toggle="tab" href="#latest-products" role="tab" aria-controls="latest-products" aria-selected="false">Nos produits</a>
								</li>
							</ul>
							<div class="tab-content">

								<div class="tab-pane fade show active" id="latest-products" role="tabpanel" aria-labelledby="latest-products-tab">
									<div class="row">
                                        <?php
                                        foreach ($that->new_product(15) as $product){
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
													<a href="<?php echo $that->url('single',[$product->id]) ?>" class="btn-quickview" title="Quick View">Details</a>
												</figure>
												<div class="product-details">
													<div class="category-wrap">
														<div class="category-list">
															<a href="<?php  echo $that->url('category')   ?>" class="product-category"><?php echo $product->categorie->nom ?></a>
														</div>
													</div>
													<h3 class="product-title">
														<a href="<?php echo $that->url('single',[$product->id]) ?>"><?php echo $product->nom ?></a>
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

									</div>
								</div><!-- End .tab-pane -->
							</div><!-- End .tab-content -->
                            <div class="row">
                                <a href="" class="btn">Voir Plus</a>
                            </div>
						</div><!-- End .home-product-tabs -->

					</div><!-- End .col-lg-9 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->

		<?php include('footer.php')?>


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

