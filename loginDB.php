<?php
$server_name = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';
$user_uname = $_POST['uname'];
$user_pass = $_POST['password'];
$connection = new mysqli($server_name,$username,$password,$dbname);
if ($connection) {
  echo 'Connected Successfully';
 }
 $stmt = $connection->prepare("SELECT USERNAME,PASSWORD FROM users WHERE USERNAME = ? AND PASSWORD = ?");
 $stmt->bind_param('ss',$user_uname,$user_pass);
 if($stmt->execute()==true) {
   echo 'login successfully';
 }
 else
 echo 'Invalid username or Password';
?>
