<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pandora - Profile</title>
    <?php
      session_start();
      require_once('../php configuration/config.php');
    ?>
</head>
<body>
    <h4><?php echo $_SESSION['user_name']; ?></h4>
</body>
</html>