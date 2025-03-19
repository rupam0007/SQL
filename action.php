<!-- <?php 
echo"<pre>";
print_r($_GET);
echo"</pre>";
?> -->

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Name</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-800 via-indigo-900 to-black text-white flex justify-center items-center min-h-screen">
    <div class="text-center p-8 rounded-xl bg-gray-800 shadow-2xl w-96 max-w-md">
        <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-500 mb-6">
            <?php echo $_GET['Name']; ?>
        </h1>
        <p class="text-lg text-gray-300">
          <?php echo $_GET['Name']; ?>
        </p>
        <?php 
        echo $_REQUEST["password"];
          ?>
    </div>
</body>
</html> -->





<?php
include('db_connection.php');
$user_name=$_POST['Name'];
$user_email=$_POST['email'];
$user_phone=$_POST['mobile'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$conferm_password=$_POST['conferm_password'];
// $l_user=$_POST['user'];
// $l_mobile=$_POST['mn'];
// $l_password=$_POST['pass'];


if ($password==$conferm_password) {
    $sql2="SELECT * FROM TASK1 WHERE EMAIL = '".$user_email."' OR MOBILE ='".$user_phone."'";

$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0){
    echo "<h1>User alredy exsist....</h1>";
}
else
{

	$sql="INSERT INTO task1(name,email,mobile,password) values ('{$user_name}','".$user_email."','$user_phone','$password')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		echo "<script type='text/javascript'>alert('Registration successful.'); window.location.href='new.php';</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Faild to Register.Please try again! '); window.location.href='new.php';</script>";
	}
}
}
else{
echo "<script type='text/javascript'>alert('Password & C_password Not Match.'); window.location.href='new.php';</script>";
}

 ?>
