<footer class="footer">
    <div class="footer-middle">

    <div class="footer-bottom">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <p class="footer-copyright py-3 pr-4 mb-0">© Shop 2020. All Rights Reserved</p>

            <img src="assets/images/payments.png" alt="payment methods" class="footer-payments py-3">
        </div>
    </div><!-- End .container -->
</footer>

</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active"><a href="index-2.html">Accueil</a></li>
                <li>
                    <a >Categories</a>
                    <ul>
                        <?php
                        foreach ($that->category() as $categorie){
                            ?>
                            <li><a href="<?php echo $categorie->id?>"><?php echo $categorie->nom?></a></li>
                            <?php
                        }
                        ?>

                    </ul>
                </li>
                <li>
                    <a href="">Nos Produits</a>
                </li>

                <li><a href="">Contact</a></li>
                <li><a href="#">Inscription!<span class="tip tip-hot">Hi!</span></a></li>
                <li><a href="" >Connection</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
