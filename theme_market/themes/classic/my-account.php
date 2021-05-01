<?php include ('header.php')?>
		<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $that->url('frontpage')?>">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Compte</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-9 order-lg-last dashboard-content">
						<h2>Edition des informations</h2>

						<form action="#">
							<div class="row">
								<div class="col-sm-11">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-name">Pseudonyme</label>
												<input type="text" class="form-control" id="acc-name" name="acc-name" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->

										<div class="col-md-6">
											<div class="form-group">
												<label for="acc-mname">Numero</label>
												<input type="text" class="form-control" id="acc-mname" name="acc-mname">
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->
									</div><!-- End .row -->
								</div><!-- End .col-sm-11 -->
							</div><!-- End .row -->

							<div class="form-group required-field">
								<label for="acc-email">Email</label>
								<input type="email" class="form-control" id="acc-email" name="acc-email" required>
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="acc-password">Mot de passe</label>
								<input type="password" class="form-control" id="acc-password" name="acc-password" required>
							</div><!-- End .form-group -->

							<div class="mb-2"></div><!-- margin -->

							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="change-pass-checkbox" value="1">
								<label class="custom-control-label" for="change-pass-checkbox">Changer de mot de passe</label>
							</div><!-- End .custom-checkbox -->

							<div id="account-chage-pass">
								<h3 class="mb-2">Changer de mot de passe</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group required-field">
											<label for="acc-pass2">Mot de passe</label>
											<input type="password" class="form-control" id="acc-pass2" name="acc-pass2">
										</div><!-- End .form-group -->
									</div><!-- End .col-md-6 -->

									<div class="col-md-6">
										<div class="form-group required-field">
											<label for="acc-pass3">Confirmer mot de passe</label>
											<input type="password" class="form-control" id="acc-pass3" name="acc-pass3">
										</div><!-- End .form-group -->
									</div><!-- End .col-md-6 -->
								</div><!-- End .row -->
							</div><!-- End #account-chage-pass -->

							<div class="required text-right">* Champs requise</div>
							<div class="form-footer">

								<div class="form-footer-right">
									<button type="submit" class="btn btn-primary">Mettre à jour</button>
								</div>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-lg-9 -->

					<aside class="sidebar col-lg-3">
						<div class="widget widget-dashboard">
							<h3 class="widget-title">Mon compte</h3>

							<ul class="list">
								<li class="active"><a href="#">Account Dashboard</a></li>
								<li><a href="#">Informations</a></li>
								<li><a href="#">Historique des commandes</a></li>
							</ul>
						</div><!-- End .widget -->
					</aside><!-- End .col-lg-3 -->
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


