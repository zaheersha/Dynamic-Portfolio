<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "portfolio");
$v=$_POST["re"];

 foreach($v as $u){
$x="INSERT INTO resume VALUES ('$u')";
$vv=mysqli_query($conn,$x);
echo "<img src='$u' >";
}


 if($vv){
    header('Location: edit_page.html');
 }


?>



