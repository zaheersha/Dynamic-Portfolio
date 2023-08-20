<?php
session_start();
include "conn.php";
$v=$_POST["ab"];

 foreach($v as $u){
$x="INSERT INTO r VALUES ('$u')";
$vv=mysqli_query($conn,$x);
// echo "<img src='$u' >";
}


 if($vv){
    header('Location: edit_page.html');
 }


?>