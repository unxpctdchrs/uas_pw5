<?php

require_once '../php configuration/config.php';

$sql_cart = "SELECT * FROM favourites";
$all_cart = $connection->query($sql_cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css-user/admin-page-favourites.css">
    <title>Pandora - Admin - Watch List</title>
</head>
<body>
    <div class="nav">
        <div class="Home" onclick="location.href='admin-page-home.php'">Home</div>
        <div class="list" onclick="location.href='admin-page-list.php'">List</div>
        <div class="upload" onclick="location.href='admin-page-upload.php'">Upload</div>
        <div class="upload" onclick="location.href='admin-page-favourites.php'">Watch List</div>
        <form action="../php configuration/logout.php" method="get">
            <input type="submit" value="Log Out">
        </form>
    </div>

    <main>
        <hr>
        <h1><?php echo mysqli_num_rows($all_cart); ?> Items On Watch List</h1>
        <hr>
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
              $sql = "SELECT * FROM product WHERE product_id=".$row_cart["product_id"];
              $all_product = $connection->query($sql);
              while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
            <div class="images">
                <img src="<?php echo $row["product_image"]; ?>" alt="">
            </div>

            <div class="caption">
                <p class="product_name"><?php echo $row["product_name"]; ?></p>
                <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove from Watch List</button>
            </div>
        </div>
        <?php

          }
        }
       ?>
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","../php configuration/config.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>
</body>
</html>