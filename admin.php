<?php
$con = mysqli_connect("localhost", "root", "", "phpdasar");
$query = "SELECT COUNT(*) as total FROM pesanan where info = 'Dalam Proses'";
$result = mysqli_query($con, $query);
$a = mysqli_fetch_assoc($result);
$jumlah = $a['total'];
$id = mysqli_query($con, "SELECT * FROM pesanan where info = 'Dalam Proses'");
$select = mysqli_fetch_assoc($id);
if (isset($_POST["submit"])) {
    $update = "UPDATE pesanan SET info='Selesai' where info ='Dalam Proses'";
    mysqli_query($con, $update);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <section class="navbar">
        <a href="#" class="navbar-item"><i class="fa-solid fa-clipboard-list"></i>Pesanan</a>
        <a href="admin_book.php" class="navbar-item-none"><i class="fa-regular fa-calendar"></i>Booking</a>
    </section>
    <section class="main">
        <h1>Pesanan</h1>
        <div class="option">
            <ul>
                <li class="checklist">Pesanan Masuk</li>
                <li><a href="admin_selesai.php">Selesai</a></li>
            </ul>
        </div>
        <div class="detail" id="detail">
            <?php if ($jumlah != 0) {
                $b = $select['nama'];
                echo '<form action="" method="POST">
    <div class="detail-item">
      <div class="head-detail">
          <div style="display: flex;align-items: center;">
          <i class="fa-solid fa-user"></i>
          <input type="text" value="' . $b . '" disabled class="food">
          </div>
          <div class="notif">Dalam Proses</div>
      </div>
      <div class="line"></div>
      <div id="info"></div>
      <button onclick="done()" class="button-24" name="submit" type="submit">Selesai</button>
      </div>
      </form>';
            } ?>
        </div>
    </section>
    <script src="js/Data.js"></script>
    <script src="js/admin1.js"></script>
    <script src="https://kit.fontawesome.com/6254853761.js" crossorigin="anonymous"></script>
</body>

</html>