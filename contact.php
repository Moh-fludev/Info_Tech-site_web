<?php
session_start();

include('layout/header.php')
?>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_text">CONTACT US</h1>
                  <div class="mail_sectin">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                     <input type="text" class="email-bt" placeholder="Phone Number" name="Name">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">SEND</a></div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="image_9"><img src="public/images/contact.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <?php


include('layout/footer.php')
?>