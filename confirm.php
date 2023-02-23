<?php
require 'functions.php';
$id = $_GET["id"];
if (confirm($id) > 0) {
    echo "
    <script> document.location.href = 'admin_book.php';</script>";
}
