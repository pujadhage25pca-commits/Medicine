<?php
session_start();

?>
<?php
// Database connection
require_once 'C:\xampp\htdocs\project1\connection.php';

// Query to retrieve all products
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Medicare</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
            <a href="">
              <img src="images/telephone-symbol-button.png" alt=""> Call : +918459263231
            </a>
          </div>
          <div class="social-container">
            <a href="">
              <img src="images/fb.png" alt="" class="s-1">
            </a>
            <a href="">
              <img src="images/twitter.png" alt="" class="s-2">
            </a>
            <a href="">
              <img src="images/instagram.png" alt="" class="s-3">
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
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
             
<ul class="navbar-nav ml-auto">
  
    <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="about.php"> About </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Medicines
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#human" data-category="human">Allopathy Medicines</a>
            <a class="dropdown-item" href="#veterinary" data-category="veterinary">Veterinary Medicines</a>
            <a class="dropdown-item" href="#ayurvedic" data-category="ayurvedic">Ayurvedic Medicines</a>
            <a class="dropdown-item" href="#general" data-category="general">General Category</a>
            <a class="dropdown-item" href="#skincare" data-category="skincare">Skin Care Products</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact us</a>
    </li>

              <form class="form-inline" method="get" action="search.php">
                <input type="search" placeholder="Search" name="query">
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
          </div>
              <li class="nav-item">
             <a class="nav-link" href="maincart.php">
              <span class="cart-icon">
                </span>
                <center>🛒cart<?php echo isset($_SESSION['cart']) ?'('. count($_SESSION['cart']).')' :'';?></center>
                </a> 
              </li>
              </ul>
              </ul>
              <div class="login_btn-contanier ml-0 ml-lg-5">
        <a href="regis.php">
            <img src="images/user.png" alt="">
            <span>
                <center><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Login"; ?></center>
            </span>
        </a>
    </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>





  <!-- health section -->

  <section class="health_section layout_padding">
    <div class="health_carousel-container"> 
        <h2 class="text-uppercase">Human Medicines </h2>
        <div class="carousel-wrap layout_padding2" id="human">
            <!-- Human Medicines Carousel -->
            <div class="owl-carousel">
          <div class="item">
            <form action="cartmanage.php" method="post">
    <div class="box">
        <div class="btn_container">
            <button type="submit"  name="addcart" class="btn btn-info">
                Buy Now
            </button>
            <input type="hidden" name="med_id" value="1"> <!-- Add this line to store the medicine ID -->
            <input type="hidden" name="med" value="Paracetamol">
            <input type="hidden" name="price" value="120">
        </div>
        <div class="img-box">
            <img src="images/para.jpg" alt="">
        </div>
        <div class="detail-box">
            <div class="text">
                <h6>Paracetamol</h6>
                <h6 class="price">
                    <span>Rs</span> 5
                </h6>
            </div>
        </div>
    </div>
