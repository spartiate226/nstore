<div class="h-100">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><?php echo $that->controlervalue('nom','change text','Text')?></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $that->url('frontpage')?>">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $that->url('login')?>">Connexion</a>
      </li>

    </ul>
    <div class=" my-2 my-lg-0">
      <a href="<?php echo $that->url('signup')?>" class="btn btn-outline-success my-2 my-sm-0" >S'incrire</a>
      <a href="<?php echo $that->url('cart')?>" class="btn btn-success my-2 my-sm-0" >Panier <span><?php echo $that->cart_items(true)?></span></a>
    </div>
  </div>
</nav>
<div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img style="height: 550px;width:100%" src="<?php echo $that->controlervalue('slider1','image','Slider')?>" alt="">
    </div>
    <div class="carousel-item">
    <img style="height: 550px;width:100%" src="<?php echo $that->controlervalue('slider2','image','Slider')?>" alt="">
    </div>
    <div class="carousel-item">
    <img style="height: 550px;width:100%" src="<?php echo $that->controlervalue('slider3','image','Slider')?>" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</header>
<div class="row h-100 m-0">
    <section class="col-md-3 h-100 bg-warning">
        <h2>Categories</h2>
        <?php
        foreach($that->category() as $cat ){
        ?>
        <a href="<?php echo $that->url('category') ?>" class="d-block btn btn-dark">
           <?php echo $cat->nom?>
        </a>
        <?php
        }
        ?>
    </section>
    <section class="col-md-9 h-100 bg-success">
        <div class="row m-0 p-2">


        <?php
        $prod=$that->getproducts(25);
        foreach($prod as $product ){
        ?>
        <div class="col-md-3">
            <section class="card p-2">
                <img style="height: 300px;width:100%" src="<?php echo $product->image1?>" alt="">
                <a href="<?php echo $that->url('single')?>" class="mt-2"><?php echo $product->nom?></a>
                <a class="btn btn-info" href="<?php echo $that->cart_add_item($product->id,1) ?>">Ajouter au panier</a>
            </section>
        </div>
        <?php
        }
        ?>

        </div>
    </section>
</div>
</div>

