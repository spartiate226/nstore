<?php include ('header.php')?>
		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo $that->url('frontpage')?>">Accueil</a></li>
						<li class="breadcrumb-item active" aria-current="page">Connexion</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="heading">
							<h2 class="title">Connexion</h2>
						</div><!-- End .heading -->

						<form action="#">
							<input type="text" name="pseudonyme" class="form-control" placeholder="Pseudonyme" required>
							<input type="password" name="password" class="form-control" placeholder="Mot de passe" required>

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Connexion</button>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-6 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
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


