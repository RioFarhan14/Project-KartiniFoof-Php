<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "phpdasar");
$table = $_SESSION["table"];
$nama =  $_SESSION["nama"];
$date = date('d-m-Y', strtotime($_SESSION["tanggal"]));
$tanggal = date('Y-m-d', strtotime($date));
$id = mysqli_query($con, "SELECT * FROM meja where nama = '$nama' AND tanggal = '$tanggal'");
$select = mysqli_fetch_assoc($id);
$a = $select['nama'];
$b = $select['tel'];
$c = $select['waktu'];
$d = $select['meja'];
$e = $select['info'];
?>
<div class="status-book">
    <div class="status-info">
        <div>
            <h3>Nama</h3>
            <h3 style="text-transform: uppercase;"><?php echo $a ?></h3>
        </div>
        <div>
            <h3>Tanggal</h3>
            <h3><?php echo $date ?></h3>
        </div>
        <div>
            <h3>Kursi</h3>
            <h3 style="text-transform: uppercase;"><?php echo $d ?></h3>
        </div>
        <div>
            <h3>Jam</h3>
            <h3><?php echo $c ?></h3>
        </div>
        <?php if ($e == 'Berhasil') {
            echo '  
                <a href="Home.php" class="button-24 ban">Selesai</a>
            ';
        } else if ($e == 'Gagal') {
            echo '
                <a href="Book_table.php" class="button-26 ban">Kembali</a>';
        } ?>
    </div>
    <?php if ($e == 'Pending') {
        echo '
        <div class="is1">
            <h3>' . $e . '</h3>
        </div>';
    } else if ($e == 'Gagal') {
        echo '
        <div class="is2">
            <h3>' . $e . '</h3>
        </div>';
    } else if ($e == 'Berhasil') {
        echo '<div class="is3">
            <h3>' . $e . '</h3>
        </div>';
    }
    ?>
</div>