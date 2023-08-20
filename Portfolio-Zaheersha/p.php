<?php
session_start();
include "conn.php";
$v = $_POST["im"];
$y = $_POST['ti'];
$x = $_POST['abbb'];
$w = $_POST['s'];


$xx = "INSERT INTO p (img, ti, con, src) VALUES ('$v', '$y', '$x', '$w')";
$vv = mysqli_query($conn, $xx);

if ($vv) {
  header('Location: edit_page.html');
}
?>
