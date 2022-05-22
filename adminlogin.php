<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="loginformstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome.css">

    <title>Login #2</title>
    
  </head>
  <body>
  <header class="header-area header-sticky" style="height: 6.5rem ;">
        <div class="container" >
            <div class="row" >
                <div class="col-12" >
                    <nav class="main-nav" >
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo"><img src ="assets/images/logonew.svg" style="height:9rem; width:9rem; margin-top:-1.5rem; margin-left:-5.2rem;"><span style="padding-left:-2rem;font-size:2rem; color:black;">Gro-Fresh</span><em> </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="padding-top:1.3rem;">
                            <li><a href="index.php" style="color:black;">Home</a></li>
                            <li><a href="" style="color:black;">Products</a></li>
                            <li><a href="" style="color:black;">Checkout</a></li>
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:red;">Login</a>
                              
                                <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="" style="color:black;">Seller Login</a>
                                    
                                </div>
                              <li><a href="" style="color:black">About Us</a></li>

                            
                            <li><a href="" style="color:black;">Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    
    
    
  

  <div class="d-lg-flex half" style="height:100%">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/images/gro.jpg');margin-top:-15% ;"></div>
    <div class="contents order-2 order-md-1">

      <div class="container" >
        <div class="row align-items-center justify-content-center" >
          <div class="col-md-7" style="margin-top:20%;">
            <h3>Login</h3>
            <p class="mb-4">Enter Your Username and Password</p>
            <form action="loginvalid.php" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

             

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>