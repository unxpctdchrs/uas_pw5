<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($connection, $_POST['username']);
   // $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   // $cpass = md5($_POST['cpassword']);
   // $user_type = $_POST['user_type'];

   // $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
   $select = " SELECT * FROM users WHERE username = '$name' && password = '$pass' ";

   $result = mysqli_query($connection, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['username'];
         header('location: ../user-side/admin-page-home.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['username'];
         header('location: ../user-side/index-user.php');

      }  
   }
   else{
       echo "<script type='text/javascript'>window.location = '../login.php'; 
       alert('Username or password do not match');</script>";
   }

};
?>