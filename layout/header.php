<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <link rel="shortcut icon" href="favicon.ico"> 
   <link rel="icon" href="public/images/fevicon.png" type="image/gif" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="public/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="public/css/responsive.css">
   <!-- fevicon -->
  
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="public/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->

   <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>
<body>
   <!-- header sectilogoon start -->
   <div class="header_section">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.php"><img src="public/images/logo1.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.php">services</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="shop.php">Shop</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a <?php if (!isset($_SESSION['username'])){echo'hidden'; } ?>  class="nav-link" href="cart.php">cart</a>
                  </li>
               </ul>
               <div class="search_icon">
                  <ul>
                     <li class="account_session"><?php if (isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                      
                     } ?></li>
                  </ul>
               </div>
               
               <div class="search_icon">
                  <ul>
                    
                     <li><a  <?php if (isset($_SESSION['username'])){echo'hidden'; } ?>  href="login.php"><button type="button" class="btn btn-secondary">Log in</button></a></li>
                  </ul>
               </div>
             
               <?php if (isset($_SESSION['username'])){  ?>
                  <div class="search_icon">
                  <ul>
                     <li><a href="model/log_out_client.php">Log Out</a></li>
                  </ul>
               </div>
                  <?php
                     }else{?>
                      <div class="search_icon">
                  <ul>
                     <li><a href="signup.php">Sign in</a></li>
                  </ul>
               </div>
                     <?php
                     }
                     ?>
             
            </div>
         </nav>
      </div>
   </div>
   <!-- header section end -->


