<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($connection, $_POST['username']);
   // $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   // $cpass = md5($_POST['cpassword']);
//    $user_type = $_POST['user_type'];
   $user_type = 'user';

   // $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
   $select = " SELECT * FROM users WHERE username = '$name' && password = '$pass' ";

   $result = mysqli_query($connection, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{
      
      // $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
      $insert = "INSERT INTO users(username, password, user_type) VALUES('$name','$pass','$user_type')";
      mysqli_query($connection, $insert);
      header('location: ../login.php');
   }

};
