<?php
session_start();
include "conn.php";
$v = $_POST["abb"];
$y = $_POST['ima'];
$x = $_POST['tit'];

$xx = "INSERT INTO c (con, img, ti) VALUES ('$v', '$y', '$x')";
$vv = mysqli_query($conn, $xx);

if ($vv) {
  header('Location: edit_page.html');
}
?>
