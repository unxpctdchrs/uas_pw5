<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pandora - Register</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="icon" href="resources/pandora-logo.svg" type="image/icon type">
        <link rel="stylesheet" href="./main css/loginandregister.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="content">
            <div class="logo" onclick="location.href='index.php'">
                <img class="jgndiklik" src="resources/pandora-logo.svg" alt="">
            </div>
            <!-- cara cepat buat kasih jarak -->
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="signinforms">
                <p>Register</p>
                <form method="get" class="form" action="./php configuration/signup-process.php">
                    <div class="mb-3" id="username">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="username" id="name">
                    </div>
                    <div class="mb-3" id="password">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="create-password" id="name" required>
                    </div>
                    <div class="container text-center">
                      <div class="row">
                        <div class="col d-flex flex-row-reverse">
                          <button type="submit" class="btn btn-custom" name="submit">Register</button>
                        </div>
                      </div>
                    </div>
                  </form>
            </div>
            <div class="plgbawah">
              <p>Already have an account?
                <a href="login.php">Click me to login</a>
              </p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>