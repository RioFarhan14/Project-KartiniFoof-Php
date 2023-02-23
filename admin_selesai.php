<?php
$con = mysqli_connect("localhost", "root", "", "phpdasar");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
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
                <li><a href="admin.php">Pesanan Masuk</a></li>
                <li class="checklist">Selesai</li>
            </ul>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>NO.Telepon</th>
                        <th>KOTA</th>
                        <th>Payment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query1 = mysqli_query($con, "Select * from pesanan where info = 'Selesai'");
                    while ($row = mysqli_fetch_array($query1)) {
                    ?>
                        <tr>
                            <td>#P00<?php echo $row['id']; ?></td>
                            <td style="text-transform: uppercase;"><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['tel']; ?></td>
                            <td><?php echo $row['kota']; ?></td>
                            <td><?php echo $row['bayar2']; ?></td>
                            <td class="status">
                                <P><?php echo $row['info']; ?></P>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/6254853761.js" crossorigin="anonymous"></script>
</body>

</html>