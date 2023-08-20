<?php
session_start();
include "conn.php";
$v=$_POST["abd"];
$y=$_POST['imag'];
$x=$_POST['titt'];

 
$xx="INSERT INTO e (con, img, ti) VALUES ('$v','$y','$x')";
$vv=mysqli_query($conn,$xx);
// echo "<img src='$u' >";



 if($vv){
    header('Location: edit_page.html');
 }


?>