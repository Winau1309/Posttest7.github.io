<?php
session_start();
require '../koneksi.php';

if (!isset($_SESSION['login'])) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">
    <title>Posstest 7</title>

</head>

<body>
  <script>
      var nama = prompt('Enter Your Name Here :');
      console.log(nama);
      alert("Hi!"+ " " + nama + " " + "Welcome to Our Website" )
  </script>

    <!-- navbar -->
    <nav class="navbar" onclick="DOM()" id="coba">
    <div class="logo"><img src="img/logo-lazada.png" alt="" width="120px" /></div>
      <input type="checkbox" id="check" />
      <div class="search">
      <form class="cari">
          <input type="text" name="search" placeholder="Search..">
        </form>
      </div>
      <ul class="nav-links">
      <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <div class="menu">
          <li><a href="#product">PRODUCT</a></li>
          <li><a href="aboutme.php">ABOUT ME</a></li>
          <li><a href="crud/tambah.php">CRUD</a></li>
          <li><a href="crud/index.php">
                        <form action="logout.php" method="post">
                            <button type="submit" name="logout">LOG OUT</button>
                        </form></a></li>
                <li><a href="#"><i class="bi-moon" id="toggleDark"></i></a></li>
        </div>
      </ul>
    </nav>
   
      <!-- main content -->
    <!-- iklan -->
    <div class="row">
      <div class="col-2">
        <img src="img/navbar.png" alt="" />
      </div>
    </div>

    <!-- produk -->
    <div id="product" class="container">
      <h2 onclick="DOM()">FLASH SALE</h2>
        <div class="card" id="coba1">
          <img src="img/tisu.jfif"content />
          <div class="deskrip">
            <span>Tisu</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-regular fa-star star"></i>
            </div>
            <h4>Rp. 10.000</h5>
            <h5>Samarinda</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card" id="coba2">
          <img src="img/penggaris.jfif" class="content" />
          <div class="deskrip">
            <span>Penggaris</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
            </div>
            <h4>Rp. 7.000</h5>
            <h5>Balikpapan</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card" id="coba3">
          <img src="img/nike.jfif" class="content" />
          <div class="deskrip">
            <span>Sepatu Nike</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-regular fa-star star"></i>
              <i class="fa-regular fa-star star"></i>
            </div>
            <h4>Rp. 950.000</h5>
            <h5>Bandung</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card" id="coba4">
          <img src="img/parfum.jfif" class="content" />
          <div class="deskrip">
            <span>Parfum</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-regular fa-star star"></i>
            </div>
            <h4>Rp. 87.500</h5>
            <h5>Bali</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card" id="coba5">
          <img src="img/tas lv.jpg" class="content" />
          <div class="deskrip">
            <span>Tas Louis Vuitton</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
            </div>
            <h4>Rp. 48.749.000</h5>
            <h5>Jakarta</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
      </div>
    </div>

    <div id="categories" class="most">
      <h2>MOST POPULAR</h2>
        <div class="card">
          <img src="img/buku.jpg"content />
          <div class="deskrip">
            <span>Buku Tulis</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
            </div>
            <h4>Rp. 36.000</h5>
            <h5>Samarinda</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card">
          <img src="img/selempang.jpg" class="content" />
          <div class="deskrip">
            <span>Tas Selempang</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-regular fa-star star"></i>
            </div>
            <h4>Rp. 49.000</h5>
            <h5>Jakarta Utara</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card">
          <img src="img/sticky.jpg" class="content" />
          <div class="deskrip">
            <span>Sticky Note</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
            </div>
            <h4>Rp. 25.000</h5>
            <h5>Surabaya</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card">
          <img src="img/hoodie.jpg" class="content" />
          <div class="deskrip">
            <span>Hoodie Unisex</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-regular fa-star star"></i>
            </div>
            <h4>Rp. 68.500</h5>
            <h5>Malang</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
        <div class="card">
          <img src="img/serum.jpg" class="content" />
          <div class="deskrip">
            <span>Serum Emina</span>
            <div>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-star star"></i>
              <i class="fa-regular fa-star star"></i>
            </div>
            <h4>Rp. 74.000</h5>
            <h5>Jakarta</h5>
          </div>
          <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
        </div>
      </div>
    </div>
  
        <!-- footer -->
        <div id="footerr" class="footer">
      <p>copyright &copy;2022 <a href="#aboutme">by Wina Aulia Nugrasari</a>  </p>
   </div>
   <script src="script.js"></script>
  </body>
</html>