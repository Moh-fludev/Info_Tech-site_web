<?php
session_start();
include('layout/header.php');

include('model/database.php');
include('model/fonctione.php');
$db = db_connect();
if(isset($_SESSION['username']) and isset($_SESSION['password']) ){
if(isset($_GET['action'])){
  if($_GET['action']=='remove'){
    foreach($_SESSION['cart'] as $key => $article){
      if($article['id_ar']==$_GET['id_ar']){
        unset($_SESSION['cart'][$key]);
      }
    }
  }

if($_GET['action']=='remove_all'){
unset($_SESSION['cart']);
}
}

if(isset($_POST['add_cart'])){
if(isset($_SESSION['cart'])){
$session_array_id = array_column($_SESSION['cart'],'id_ar');
 if(!in_array($_GET['id_ar'],$session_array_id)){
  
   $session_array = array(
      'id_ar' => $_GET['id_ar'],
      'img_ar' => $_POST['img_ar'],
      'disignation_ar' => $_POST['disignation_ar'],
      'prix_ar' => $_POST['prix_ar'],
      
   );
   $_SESSION['cart'][] = $session_array;
 }

}else{

$session_array = array(
   'id_ar' => $_GET['id_ar'],
   'img_ar' => $_POST['img_ar'],
   'disignation_ar' => $_POST['disignation_ar'],
   'prix_ar' => $_POST['prix_ar'],

);
$_SESSION['cart'][] = $session_array;

}

}
?>
        

        <div class="services_section layout_padding">
   <div class="container">
      <h1 class="services_taital">Card Item</h1>

    
      <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Id</th>
      <th></th>
      <th>Disignation</th>
      <th>Prix</th>
      <th>Quantiti</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $count =0;
    if(isset($_SESSION['cart'])){
      $count = sizeof($_SESSION['cart']);
    }
    if($count>0){
   
    foreach($_SESSION['cart'] as $article){?>
    <tr>
    <td><?php echo $article['id_ar']?></td>
      <td>
        <div class="d-flex align-items-center">
         
          <img
              src="../partiAdmin/public/images/articles/<?php echo $article['img_ar']?>"
              alt=""
              style="width: 50px; height: 50px"
              
              />
        
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo $article['disignation_ar'] ?></p>
        
      </td>
      <td>
        <?php echo $article['prix_ar']?>.00DA
      </td>
     <div class="row">
     <td id="num_q"> <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></button>
<input class="col-4" type="text" value="1">
      <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></button></td>
     </div>
      <td>
     <a href="cart.php?action=remove&id_ar=<?php echo $article['id_ar'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
    <?php }}else{?>
     <tr>

<td></td>
<td></td>

<td></td>
<td></td>
<td>No Article commande !!</td>
<td></td>
<td></td>



     </tr>

      <?php
        
        
    }
        ?>
    
  </tbody>
</table>

<button id="payement"  type="button" class="btn btn-secondary">Pay Now</button>
   </div>
</div>



<?php    



?>






<?php
include('layout/footer.php');
  }else{

header('location: login.php');

  }
?>
