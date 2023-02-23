<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "phpdasar");
$nama = $_SESSION["nama"];
$id = mysqli_query($con, "SELECT * FROM pesanan where nama = '$nama'");
$select = mysqli_fetch_assoc($id);
$a = $select['info'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/status1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <title>Transactions Detail StoreGG</title>
</head>

<body>
    <!-- Transactions Detail -->
    <section class="transactions-detail overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Details #P00<?php echo $select['id'] ?></h2>
                <div class="details">
                    <div class="main-content main-content-card overflow-auto">
                        <section class="checkout mx-auto">
                            <div class="d-flex flex-row  align-items-center justify-content-between mb-30">
                                <div class="game-checkout d-flex flex-row align-items-center">
                                    <div class="pe-4">
                                        <div class="cropped">
                                            <img src="image/LOGO.png" alt="" width="150px" height="150px">
                                        </div>
                                    </div>
                                </div>
                                <?php if ($a == 'Dalam Proses') {
                                    echo '
                                <div>
                                    <p class="fw-medium text-center label pending m-0 rounded-pill">' . $a . '</p>
                                </div>';
                                } else {
                                    echo '
                                    <div>
                                        <p class="fw-medium text-center label success m-0 rounded-pill">' . $a . '</p>
                                    </div>';
                                } ?>
                            </div>
                            <hr>
                            <div class="purchase pt-30">
                                <h2 class="fw-bold text-xl color-palette-1 mb-20">Detail Pesanan</h2>
                                <p class="text-lg color-palette-1 mb-20">Nama Pelanggan<span class="purchase-details" style=" text-transform: uppercase; "><?php echo $select['nama'] ?></span></p>
                                <p class="text-lg color-palette-1 mb-20">Order ID <span class="purchase-details">#P00<?php echo $select['id'] ?></span></p>
                                <p class="text-lg color-palette-1 mb-20">Total item <span class="purchase-details" id="px4"></span></p>
                                <p class="text-lg color-palette-1 mb-20" id="px1"></p>
                                <p class="text-lg color-palette-1 mb-20" id="px2"></p>
                                <p class="text-lg color-palette-1 mb-20" id="px3"></p>
                            </div>
                            <div class="payment pt-10 pb-10">
                                <h2 class="fw-bold text-xl color-palette-1 mb-20">Informasi Pembayaran</h2>
                                <p class="text-lg color-palette-1 mb-20">Type <span class="payment-details" style=" text-transform: uppercase; "><?php echo $select['bayar'] ?></span>
                                </p>
                                <p class="text-lg color-palette-1 mb-20">Bank <span class="payment-details" style=" text-transform: uppercase; "><?php echo $select['bayar2'] ?></span></p>
                            </div>
                            <?php if ($a == 'Selesai') {
                                echo '<div class="selesai d-md-block d-flex flex-column-reverse w-100">
                                <button class="btn btn-success rounded-pill fw-medium text-white border-0 text-lg" onclick="return_home()">Selesai</button>
                            </div>';
                            } ?>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <script>
        setInterval(function() {
            location.reload();
        }, 4000);
    </script>
    <script src="js/data_status.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>