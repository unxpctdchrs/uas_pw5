<?php
    include('config.php');

    error_reporting(0);
    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: ./user-side/index-user.php");
    }
     
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
     
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connection, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: ./user-side/index-user.php");
        } else {
            echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
    
    // if(isset($_GET['username']) && isset($_GET['password'])){
    //     $username = $_GET['username'];
    //     $password = $_GET['password'];
        
    //     $query = mysqli_query($connection,"SELECT username, password FROM users where username = '$username' and password = '$password'");

    //     if(mysqli_num_rows($query) > 0){
            
    //         echo "<script>
    
    //                 console.log('username found ')

    //                 </script>";
    //         echo "<script>window.location = '../user-side/index-user.php'</script>";

            
    //     }
    //     else{
    //         echo "<script>
    
    //         console.log('username not found ')

    //         </script>";

    //         echo "<script>window.location = '../register.php';
    //         alert('username not found');
    //             </script>";

    //     }
    // }

    // echo mysqli_connect_error();
    // mysqli_close($connection);

?>