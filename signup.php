
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up for client</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="shortcut icon" href="favicon.ico"> 
   <link rel="icon" href="public/images/fevicon.png" type="image/gif" />
    <!-- Main css -->
    <link rel="stylesheet" href="public/css/stylef.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="header_section">
        <div class="container-fluid">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="logo"><a href="index.php"><img src="public/images/logo1.png"></a></div>
            
              
           </nav>
        </div>
     </div>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="model/add_client.php" class="register-form" id="register-form">
                        <div class="form-group">
                                <label ><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="name" placeholder="Your nom" required/>
                            </div>
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="name" placeholder="Your prenom" required/>
                            </div> 
                        <div class="form-group">
                                <label ><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="telephone" id="name" placeholder="Your telephone" required/>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="name" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="name" placeholder="Password" required/>
                            </div>
                           
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="public/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>