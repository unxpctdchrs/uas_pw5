<?php

  require_once '../php configuration/config.php';

  $sql = "SELECT * FROM product";
  $all_product = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css-user/admin-page-list.css">
    <title>Pandora - Admin - List</title>
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
       <?php
          while($row = mysqli_fetch_assoc($all_product)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["product_image"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="product_name"><?php echo $row["product_name"];  ?></p>
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add to Watch List</button>
       </div>
       <?php
          }
        ?>
   </main>

   <script>
    var product_id = document.getElementsByClassName("add");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                    //    document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","../php configuration/config.php?id="+id,true);
               xml.send();
            
           })
       }
   </script>
   <!-- <script src="./admin-page-home.js"></script> -->
</body>
</html>