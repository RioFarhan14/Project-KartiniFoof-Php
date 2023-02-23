<?php
$con = mysqli_connect("localhost", "root", "", "phpdasar");
function hapus($id)
{
    global $con;
    $update = "UPDATE meja SET info='Gagal' where id= $id";
    mysqli_query($con, $update);
    return mysqli_affected_rows($con);
}
function confirm($id)
{
    global $con;
    $acc = "UPDATE meja SET info='Berhasil' where id= $id";
    mysqli_query($con, $acc);
    return mysqli_affected_rows($con);
}