</form>

           <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="2">
                <input type="hidden" name="med" value="omee">
                <input type="hidden" name="price" value="3">
              </div>
              <div class="img-box">
                <img src="images/omee.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Omee
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    5
                  </h6>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="3">
                <input type="hidden" name="med" value="Advotim">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/advotim.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Advotim
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    3
                  </h6>
                </div>
              </div>
              </form>
            </div>
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addscart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="4">
                <input type="hidden" name="med" value="Cofsils">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/cof.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Cofsils
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    30
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
               <button type="submit"  name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="5">
                <input type="hidden" name="med" value="Koflet">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/koflet.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Koflet
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    5
                  </h6>
                </div>
              </div>
              </form>
            </div>
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
               <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="6">
                <input type="hidden" name="med" value="Nicip">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/nici.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Nicip
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    3
                  </h6>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit"  name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="7">
                <input type="hidden" name="med" value="Nodard">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/nodard.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Nodard
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    3
                  </h6>
                </div>
              </div>
              </form>
            </div>
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
               <button type="submit"  name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="8">
                <input type="hidden" name="med" value="Drmet-gb">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/drmet-gb.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    DRMET-GB
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    5
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <div class="health_carousel-container" id="veterinary">
            <h2 class="text-uppercase">Veterinary Medicines </h2>
            <!-- Veterinary Medicines Carousel -->
            <div class="carousel-wrap layout_padding2">
                <div class="owl-carousel owl-2">
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="9">
                <input type="hidden" name="med" value="Neomac">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/neo.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Neomac
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    10
                  </h6>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit"  name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="10">
                <input type="hidden" name="med" value="Anxocare">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/anxo2.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Anxocare
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    5
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="11">
                <input type="hidden" name="med" value="Pirosion">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/piro.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Pirosion
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    30
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="12">
                <input type="hidden" name="med" value="Amox-s">
                <input type="hidden" name="price" value="30">
              </div>
              <div class="img-box">
                <img src="images/amox.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Amox-S
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    7
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      
    </div>
    <div class="health_carousel-container" id="ayurvedic">
            <h2 class="text-uppercase">Ayurvedic Medicines </h2>
            <!-- Veterinary Medicines Carousel -->
            <div class="carousel-wrap layout_padding2">
                <div class="owl-carousel owl-2">
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="13">
                <input type="hidden" name="med" value="Abhayarishta">
                <input type="hidden" name="price" value="100">
              </div>
              <div class="img-box">
                <img src="images/i2.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                   Abhayarishta
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    100
                  </h6>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit"  name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="14">
                <input type="hidden" name="med" value="amritarishta">
                <input type="hidden" name="price" value="110">
              </div>
              <div class="img-box">
                <img src="images/i3.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                   Amritarishta
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    110
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="15">
                <input type="hidden" name="med" value="aragvadharishta">
                <input type="hidden" name="price" value="100">
              </div>
              <div class="img-box">
                <img src="images/i8.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                   Aragvadharishta
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    100
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="16">
                <input type="hidden" name="med" value="aravindasava">
                <input type="hidden" name="price" value="100">
              </div>
              <div class="img-box">
                <img src="images/i5.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Aravindasava
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    100
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      
    </div>
     <div class="health_carousel-container" id="general">
            <h2 class="text-uppercase">General Category </h2>
            <!-- Veterinary Medicines Carousel -->
            <div class="carousel-wrap layout_padding2">
                <div class="owl-carousel owl-2">
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="17">
                <input type="hidden" name="med" value="dettol">
                <input type="hidden" name="price" value="70">
              </div>
              <div class="img-box">
                <img src="images/de.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Dettol
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    70
                  </h6>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit"  name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="18">
                <input type="hidden" name="med" value="whisper">
                <input type="hidden" name="price" value="48">
              </div>
              <div class="img-box">
                <img src="images/p1.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Sanitory Pad
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    48
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="19">
                <input type="hidden" name="med" value="colgate">
                <input type="hidden" name="price" value="20">
              </div>
              <div class="img-box">
                <img src="images/c.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Tooth Paste
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    20
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="20">
                <input type="hidden" name="med" value="Harpic">
                <input type="hidden" name="price" value="40">
              </div>
              <div class="img-box">
                <img src="images/h.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                     Harpic
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    40
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      
    </div>
     <div class="health_carousel-container" id="skincare">
            <h2 class="text-uppercase">Skin Care Products </h2>
            <!-- Veterinary Medicines Carousel -->
            <div class="carousel-wrap layout_padding2">
                <div class="owl-carousel owl-2">
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="21">
                <input type="hidden" name="med" value="Vaseline">
                <input type="hidden" name="price" value="10">
              </div>
              <div class="img-box">
                <img src="images/v.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Vaseline
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    10
                  </h6>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit"  name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="22">
                <input type="hidden" name="med" value="Everyuth">
                <input type="hidden" name="price" value="70">
              </div>
              <div class="img-box">
                <img src="images/ever2.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Everyuth
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    70
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="23">
                <input type="hidden" name="med" value="Himalaya">
                <input type="hidden" name="price" value="15">
              </div>
              <div class="img-box">
                <img src="images/h1.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Himalaya Facewash
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    15
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="item">
             <form action="cartmanage.php" method="post">
            <div class="box">
              <div class="btn_container">
                <button type="submit" name="addcart" class="btn btn-info">
                  Buy Now
                </button>
                <input type="hidden" name="med_id" value="24">
                <input type="hidden" name="med" value="Sunscreen">
                <input type="hidden" name="price" value="75">
              </div>
              <div class="img-box">
                <img src="images/s.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                    Pond's Sunscreen
                  </h6>
                  <h6 class="price">
                    <span>
                      Rs
                    </span>
                    75
                  </h6>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      
    </div>
  </section>

  </section>

  <!-- end health section -->
 
  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +918459263231
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  sakshi@gmail.com
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="buy.php"> Medicines </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_news">
            <h4>
              E-mail
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your email">
              <div class="d-flex justify-content-center justify-content-md-end mt-3">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>
<?php
// Free result set
mysqli_free_result($result);

// Close connection
mysqli_close($conn);
?>