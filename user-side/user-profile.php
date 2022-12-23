<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pandora - Profile</title>
    <link rel="stylesheet" href="./css-user/user-profile.css">
    <?php
      session_start();
      require_once('../php configuration/config.php');
    ?>
</head>
<body>
    <h4 class="userid"><?php echo $_SESSION['user_id']; ?></h4>
    <h4 class="username">Logged in as : <?php echo $_SESSION['user_name']; ?></h4>
    
    <form action="../php configuration/edit_profile.php" method="POST">
      <div class="mb-3">
        Input New Username :
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="username" id="username">
      </div>
      <!-- <div class="mb-3">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" id="password" name="password" required>
      </div> -->
      <div class="container text-center">
        <div class="row">
          <div class="col d-flex flex-row-reverse">
            <button type="submit" class="btn btn-custom" name="submit" value="login">Change</button>
          </div>
        </div>
    </form>

</body>
</html>