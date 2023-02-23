<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "phpdasar");
if (isset($_POST["submit"])) {
    $_SESSION["table"] = implode(',', $_POST['table']);
    header('location: book.php');
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
        <a href="Home.php"><i class="fa-solid fa-angle-left fa-2xl"></i></a>
        <h2>Reservasi Form</h2>
    </div>
    <div class="progres">
        <ul id="progressbar">
            <li class="active">TABLE</li>
            <li>Personal Information</li>
            <li>Status</li>
        </ul>
    </div>
    <form action="" method="post" class="form-tab">
        <div class="all-container">
            <div class="table">
                <label for="x1">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="a1"></div>
                            <div class="chair" id="a2"></div>
                        </div>
                        <div class="eat" id="a3">X1</div>
                        <div class="chair-2">
                            <div class="chair" id="a4"></div>
                            <div class="chair" id="a5"></div>
                        </div>
                    </div>
                </label>
                <label for="x2">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="b1"></div>
                            <div class="chair" id="b2"></div>
                        </div>
                        <div class="eat" id="b3">X2</div>
                        <div class="chair-2">
                            <div class="chair" id="b4"></div>
                            <div class="chair" id="b5"></div>
                        </div>
                    </div>
                </label>
                <label for="x3">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="c1"></div>
                            <div class="chair" id="c2"></div>
                        </div>
                        <div class="eat" id="c3">X3</div>
                        <div class="chair-2">
                            <div class="chair" id="c4"></div>
                            <div class="chair" id="c5"></div>
                        </div>
                    </div>
                </label>
                <label for="x4">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="d1"></div>
                            <div class="chair" id="d2"></div>
                        </div>
                        <div class="eat" id="d3">X4</div>
                        <div class="chair-2">
                            <div class="chair" id="d4"></div>
                            <div class="chair" id="d5"></div>
                        </div>
                    </div>
                </label>
                <label for="x5">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="e1"></div>
                            <div class="chair" id="e2"></div>
                        </div>
                        <div class="eat" id="e3">X5</div>
                        <div class="chair-2">
                            <div class="chair" id="e4"></div>
                            <div class="chair" id="e5"></div>
                        </div>
                    </div>
                </label>
                <label for="x6">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="f1"></div>
                            <div class="chair" id="f2"></div>
                        </div>
                        <div class="eat" id="f3">X6</div>
                        <div class="chair-2">
                            <div class="chair" id="f4"></div>
                            <div class="chair" id="f5"></div>
                        </div>
                    </div>
                </label>
                <label for="x7">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="g1"></div>
                            <div class="chair" id="g2"></div>
                        </div>
                        <div class="eat" id="g3">X7</div>
                        <div class="chair-2">
                            <div class="chair" id="g4"></div>
                            <div class="chair" id="g5"></div>
                        </div>
                    </div>
                </label>
                <label for="x8">
                    <div class="view">
                        <div class="chair-2">
                            <div class="chair" id="h1"></div>
                            <div class="chair" id="h2"></div>
                        </div>
                        <div class="eat" id="h3">X8</div>
                        <div class="chair-2">
                            <div class="chair" id="h4"></div>
                            <div class="chair" id="h5"></div>
                        </div>
                    </div>
                </label>
                <input type="checkbox" name="table[]" value="x1" id="x1" onclick="hideshow()">
                <input type="checkbox" name="table[]" value="x2" id="x2" onclick="hideshow()">
                <input type="checkbox" name="table[]" value="x3" id="x3" onclick="hideshow()">
                <input type="checkbox" name="table[]" value="x4" id="x4" onclick="hideshow()">
                <input type="checkbox" name="table[]" value="x5" id="x5" onclick="hideshow()">
                <input type="checkbox" name="table[]" value="x6" id="x6" onclick="hideshow()">
                <input type="checkbox" name="table[]" value="x7" id="x7" onclick="hideshow()">
                <input type="checkbox" name="table[]" value="x8" id="x8" onclick="hideshow()">
            </div>
            <div class="casher">K<br>A<br>S<br>I<br>R</div>
        </div>
        <button class="button-24" name="submit" type="submit" id="submit" style="display: none;">Next</button>
    </form>
    <script src="js/Book.js"></script>
    <script src="https://kit.fontawesome.com/6254853761.js" crossorigin="anonymous"></script>
</body>

</html>