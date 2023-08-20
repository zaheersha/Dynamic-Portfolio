<?php
session_start();
include "conn.php";
$v = $_POST["imaa"];
$y = $_POST['titt'];
$x = $_POST['abstract'];


$xx = "INSERT INTO a (img, ti, con) VALUES ('$v', '$y', '$x')";
$vv = mysqli_query($conn, $xx);

if ($vv) {
  header('Location: edit_page.html');
}
?>
