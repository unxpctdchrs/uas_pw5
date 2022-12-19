<?php
include('./config.php');

error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: ../login.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    if ($password) {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($connection, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username,  password)
                    VALUES ('$username','$password')";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                // echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}



// function isExist($user,$connection){
   
//     $query = mysqli_query($connection,"
//     SELECT username FROM users WHERE username = '$user'; ");

//     if(mysqli_num_rows($query)>0){

        

//         echo "<script>window.location = '../register.php';alert('user already exist');</script>";

//     }
// }

// function checkIfMatch($password,$confirm){
//     if($password != $confirm){

        
//         echo "
//         <script>alert('password not match, try again')</script>
//         ";
//         echo "<script>window.location = '../register.php';</script>";


//         if(isset($_GET['create-password']) && $_GET['confirm-password']){
//             $_GET['create-password']='';
//             $_GET['confirm-password']='';
//         }
//         return false;
//     }
//     else{
//         return true;
//     }

// }

// if(isset($_GET['username']) && isset($_GET['create-password'])){
//     $username = $_GET['username'];
//     $password = $_GET['create-password'];
//     // $confirm_password = $_GET['confirm-password'];

//     isExist($username,$connection);

//     $query = mysqli_query($connection,"
        
//         INSERT INTO users(username,password)
//         VALUES (
//                 '$username',
//                 '$password'
//                );
//         ");

//         // echo "
//         // <script>alert('account created')</script>
//         // ";
//         echo "<script>window.location = '../login.php';</script>";

//     // if(checkIfMatch($password,$confirm_password) == true){
        

//     // }
// }
?>