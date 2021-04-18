   <?php include('header.php') ?>
    <main>


        <!-- page title area start -->
        <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/page-title/page-title-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1>Mon panier</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Panier</li>
                                </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- Cart Area Strat-->
        <section class="cart-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Images</th>
                                            <th class="cart-product-name">Produits</th>
                                            <th class="product-price">Prix unitaire</th>
                                            <th class="product-quantity">Quantité</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach($that->cart_total_byItem() as $item){ ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.html"><img src="<?php echo $that->getProduct($item['id'])->image1?>" alt=""></a></td>
                                            <td class="product-name"><a href="<?php?>"><?php echo $that->getProduct($item['id'])->nom?></a></td>
                                            <td class="product-price"><span class="amount"><?php echo $that->getProduct($item['id'])->prix?></span></td>
                                            <td class="product-quantity">
                                                <div class=""><span><?php echo $item['quantite']?></span></div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount"><?php echo $item['total']?>Fcfa</span></td>
                                            <td class="product-remove"><a href="<?php echo $that->cart_delete_item($item['id'])?>"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        <?php
                                         }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                                placeholder="Coupon code" type="text">
                                            <button class="os-btn os-btn-black" name="apply_coupon" type="submit">Appliquer
                                                coupon</button>
                                        </div>
                                        <div class="coupon2">
                                            <button class="os-btn os-btn-black" name="update_cart"  onclick="document.location.reload">Mettre à jour le panier</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul class="mb-20">
                                            <li>Subtotal <span><?php echo $that->cart_total()?> Fcfa</span></li>
                                            <li>Total <span><?php echo $that->cart_total()?> Fcfa</span></li>
                                        </ul>
                                        <a class="os-btn" href="<?php echo $that->url('checkout') ?>">Commander</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Area End-->
    </main>


    <?php include('footer.php') ?>

</body>

</html>
