<?php
foreach (cart_total_byItem() as $key=>$item){

    ?>
    <div><?php echo product()->get($item['id'])->nom.'/Quantite:'.$item['quantite']?>  <a href="<?php echo delete_cart_item($item['id'])?>">suppr</a></div>
   <div><a href="<?php echo erase_cart()?>">Vider le panier</a></div>
    <div><a href="<?php echo page_url('checkout')?>">Passer la commande</a></div>
    <?php
}
