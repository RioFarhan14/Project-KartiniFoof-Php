<?php
require 'functions.php';
$id = $_GET["id"];
if (hapus($id) > 0) {
    echo "
    <script> document.location.href = 'admin_book.php';</script>";
}
