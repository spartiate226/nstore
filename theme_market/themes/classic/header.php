<header class="header">
    <div class="header-top" sty>
        <div class="container">
            <div class="header-right">
                <div class="social-icons">
                    <a href="<?php echo $that->controlervalue('Facebook','Reseaux sociaux','Edition')?>" class="social-icon fa fa-facebook" target="_blank"></a>
                    <a href="<?php echo $that->controlervalue('Whatsapp','Reseaux sociaux','Edition')?>" class="social-icon fa fa-whatsapp" target="_blank"></a>
                    <a href="<?php echo $that->controlervalue('Instagram','Reseaux sociaux','Edition')?>" class="social-icon fa fa-instagram" target="_blank"></a>
                </div><!-- End .social-icons -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left col-lg-2 w-auto pl-0 mr-3">
                <button class="mobile-menu-toggler" type="button">
                    <i class="icon-menu"></i>
                </button>
                <a href="#" class="logo">
                    <img src="<?php echo $that->controlervalue('Logo image','Site','Edition')?>" alt="Porto Logo">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right w-lg-max">
                <div class="header-icon header-search header-search-inline header-search-category mr-lg-5 pr-lg-4 w-lg-max">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                            <div class="select-custom body-text">
                                <select id="cat" name="cat">
                                    <?php
                                    foreach ($that->category() as $categorie){
                                        ?>
                                        <option value="<?php echo $categorie->id?>"><?php echo $categorie->nom?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div><!-- End .select-custom -->
                            <button class="btn icon-search-3" type="submit"></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->


                <a href="<?php echo $that->url('my-account')?>" class="header-icon login-link pl-1"><i class="icon-user-2"></i></a>


                <div class="dropdown cart-dropdown">
                    <a href="<?php echo $that->url('cart')?>" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cart-count badge-circle"><?php echo $that->cart_items(true)?></span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdownmenu-wrapper">
                            <div class="dropdown-cart-header">
                                <span><?php echo $that->cart_items(true)?> produits</span>

                                <a href="<?php echo $that->url('cart')?>" class="float-right">Voir le panier</a>
                            </div><!-- End .dropdown-cart-header -->

                            <div class="dropdown-cart-products">
                                <?php
                                foreach (cart_total_byItem() as $item){
                                    ?>
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="<?php echo $that->url('single')?>"><?php echo $that->getProduct($item['id'])->nom?></a>
                                            </h4>

                                            <span class="cart-product-info">
													<span class="cart-product-qty"><?php echo $item['quantite']?></span>
													x <?php echo $item['total']?> Fcfa
												</span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="<?php echo $that->url('single')?>" class="product-image">
                                                <img src="<?php echo $that->getProduct($item['id'])->image1?>" alt="product" width="80" height="80">
                                            </a>
                                            <a href="<?php echo $that->cart_delete_item($item['id'])?>" class="btn-remove icon-cancel" title="Remove Product"></a>
                                        </figure>
                                    </div><!-- End .product -->
                                    <?php
                                }
                                ?>
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price float-right"><?php echo $that->cart_total()?> Fcfa</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="<?php if($that->cart_items(true)!=0){echo $that->url('checkout');} ?>" class="btn btn-dark btn-block">Commander</a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdownmenu-wrapper -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{
				'move': [
					{
						'item': '.header-search',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.header-icon:not(.header-search)',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.cart-dropdown',
						'position': 'end',
						'clone': false
					}
				],
				'moveTo': '.container',
				'changes': [
					{
						'item': '.header-search',
						'removeClass': 'header-search-inline w-lg-max mr-lg-5 pr-lg-4',
						'addClass': 'header-search-popup ml-auto'
					},
					{
						'item': '.main-nav',
						'removeClass': 'w-100'
					},
					{
						'item': '.logo',
						'removeClass': 'd-none'
					},
					{
						'item': '.float-right',
						'addClass': 'd-none'
					}
				]
			}">
        <div class="container">
            <a href="index-2.html" class="logo logo-light mr-3 pr-xl-3 d-none">
                <img src="assets/images/logo-light.png" alt="Porto Logo">
            </a>
            <nav class="main-nav w-100">
                <ul class="menu">
                    <li class="active">
                        <a href="<?php echo $that->url('frontpage')?>">Accueil</a>
                    </li>
                    <li>
                        <a >Categories</a>
                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="submenu">
                                        <?php
                                        foreach ($that->category() as $categorie){
                                            ?>
                                            <li><a href="<?php echo $that->url('category',["id"=>$categorie->id])?>"><?php echo $categorie->nom?></a></li>

                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                 </div>
                        </div><!-- End .megamenu -->
                    </li>
                    <li class="float-right bg-dark2"><a class="text-white" href="<?php echo $that->url('login')?>" >Connection</a></li>
                    <li class="float-right"><a class="text-white" href="<?php echo $that->url('signup')?>">Inscription</a></li>
                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
