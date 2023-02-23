<?php
$con = mysqli_connect("localhost", "root", "", "phpdasar");
// Select rows with a status of "pending" from the table
$sql = "SELECT * FROM meja WHERE info = 'Pending'";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <style>
        .book_in {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .card_book {
            display: flex;
            flex-direction: column;
            padding: 10px;
            border-radius: 18px;
            background-color: #FED049;
            width: max-content;
            max-width: 400px;
        }

        .card_book input {
            border: none;
            background-color: #FED049;
            color: black;
            font-size: 17px;
            font-weight: bold;
        }

        .button-container {
            margin-left: 10vw;
        }

        .button-container a {
            padding-top: 6px;
        }

        .button-27 {
            margin-top: 30px;
            width: 80px;
            background: red;
            border: 1px solid red;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
            box-sizing: border-box;
            color: black;
            cursor: pointer;
            display: inline-block;
            font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 16px;
            height: 30px;
            outline: 0;
            text-align: center;
            text-rendering: geometricprecision;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
        }

        .button-27:hover,
        .button-27:active {
            background-color: initial;
            background-position: 0 0;
            color: black;
        }

        .button-27:active {
            opacity: .5;
        }

        .button-28 {
            margin-top: 30px;
            width: 80px;
            background: green;
            border: 1px solid green;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
            box-sizing: border-box;
            color: black;
            cursor: pointer;
            display: inline-block;
            font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 16px;
            height: 30px;
            outline: 0;
            text-align: center;
            text-rendering: geometricprecision;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
        }

        .button-28:hover,
        .button-28:active {
            background-color: initial;
            background-position: 0 0;
            color: black;
        }

        .button-28:active {
            opacity: .5;
        }
    </style>
</head>

<body>
    <section class="navbar">
        <a href="admin.php" class="navbar-item-none"><i class="fa-solid fa-clipboard-list"></i>Pesanan</a>
        <a href="#" class="navbar-item"><i class="fa-regular fa-calendar"></i>Booking</a>
    </section>
    <section class="main">
        <h1>Pesanan</h1>
        <div class="option">
            <ul>
                <li class="checklist">Reservasi Masuk</li>
                <li><a href="admin_book_done.php">Confirmed</a></li>
            </ul>
        </div>
        <div class="book_in">
            <?php while ($row = mysqli_fetch_assoc($result)) {
                $date = date('d-m-Y', strtotime($row['tanggal']));
                echo '
                 <div class="card_book">
                 <input type="text" name="nama[]" value="' . $row['nama'] . '" disabled>
                 <input type="text" name="tanggal[]" value="' .  $date  . '" disabled>
                 <input type="text" name="meja[]" value="' . $row['meja'] . '" style="text-transform:uppercase;" disabled>
                 <input type="text" name="time[]" value="' . $row['waktu'] . '" disabled>
                 <div class="button-container">
                        <a href="update.php?id=' . $row['id'] . '"class="button-27" >Tolak</a>
                        <a href="confirm.php?id=' . $row['id'] . '"class="button-28" >Confirm</a>
                 </div>
             </div>
            ';
            } ?>

        </div>
    </section>
    <script src="https://kit.fontawesome.com/6254853761.js" crossorigin="anonymous"></script>
</body>

</html>