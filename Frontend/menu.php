<?php 
require_once("../Backend/include/initialize.php");  // Pastikan ini mengarah ke file yang benar di server
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css"> <!-- Pastikan untuk menyesuaikan dengan path CSS yang Anda gunakan -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Arum<small>Coffee</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Beranda</a></li>
	          <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Pelayanan</a></li>
	          <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="about.html" class="nav-link">Tentang Kami</a></li>
			  <li class="nav-item"><a href="product-single.html" class="nav-link">Detail Produk</a></li>
	          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="room.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            	</li> -->
	          <li class="nav-item"><a href="contact.html" class="nav-link">Kontak</a></li>
	          <!-- <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li> -->
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Menu Kami</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+62 8123 456 789</h3>
	    						<p>Kami hanya menggunakan kopi spesial pilihan, disangrai dengan sempurna untuk menciptakan rasa yang tak terlupakan.
								</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Jl. Ahmad Yani No.13</h3>
	    						<p>Balikpapan Kota, Balikpapan, Kalimantan Timur, Indonesia</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Buka Senin - Jumat</h3>
	    						<p>8:00 WITA - 21:00 WITA</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
    		</div>
    	</div>
    </section>

	</br></br></br>
	<div class="container">
	<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Daftar Menu</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- Formulir untuk delete -->
<form action="controller.php?action=delete" method="POST">
    <div class="table-responsive">
        <table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0"  >
            <thead style="font-size: 18px;">
                <tr>
                    <th style="text-align: center;">Gambar</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi dan query ke database
                $query = "SELECT * FROM `tblmeals` m , `tblcategory` c WHERE m.`CATEGORYID` = c.`CATEGORYID` ORDER BY c.`CATEGORY`";
                $mydb->setQuery($query);
                $cur = $mydb->loadResultList();

                // Loop untuk menampilkan data
                foreach ($cur as $result) { 
                    echo '<tr>';
                    echo '<td width="100px">
                            <a class="MEALID" href="#" data-target="#menuModal" data-toggle="modal" data-id="' . $result->MEALID . '">
                            <img title="Change Photo" width="100px" height="40px" src="' . web_root . 'meals/' . $result->MEALPHOTO . '">
                            </a>
                          </td>';
                    echo '<td style="font-size:18px;">' . $result->MEALS . '</td>';
                    echo '<td style="font-size:18px; width:100px">' . $result->CATEGORY . '</td>';
                    echo '<td style="font-size:18px;" width="100px">Rp. ' . number_format($result->PRICE, 0, '.', '') . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</form>
</div>
</br></br></br>
<footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang Kami</h2>
              <p>Arum Coffee
				Menyajikan kopi berkualitas dengan cinta dan ketelitian. Nikmati cita rasa terbaik dalam suasana yang hangat dan nyaman.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Produk Kami</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/Kopi_Susu.jpg);"></a>
                <div class="text">
					<h3><a href="#">Sweet Milk Coffee</a></h3>
					<p>Kopi susu manis yang lembut dan nikmat, memberikan rasa kopi dan susu yang berpadu sempurna.</p>
					<p class="price"><span> Rp 38.000</span></p>
					<p><a href="#" class="btn btn-primary btn-outline-primary">Detail Produk</a></p>
                </div>
              </div>
              <!-- <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Pelayanan</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Brewed</a></li>
                <li><a href="#" class="py-2 d-block">Served Fresh</a></li>
                <li><a href="#" class="py-2 d-block">Quality Coffee</a></li>
                <li><a href="#" class="py-2 d-block">Blended perfection</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Ada Pertanyaan?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Ahmad Yani No.13, Balikpapan Kota, Balikpapan, Kalimantan Timur, Indonesia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 8123 456 789</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@arumcoffee.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Arum Coffee <i class="icon-heart" aria-hidden="true"></i></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
