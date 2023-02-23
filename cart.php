<?php
session_start();
//koneksi ke database
$con = mysqli_connect("localhost", "root", "", "phpdasar");

if (isset($_POST["submit"])) {
  $nama = $_POST["nama"];
  $tel = $_POST["tel"];
  $kota = $_POST["kota"];
  $kec = $_POST["kec"];
  $kel = $_POST["kel"];
  $kpos = $_POST["kpos"];
  $jalan = $_POST["jalan"];
  $bayar = $_POST["bayar"];
  $bayar2 = $_POST["bayar2"];
  $insert = "INSERT INTO pesanan VALUES ( '','$nama',$tel,'$kota','$kec','$kel',$kpos,'$jalan','$bayar','$bayar2','Dalam Proses')";
  $_SESSION["nama"] = $_POST["nama"];
  $_SESSION["bayar"] = $_POST["bayar"];
  $_SESSION["bayar2"] = $_POST["bayar2"];
  mysqli_query($con, $insert);
  header('location: status.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothing Store</title>
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <div class="lay-confirm" id="popup"></div>
  <div class="header">
    <div class="back">
      <a href="Home.php" style="font-weight:bolder; color:red;">Kembali</a>
    </div>
    <div class="icons">
      <a href="#">
        <div class="cart">
          <ion-icon name="cart-outline"></ion-icon>
          <div id="cartAmount" class="cartAmount">0</div>
        </div>
      </a>
    </div>
  </div>
  <div class="full-container">
    <div class="text-checkout"><a href="./Home.php">Homepage</a> / Checkout</div>
    <div class="popup-confirm" id="confirm">
      <h1>Apakah anda yakin ?</h1>
      <div class="confirm">
        <button class="button-24" onclick="accpay()">Ya</button>
        <button class="button-24" onclick="closepopup()">Tidak</button>
      </div>
    </div>
    <div class="text-bar">
      <h3>Checkout</h3>
      <div class="total-checkout">
        <h2>Pesanan Kamu:</h2>
        <div id="label" class="text-center"></div>
      </div>
    </div>
    <form action="" method="post" name="form">
      <div class="main-checkout">
        <div class="form-checkout" style="margin-top: 20px;">
          <h4>Personal information :</h4>
          <div class="val-info" id="val-info" style="color: red;"></div>
          <div class="wrapper-input">
            <label for="nama">Nama</label>
            <input type="text" class="input-checkout" id="nama" name="nama" placeholder="Nama" required minlength="3" maxlength="30" onkeydown="return /[a-z]/i.test(event.key)" autocomplete="off">
          </div>
          <div class="wrapper-input">
            <label for="notlp">No.Telepon</label>
            <input type="tel" name="tel" class="input-checkout" Id="notlp" oninput="this.value = this.value.replace(/[^0-9]/g,'')" placeholder="No.Telepon" required minlength="10" maxlength="13" autocomplete="off">
          </div>
          <div class="wrapper-input">
            <label for="alamat">Alamat</label>
            <div class="al">
              <input type="text" name="kota" id="alamat" placeholder="Kota" class="input-checkout" required autocomplete="off" onkeydown="return /[a-z]/i.test(event.key)">
              <input type="text" name="kec" placeholder="Kecamatan" class="input-checkout" required autocomplete="off" onkeydown="return /[a-z]/i.test(event.key)">
              <input type="text" name="kel" placeholder="Kelurahan" class="input-checkout" required autocomplete="off" onkeydown="return /[a-z]/i.test(event.key)">
              <input type="tel" name="kpos" placeholder="Kode Pos" class="input-checkout" oninput="this.value = this.value.replace(/[^0-9]/g,'')" required maxlength="5" autocomplete="off">
            </div>
            <div class="detail-al">
              <textarea placeholder="Detail Lainnya (Cth: jalan,blok,no.rumah)" name="jalan" required maxlength="100" autocomplete="off"></textarea>
            </div>
          </div>
          <h4>Payment:</h4>
          <div class="container">
            <div class="radio-tile-group">
              <div class="input-container">
                <input id="COD" type="radio" name="bayar" required value="COD" onclick="hideshow(1)">
                <div class="radio-tile">
                  <i class="fa-solid fa-money-bill"></i>
                  <label for="cod">COD<br>(Bayar di Tempat)</label>
                </div>
              </div>

              <div class="input-container">
                <input id="transfer" type="radio" name="bayar" required value="transfer" onclick="hideshow(2)">
                <div class="radio-tile">
                  <i class="fa-solid fa-money-bill-transfer"></i>
                  <label for="transfer">Bank Transfer</label>
                </div>
              </div>

              <div class="input-container">
                <input id="wallet" type="radio" name="bayar" required value="E-wallet" onclick="hideshow(3)">
                <div class="radio-tile">
                  <i class="fa-solid fa-wallet"></i>
                  <label for="wallet">E-Wallet</label>
                </div>
              </div>
            </div>
          </div>
          <div class="container1" id="01">
            <div class="radio-tile-group">
              <div class="input-container">
                <input id="Cash" type="radio" name="bayar2" required value="Cash">
                <div class="radio-tile">
                  <i class="fa-solid fa-money-bill-wave"></i>
                  <label for="cash">cash</label>
                </div>
              </div>
            </div>
          </div>
          <div class="container1" id="02">
            <div class="radio-tile-group">

              <div class="input-container">
                <input id="bca" type="radio" name="bayar2" required value="Bca">
                <div class="radio-tile">
                  <img src="./image/bca.png" width="120" alt="Bank Central Asia " />
                </div>
              </div>

              <div class="input-container">
                <input id="Bni" type="radio" name="bayar2" required value="Bni">
                <div class="radio-tile">
                  <img src="./image/BNI.png" width="120" alt="bank negara indonesia " />
                </div>
              </div>

              <div class="input-container">
                <input id="Mandiri" type="radio" name="bayar2" required value="Mandiri">
                <div class="radio-tile">
                  <img src="./image/Bank Mandiri Logo (PNG-1080p) - FileVector69.png" width="120" alt="bank bca Mandiri" />
                </div>
              </div>
            </div>
          </div>
          <div class="container1" id="03">
            <div class="radio-tile-group">

              <div class="input-container">
                <input id="Gopay" type="radio" name="bayar2" required value="Gopay">
                <div class="radio-tile">
                  <img src="./image/gopay-logo-D27C1EBD0D-seeklogo.com.png" width="120" alt="gopay" />
                </div>
              </div>

              <div class="input-container">
                <input id="Dana" type="radio" name="bayar2" required value="Dana">
                <div class="radio-tile">
                  <img src="./image/Logo DANA (PNG-2160p) - FileVector69.png" width="120" alt="Dana" />
                </div>
              </div>

              <div class="input-container">
                <input id="ovo" type="radio" name="bayar2" required value="OVO">
                <div class="radio-tile">
                  <img src="./image/ovo.png" width="120" alt="OVO">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="checkout-container">
          <div class="shopping-cart" id="shopping-cart"></div>
        </div>
        <div class="popup" id="OK">
          <i class="fa-solid fa-check fa-9x"></i>
          <h1>Berhasil!</h1>
          <p>Pesanan akan segera diproses</p>
          <button class="button-24" onclick="location.href='./transactions-detail.php';" name="submit" type="submit">OK</button>
        </div>
    </form>
  </div>
  </div>
  <div class="pay" id="wallet1">
    <img src="./image/gopay-logo-D27C1EBD0D-seeklogo.com.png" width="200" alt="Gopay" />
    <img src="./image/frame.png" width="200px" height="250px" alt="scan">
    <button class="button-24" onclick="berhasil()">OK</button>
  </div>
  <div class="pay" id="wallet2">
    <img src="./image/ovo.png" width="150" alt="OVO" />
    <img src="./image/frame.png" width="200px" height="250px" alt="scan">
    <button class="button-24" onclick="berhasil()">OK</button>
  </div>
  <div class="pay" id="wallet3">
    <img src="./image/Logo DANA (PNG-2160p) - FileVector69.png" width="200" alt="Dana" />
    <img src="./image/frame.png" width="200px" height="250px" alt="scan">
    <button class="button-24" onclick="berhasil()">OK</button>
  </div>
  <div class="transfer" id="trans1">
    <img src="./image/bca.png" width="120" alt="BCA " />
    <p>Virtual Account :</p>
    <div class="text-info">
      <!-- The text field -->
      <input type="text" value="1234 5638 9876 980" id="myInput" disabled="disabled">

      <!-- The button used to copy the text -->
      <button onclick="myFunction()">SALIN</button>
    </div>
    <p style="font-size: 15px;">Proses verifikasi kurang dari 10 menit setelah pembayaran Berhasil</p>
    <div class="info-bayar">
      <input type="checkbox" id="12" onchange="parentbar()" style="display: none;">
      <label for="12">Petunjuk Pembayaran <i class="fa-solid fa-angle-down" id="19"></i><i class="fa-solid fa-angle-up" id="30" style="display: none;"></i></label>
    </div>
    <div class="bayar-info" id="15">
      <div class="b1">
        <p>1</p>
        <p style="font-size: 17px;">Pilih <b>m-Transfer > BCA Virtual Account</b></p>
      </div>
      <div class="b1">
        <p>2</p>
        <p style="font-size: 17px;">Masukkan <b>nomor Virtual Account 1234 5638 9876 980 </b>dan pilih <b>Send</b></p>
      </div>
      <div class="b1">
        <p>3</p>
        <p style="font-size: 17px;">Periksa informasi yang tertera di layar. Jika sudah benar,Pilih <b>Ya</b></p>
      </div>
      <div class="b1">
        <p>4</p>
        <p style="font-size: 17px;">Masukkan PIN m-BCA Anda dan pilih <b>OK</b></p>
      </div>
    </div>
    <button class="button-24" style="margin: 30px; margin-left:350px; width: 100px;" onclick="berhasil()">Selesai</button>
  </div>
  <div class="transfer" id="trans2">
    <img src="./image/BNI.png" style="padding-top: 20px;" width="120" alt="BNI" />
    <p>Virtual Account :</p>
    <div class="text-info">
      <!-- The text field -->
      <input type="text" value="1234 5638 9876 980" id="myInput" disabled="disabled">

      <!-- The button used to copy the text -->
      <button onclick="myFunction()">SALIN</button>
    </div>
    <p style="font-size: 15px;">Proses verifikasi kurang dari 10 menit setelah pembayaran Berhasil</p>
    <div class="info-bayar">
      <input type="checkbox" id="13" onchange="parentbar2()" style="display: none;">
      <label for="13">Petunjuk Pembayaran <i class="fa-solid fa-angle-down" id="20"></i><i class="fa-solid fa-angle-up" id="31" style="display: none;"></i></label>
    </div>
    <div class="bayar-info" id="16">
      <div class="b1">
        <p>1</p>
        <p style="font-size: 17px;">Pilih <b>m-Transfer > BNI Virtual Account</b></p>
      </div>
      <div class="b1">
        <p>2</p>
        <p style="font-size: 17px;">Masukkan <b>nomor Virtual Account 1234 5638 9876 980 </b>dan pilih <b>Send</b></p>
      </div>
      <div class="b1">
        <p>3</p>
        <p style="font-size: 17px;">Periksa informasi yang tertera di layar. Jika sudah benar,Pilih <b>Ya</b></p>
      </div>
      <div class="b1">
        <p>4</p>
        <p style="font-size: 17px;">Masukkan PIN m-BNI Anda dan pilih <b>OK</b></p>
      </div>
    </div>
    <button class="button-24" style="margin: 30px; margin-left:350px; width: 100px;" onclick="berhasil()">Selesai</button>
  </div>
  <div class="transfer" id="trans3">
    <img src="./image/Bank Mandiri Logo (PNG-1080p) - FileVector69.png" style="padding-top: 30px; padding-bottom: 20px;" width="120" alt="Mandiri" />
    <p>Virtual Account :</p>
    <div class="text-info">
      <!-- The text field -->
      <input type="text" value="1234 5638 9876 980" id="myInput" disabled="disabled">

      <!-- The button used to copy the text -->
      <button onclick="myFunction()">SALIN</button>
    </div>
    <p style="font-size: 15px;">Proses verifikasi kurang dari 10 menit setelah pembayaran Berhasil</p>
    <div class="info-bayar">
      <input type="checkbox" id="27" onchange="parentbar3()" style="display: none;">
      <label for="27">Petunjuk Pembayaran <i class="fa-solid fa-angle-down" id="29"></i><i class="fa-solid fa-angle-up" id="40" style="display: none;"></i></label>
    </div>
    <div class="bayar-info" id="28">
      <div class="b1">
        <p>1</p>
        <p style="font-size: 17px;">Pilih <b>m-Transfer > Mandiri Virtual Account</b></p>
      </div>
      <div class="b1">
        <p>2</p>
        <p style="font-size: 17px;">Masukkan <b>nomor Virtual Account 1234 5638 9876 980 </b>dan pilih <b>Send</b></p>
      </div>
      <div class="b1">
        <p>3</p>
        <p style="font-size: 17px;">Periksa informasi yang tertera di layar. Jika sudah benar,Pilih <b>Ya</b></p>
      </div>
      <div class="b1">
        <p>4</p>
        <p style="font-size: 17px;">Masukkan PIN m-Mandiri Anda dan pilih <b>OK</b></p>
      </div>
    </div>
    <button class="button-24" style="margin: 30px; margin-left:350px; width: 100px;" onclick="berhasil()">Selesai</button>
  </div>
  <script src="js/Data.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/restaurant.js"></script>
  <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/7b727a546b.js" crossorigin="anonymous"></script>
</body>


</html>