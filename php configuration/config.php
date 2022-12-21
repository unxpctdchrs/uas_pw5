<?php
$server_name="localhost";
$username="root";
$password="";
$db_name="pandoradb";

//create connection to db
$connection= mysqli_connect($server_name,$username,$password,$db_name);

//check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "<script>
    
    console.log('succesfully connected to server ')

    </script>";


if(isset($_GET["id"])){
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM favourites WHERE product_id = $product_id";
    $result = $connection->query($sql);
    $total_cart = "SELECT * FROM favourites";
    $total_cart_result = $connection->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    if(mysqli_num_rows($result) > 0){
        $in_cart = "already In cart";

        echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
    }else{
        $insert = "INSERT INTO favourites(product_id) VALUES($product_id)";
        if($connection->query($insert) === true){
            $in_cart = "added into cart";
            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }else{
            echo "<script>alert(It doesn't insert)</script>";
        }
    }
}

if(isset($_GET["cart_id"])){
    $product_id = $_GET["cart_id"];
    $sql = "DELETE FROM favourites WHERE product_id=".$product_id;

    if($connection->query($sql) === TRUE){
        echo "Removed from cart";
    }
}

?>