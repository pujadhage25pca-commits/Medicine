<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">

            <img src="images/logo.png" alt="">
            <span>
              Medicare
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
               
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="buy.php">Medicines</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              </ul>
              <form class="form-inline ">
                <input type="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <div class="cart_btn-container ml-0 ml-lg-5">
                <img src="" alt="">
              
              <?php
              $count=0;
              if(isset($_SESSION['cart'])) 
              {
                $count=count($_SESSION['cart']);
              }
            ?>
             <ul>
                <li><a href="maincart.php"><span class="cart-icon">
                </span><center>🛒</center>
               cart(<?php echo $count;?>)</a></li>
              </ul>
            </div>
              
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="regis.html">
                  <img src="images/user.png"alt="">
                  <span>
                   <center>Register here</center>
                  </span>
                </a>
              </div>
              
            </div>
          </div>

        </nav>
      </div>

</body>
</html>