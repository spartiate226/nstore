<?php
?>

<a href="<?php echo page_url('cart')?>">panier</a>
    <a href="<?php echo page_url('login')?>">connexion</a>
    <a href="<?php echo page_url('signup')?>">incription</a>
<?php
foreach ($that->getproducts(25) as $produit){
    ?>
    <div class="card">
        <h2><?php echo $produit->nom?></h2>
        <h2><?php echo $produit->prix?></h2>
        <a href="<?php echo add_to_cart($produit->id,1)?>">Ajouter au panier</a>
    </div>

<?php
    print_r(session('panier-1'));
}

