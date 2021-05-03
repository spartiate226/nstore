

<!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->



<!-- Start Shopping Cart Page -->

<div class="cart-page">

  <!-- Start Mian Header -->

    <?php include ('header.php')?>

  <!-- /End Mian Header -->

  <!-- Start Breadcrumb Area-->

  <div class="breadcrumb-area">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12">

          <div class="breadcrumb-container">

            <ol class="breadcrumb">

              <li><a href="#">Home</a></li>

              <li class="active">Shopping Cart</li>

            </ol>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- /End Breadcrumb Area-->

  <!-- Start Shopping Cart Area -->

  <div class="woocommerce-area padding-bottom">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12">

          <!-- Section Title -->

          <div class="cart-heading">

            <h2>Shopping Cart</h2>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

          <form action="#" method="post">

            <div class="table-responsive">

              <!-- Start Cart Products List -->

              <table class="shop-cart-table table-hover table-bordered">

                <thead>

                  <tr>

                    <th class="product" colspan="3">Product</th>

                    <th class="product-price">Unit Price</th>

                    <th class="product-quantity">Quantity</th>

                    <th class="product-total">Total</th>

                  </tr>

                </thead>

                <tbody>

                  <tr>

                    <td class="product-img"><a href="#"> <img src="img/product/single-product/sm/1.jpg" alt=""> </a></td>

                    <td class="product-name"><a href="#"> spernatur quo un </a></td>

                    <td class="product-remove"><a href="#" data-toggle="tooltip" data-placement="auto" title="Remove"> <i class="icon_close " aria-hidden="true"></i> </a></td>

                    <td class="product-price"> $256 </td>

                    <td class="product-quantity-form"><div class="cart-plus-minus">

                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">

                      </div></td>

                    <td class="product-total"> $256 </td>

                  </tr>

                  <tr>

                    <td class="product-img"><a href="#"> <img src="img/product/single-product/sm/4.jpg" alt=""> </a></td>

                    <td class="product-name"><a href="#"> dicta repellendus </a></td>

                    <td class="product-remove"><a href="#" data-toggle="tooltip" data-placement="auto" title="Remove"> <i class="icon_close " aria-hidden="true"></i> </a></td>

                    <td class="product-price"> $365 </td>

                    <td class="product-quantity-form"><div class="cart-plus-minus">

                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">

                      </div></td>

                    <td class="product-total"> $365 </td>

                  </tr>

                </tbody>

              </table>

              <!-- /End Cart Products List -->

              <!-- Start Cart Action Buttons -->

              <div class="cart-bottom-btn">

                <div class="row">

                  <div class="col-md-6 col-sm-4">

                    <div class="cart-btn cart-con-shop"> <a href="#" class="submit-btn"> Continue Shopping </a> </div>

                  </div>

                  <div class="col-md-6 col-sm-8">

                    <div class="cart-btn cart-clear-update"> <a href="#" class="clear-cart submit-btn"> Clear Cart </a> <a href="#" class="submit-btn update-cart"> Update Cart </a> </div>

                  </div>

                </div>

              </div>

              <!-- /End Cart Action Buttons -->

            </div>

          </form>

        </div>

      </div>



      <!-- Start Cart Total Calculation Area -->

      <div class="row">

        <div class="cart-total-area section-padding clearfix">

          <!-- Cart Accordian -->

          <div class="col-md-6 col-sm-12">

            <div class="main-accordian-area">

              <div class="cart-total-left-accordion">

                <div class="cart-accordion-heading">

                  <h2>What would you like to do next?</h2>

                  <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>

                </div>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default single-accordion">

                    <div class="panel-heading" role="tab" id="headingOne">

                      <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Use coupon code </a> </h4>

                    </div>

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                      <div class="panel-body">

                        <div class="accordian-form copune-form">

                          <form action="#">

                            <input type="text" placeholder="Enter Your Coupon Code" required>

                            <button class="submit-btn">Apply Coupon</button>

                          </form>

                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="panel panel-default single-accordion">

                    <div class="panel-heading" role="tab" id="headingTwo">

                      <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Use gift voucher </a> </h4>

                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

                      <div class="panel-body">

                        <div class="accordian-form voucher-form">

                          <form action="#">

                            <input type="text" placeholder="Enter Your Gift Voucher Serial" required>

                            <button class="submit-btn"> Apply Voucher </button>

                          </form>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <!-- Cart Calculation -->

          <div class="col-md-6 col-sm-12">

            <div class="cart-total-right-calculation">

              <div class="calcuation border-spacing">

                <p>Subtotal: <span class="ammount">$621</span></p>

                <p>Shipping Fee: <span class="ammount">$95</span></p>

                <h3 class="total">Total: <span class="ammount">$716</span></h3>

              </div>

              <div class="checkout-btn clearfix"> <a href="#" class="submit-btn"> Check Out </a> </div>

            </div>

          </div>

        </div>

      </div>

      <!-- /End Cart Total Calculation Area -->



    </div>

  </div>

  <!-- /End Shopping Cart Area -->

  <!-- Start Main Footer Area -->

    <?php include ('footer.php')?>

</div>



