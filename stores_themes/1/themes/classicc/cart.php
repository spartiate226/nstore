<?php
foreach ($that->cart_total_byItem() as $key=>$item){

    ?>
    <div><?php echo $that->getProduct($item['id'])->nom.'/Quantite:'.$item['quantite']?>  <a href="<?php echo $that->cart_delete_item($item['id'])?>">suppr</a></div>
    <div><a href="<?php echo $that->url('checkout')?>">Passer la commande</a></div>
    <?php
}
?>
 <div><a href="<?php echo $that->cart_erase()?>">Vider le panier</a></div>
