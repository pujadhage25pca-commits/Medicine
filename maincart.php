<?php
session_start();

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
             <!-- ... (existing code) ... -->

<ul class="navbar-nav ml-auto">
  
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
<!-- ... (existing code) ... -->

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <!-- Add your CSS and other head elements here -->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Cart</h1>
        </div>

        <div class="col-lg-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Medicine Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                
  <tbody class="text-center">
    <?php
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $sr = $key + 1;
            echo "
            <tr>
                <td>$sr</td>
                <td>{$value['med']}</td>
                <td>{$value['price']}<input type='hidden' class='iprice' value='{$value['price']}'></td>
                <td>
                    <form action='cartmanage.php' method='post'>
                        <input class='text-center iquantity' name='modqty' onchange='this.form.submit();' type='number' value='{$value['quantity']}' min='1' max='10'>
                        <input type='hidden' name='med' value='{$value['med']}'>
                        <input type='hidden' name='med_id' value='{$value['med_id']}'> <!-- Add this line for item ID -->
                    </form>
                </td>
                <td class='itotal'></td>
               <td>
    <form action='cartmanage.php' method='post'>
        <button type='submit' name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
        <input type='hidden' name='med' value='{$value['med']}'>

      <input type='hidden' name='med_id' value='{$value['med_id']}'> <!-- Add this line for item ID -->
                    </form>
</td>

            </tr>
            ";
        }
    }
    ?>
</tbody>


            </table>
        </div>

        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
                <h4>Grand Total:</h4>
                <h5 class="text-right" id="gtotal"></h5>
                <br>
                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { 
                  ?>
                <form action="purchase.php" method="post">
                    <div class="form-group">
                        <label>Full Name</label>
                        <?php if(isset($_SESSION['username'])) : ?>
                        <input type="text" name="name" class="form-control" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required>
                    <?php else : ?>
        <input type="text" name="name" class="form-control" placeholder="Name" required>
    <?php endif; ?>
</div>
                   <div class="form-group">
    <label>Phone</label>
    <?php if(isset($_SESSION['phno'])) : ?>
        <input type="text" name="phno" class="form-control" value="<?php echo isset($_SESSION['phno']) ? $_SESSION['phno'] : ''; ?>" required>
    <?php else : ?>
        <input type="text" name="phno" class="form-control" placeholder="Phone" required>
    <?php endif; ?>
</div>

                    <div class="form-group">
                        <label>Address</label>
                        <?php if(isset($_SESSION['addr'])) : ?>
                        <input type="text" name="addr" class="form-control" value="<?php echo isset($_SESSION['addr']) ? $_SESSION['addr'] : ''; ?>" required>
                   <?php else : ?>
        <input type="text" name="addr" class="form-control" placeholder="Address" required>
    <?php endif; ?>
</div>
                    <input type="hidden" name="paymode" value="COD">
            <input type="hidden" name="purchase" value="1">

            <!-- Change the formaction to "purchase.php" -->
            <button type="submit" formaction="purchase.php">Purchase</button>
        </form>
        <?php
      }
      ?>
    </div>
</div>
    </div>
</div>
<script type="text/javascript">
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subTotal() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = gt;
    }

    subTotal();
</script>
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
                <a class="nav-link" href="about.php"> About </a>
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
</body>
</html>
