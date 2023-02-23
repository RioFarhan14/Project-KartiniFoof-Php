<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "phpdasar");
$table = $_SESSION["table"];
if (isset($_POST["submit"])) {
    $nama = $_POST["name"];
    $tel = $_POST["tel"];
    $date = date('Y-m-d', strtotime($_POST['datefield']));
    $time = $_POST["time"];
    $_SESSION["nama"] = $_POST["name"];
    $_SESSION["tanggal"] = $_POST["datefield"];
    $insert = "INSERT INTO meja VALUES ( '','$nama',$tel,'$date','$time','$table','Pending')";
    mysqli_query($con, $insert);
    header('location: book_status.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Book_general.css">
</head>

<body>
    <div class="navbar">
        <a href="Book_table.php"><i class="fa-solid fa-angle-left fa-2xl"></i></a>
        <h2>Reservasi Form</h2>
    </div>
    <div class="progres">
        <ul id="progressbar">
            <li class="active">TABLE</li>
            <li class="active">Personal Information</li>
            <li>Status</li>
        </ul>
    </div>
    <div class="form">
        <h2>Personal information :</h2>
        <form action="" method="post">
            <label for="name">Nama <input type="text" name="name" id="name" autocomplete="off" onkeydown="return /[a-z]/i.test(event.key)"></label>
            <label for="tel">No.Telepon <input type="tel" name="tel" id="tel" autocomplete="off" maxlength="13" oninput="this.value = this.value.replace(/[^0-9]/g,'')"></label>
            <label for="datefield">Tanggal <input id="datefield" type='date' name="datefield" min='' max=''></input></label>
            <label for="time">Jam
                <select id="time" name="time">
                    <option value="9:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                </select>
            </label>
            <button class="button-24" name="submit" type="submit">Confirm</button>
        </form>
    </div>
    <script>
        let today = new Date();
        let dd = today.getDate();
        let mm = today.getMonth() + 1;
        let yyyy = today.getFullYear();
        let dd7 = today.getDate() + 7;
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        let today1 = yyyy + '-' + mm + '-' + dd7;
        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datefield").setAttribute("max", today1);
        document.getElementById("datefield").setAttribute("min", today);
    </script>
    <script src="https://kit.fontawesome.com/6254853761.js" crossorigin="anonymous"></script>
</body>

</html>