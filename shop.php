<?php
session_start();
include('layout/header.php');

include('model/database.php');
include('model/fonctione.php');

$db = db_connect();
$list = shop_Article($db);


?>

<div class="services_section layout_padding">
   <div class="container">
      <h1 class="services_taital">Material Informatique</h1>
     
      <div class="services_section2 layout_padding">
         <div class="row">
            <?php
            foreach ($list as $article) { ?>
               <div class="card_pro col-lg-4 col-sm-6">
                  <img class="card-img-top" src="../partiAdmin/public/images/articles/<?php echo $article['img_ar'] ?>" alt="Card image cap">
                  <div class="souscarre">
                 <form action="cart.php?id_ar=<?=$article['id_ar']?>" method="POST">
                  <input hidden name="img_ar" type="text" value="<?= $article['img_ar'] ?>">
                  <input hidden name="disignation_ar" type="text" value="<?= $article['disignation_ar'] ?>">
                  <input hidden name="prix_ar" type="number" value="<?= $article['prix_ar'] ?>">
                  <button name="add_cart" type="submit" class="btncomman">Commander</button>
                 </form>
                  </div>
                  <p class="gangito"><?php echo $article['disignation_ar'] ?> <br></p>
                  <p class="price">Prix :<?php echo $article['prix_ar'] ?> Da</p>
             <i> <b><a class="detaile" href="detail.php?id_ar=<?php echo$article['id_ar']?>">More detaile</a></b></i>
               </div>
            <?php } ?>
          
         </div>
      </div>
   </div>
</div>



<?php
include('layout/footer.php')
?>