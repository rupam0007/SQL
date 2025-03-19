 <?php
include('db_connection.php');
$l_user=$_POST['user'];
$l_mobile=$_POST['mn'];
$l_password=$_POST['pass'];
$sql="SELECT * FROM TASK1 WHERE EMAIL = '".$l_user."' AND MOBILE ='".$l_mobile."' AND PASSWORD ='".$l_password."'";
$result2=mysqli_query($conn,$sql);
if(mysqli_num_rows($result2)>0){
$DATA = mysqli_fetch_assoc($result2);
   echo "<script type='text/javascript'>alert('Login successful.'); window.location.href='new.php';</script>";
session_start();
$_SESSION['NAME']=$DATA['NAME'];
   header("locaton: dashbord.php");

}
else{
    echo "<script type='text/javascript'>alert('Login  unsuccessful.'); window.location.href='login.php';</script>";
}

?>

<?php 
include('db_connection.php');
global $conn;
$username = $_POST['user'];
$f_password = $_POST['password'];

$emailCheck = "SELECT * FROM `student` WHERE `email`= '{$username}' OR `phone` = '{$username}'";
$emailResult = mysqli_query($conn, $emailCheck);

if(!(mysqli_num_rows($emailResult))){
    echo "<script type='text/javascript'>alert('username or phone no does not exits');
            window.location.href='login.php';</script>";
}
else{
    $row = mysqli_fetch_assoc($emailResult);
    if($row['password'] == $f_password){
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['login_id'] = $row['id'];
        header("location: dashboard.php");
    }
    else{
        echo "<script type='text/javascript'>alert('password is incorrect');
            window.location.href='login.php';</script>";
    }
}
