<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pandora - Admin</title>
   <link rel="stylesheet" href="./css-user/admin-page-home.css">
   <?php
      session_start();
      require_once('../php configuration/config.php');
    ?>
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
   
<div class="container">
   <div class="content">
      <h3>Welcome back, <span>Admin</span></h3>
      <h1>Logged in as : <?php echo $_SESSION['admin_name'] ?></h1>
   </div>

</div>

</body>
</html>