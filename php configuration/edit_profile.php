<?php

session_start();
@include 'config.php';

if(isset($_POST['submit']))
{
    $id = $_SESSION['user_id'];
    $username = $_POST['username'];
    // $password = $_POST['password'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($connection,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
       $update = "update users set username='$username' where id='$id'";
       $sql2=mysqli_query($connection,$update);
    if($sql2)
       { 
           /*Successful*/
           header('location:../user-side/index-user.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:../user-side/user-profile.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:../user-side/user-profile.php');
    }
}

else
{
    echo "<script>window.history.back()</script>";
}

?>