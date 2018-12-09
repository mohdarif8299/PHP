<?php
 $server_name = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'mydb';
 $connection = new mysqli($server_name,$username,$password,$dbname);
 if($connection) {
   echo 'connected successfully';
 }
 $stmt = $connection->prepare('INSERT INTO users (NAME,EMAIL,USERNAME,PASSWORD) VALUES (?,?,?,?)');
 $user_name = $_POST['name'];
 $user_email = $_POST['email'];
 $user_username = $_POST['uname'];
 $user_pass = $_POST['password'];
 $stmt->bind_param('ssss',$user_name,$user_email,$user_username,$user_pass);
 if($stmt->execute()==true) {
   echo 'Registered Successfully Login to Continue';
 }
 else {
   echo mysql_error();
 }
?>
