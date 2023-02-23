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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Book_general.css">
    <style>
        .is1 {
            background-color: #FED049;
            color: #FF6E31;
            padding: 10px;
            height: max-content;
            border-radius: 20px;
            margin-right: 3vw;
        }

        .is2 {
            background-color: #e6aaaa;
            color: red;
            padding: 10px;
            height: max-content;
            border-radius: 20px;
            margin-right: 3vw;
        }

        .is3 {
            background-color: #27AE60;
            color: green;
            padding: 10px;
            height: max-content;
            border-radius: 20px;
            margin-right: 3vw;
        }

        .ban {
            position: absolute;
            top: 45vh;
            left: 25vw;
        }
    </style>
</head>

<body>
    <div class="navbar-stat">
        <h2>Reservasi Form</h2>
    </div>
    <div class="progres">
        <ul id="progressbar">
            <li class="active">TABLE</li>
            <li class="active">Personal Information</li>
            <li class="active">Status</li>
        </ul>
    </div>
    <div onload="table();" id="refresh">
    </div>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/6254853761.js" crossorigin="anonymous"></script>
</body>

</html>