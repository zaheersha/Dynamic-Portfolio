<?php 
session_start(); 
include "conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: signin.html?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("Location: signin.html?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM ad WHERE username='$username' AND password='$password' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['celebrate'] = true; // Set the session variable for celebration
                echo "<script>window.location.href = 'edit_page.html#celebration';</script>";
                exit();
            } else {
                echo "<script>alert('ERROR: Username or password is incorrect. Please check again.'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('ERROR: Username or password is incorrect. Please check again.'); window.history.back();</script>";
        }
    }
} else {
    header("Location: edit_page.html");
    exit();
}
?>
