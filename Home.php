<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <header>
    <img src="image/LOGO.png" alt="" width="150px" height="150px" style="margin-top: 50px;">
    <div class="icons">
      <a href="cart.php">
        <div class="cart">
          <ion-icon name="cart-outline" style="color: rgba(197, 125, 0, 0.799);"></ion-icon>
          <div id="cartAmount" class="cartAmount">0</div>
        </div>
      </a>
    </div>
  </header>
  <!-- kategori -->
  <div class="cat">
    <ul>
      <li><a href="#home">
          <ion-icon name="home-outline"></ion-icon>Beranda
        </a></li>
      <li><a href="#menu">
          <ion-icon name="star-outline"></ion-icon>Favorit
        </a></li>
      <li><a href="#menu-kat">
          <ion-icon name="restaurant-outline"></ion-icon>Menu
        </a></li>
      <li><a href="#reservasi">
          <ion-icon name="calendar-outline"></ion-icon>Reservasi
        </a></li>
    </ul>
  </div>
  <!-- gambar bergerak-->
  <!--image slider start-->
  <section id="home">
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="image/Yellow Illustration Fast Food Restaurant Facebook Cover (1).png" alt="">
        </div>
        <div class="slide">
          <img src="image/Red Modern Burger Food Presentation.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
  </section>
  <!--image slider end-->
  <!--How to Order-->
  <div class="order">
    <div class="head-order">
      <h3>Cara Pemesanan</h3>
    </div>
    <div class="orders">
      <ul>
        <li><img src="https://cdn-icons-png.flaticon.com/512/1255/1255229.png" alt="">Cari makanan kesukaanmu</li>
        <li><img src="https://cdn-icons-png.flaticon.com/512/1086/1086741.png" alt="">Pilih metode Pembayaran</li>
        <li><img src="https://cdn-icons-png.flaticon.com/512/3080/3080729.png" alt="">Lakukan Pembayaran</li>
        <li><img src="https://cdn-icons-png.flaticon.com/512/2203/2203124.png" alt="">Tunggu makanan datang</li>
      </ul>
    </div>
  </div>
  <!-- menu best seller-->
  <div class="menu" id="menu">
    <!--menu start-->
    <div class="menu_section">
      <span class="section-subtitle"></span>
      <h2 class="section-title">Best Seller</h2>
      <div class="menu__container" id="shop4">
      </div>
    </div>
  </div>
  <!--menu end-->
  <!--menu kategori-->
  <section class="menu-slider" id="menu-kat">
    <div class="menu-kat">
      <!--manual navigation start-->
      <div class="navigation-manual1">
        <label for="radio5" class="manual-btn1">
          <h3>Pizza</h3>
        </label>
        <label for="radio6" class="manual-btn1">
          <h3>Burger</h3>
        </label>
        <label for="radio7" class="manual-btn1">
          <h3>Cemilan</h3>
        </label>
        <label for="radio8" class="manual-btn1">
          <h3>Minuman</h3>
        </label>
      </div>
      <!--manual navigation end-->
      <!--image slider start-->
      <div class="slider1">
        <div class="slides1">
          <!--radio buttons start-->
          <input type="radio" name="radio-btn1" id="radio5">
          <input type="radio" name="radio-btn1" id="radio6">
          <input type="radio" name="radio-btn1" id="radio7">
          <input type="radio" name="radio-btn1" id="radio8">
          <!--radio buttons end-->
          <!--slide images start-->
          <div class="slide first1">
            <div class="shop" id="shop">
            </div>
          </div>
          <div class="slide1">
            <div class="shop" id="shop1">
            </div>
          </div>
          <div class="slide1">
            <div class="shop" id="shop2">
            </div>
          </div>
          <div class="slide1">
            <div class="shop" id="shop3">
            </div>
          </div>
          <!--slide images end-->
        </div>

      </div>
      <!--image slider end-->
    </div>
  </section>
  <section class="booking">
    <div class="booking-wrapper" id="reservasi">
      <img src="image/background-booking.jpg" alt="">
      <div class="booking-text">
        <h3>Reservasi</h3>
        <br>
        <p>Rasakan experience makan langsung di tempat kami <br> Booking sekarang juga! </p>
      </div>
      <div class="booking-btn">
        <a href="Book_table.php">Pesan Sekarang</a>
      </div>
    </div>
  </section>
  <!-- loader part  -->
  <div class="loader-container">
    <img src="image/loader.gif" alt="">
  </div>
  <script src="js/Data.js"></script>
  <script src="js/Home.js"></script>
  <script src="js/restaurant.js"></script>
  <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>