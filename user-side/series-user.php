<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pandora - Series</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="icon" href="resources/pandora-logo.svg" type="image/icon type">
    <link rel="stylesheet" href="./css-user/series-user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php
      session_start();
      require_once('../php configuration/config.php')
    ?>  
  </head>
  <body>
    <div class="main">
      <div class="grid-container">
        <div class="sidenav">
          <div class="sidenav-content">
            <div class="logo">
              <img src="../resources/pandora-logo.svg" alt="">
            </div>
            <hr>
            <div class="sidenav-content-top">
              <div class="active1"></div>
              <div class="active2"></div>
              <div class="active3"></div>
              <div class="active4"></div>
              <div class="home" onclick="location.href='./index-user.php'">
                <img src="../resources/home-icon.svg" alt="">Home
              </div>
              <div class="movies" onclick="location.href='./movies-user.php'">
                <img src="../resources/movies-icon.svg" alt="">Movies
              </div>
              <div class="series" onclick="location.href='./series-user.php'">
                <img src="../resources/series-icon.svg" alt="">Series
              </div>
              <div class="favourite" onclick="location.href='./favourite-user.php'">
                <img src="../resources/heart-icon.svg" alt="">Watch List
              </div>
            </div>
            <hr>
            <div class="sidenav-content-middle">
              <div class="sidenav-middle-header">
                <h5>Accounts</h5>
              </div>
              <div class="account-logo">
                <img src="../resources/person.svg" alt="">
                <h4><?php echo $_SESSION['username']; ?></h4>
              </div>
            </div>
            <hr>
            <div class="sidenav-content-bottom">
                <div class="logout">
                  <img src="../resources/logout-icon.svg" alt="">
                  <form action="../php configuration/logout.php" method="get">
                    <input type="submit" value="Log Out">
                  </form>
                </div>
            </div>
          </div>
        </div>

        <!-- content1 -->
        <div class="content1">
          <div class=" cards row row-cols-1 row-cols-md-6 g-3">
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/tonikawaotmfu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Tonikawa: Over The Moon For You</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/spyxfamily2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Spy x Family</h5> 
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/kaguyasama1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Kaguya-Sama: Love is war</h6>
                  <button class="btn">Add to Watch List</button>         
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/beasttamer.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Beast Tamer</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/loveflops.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Love Flops</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/sao.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Sword Art Online</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/inspectre.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">In/Spectre</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/thequintessentialquintuplets1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">The Quintessential Quintuplets</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/thequintessentialquintuplets2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">The Quintessential Quintuplets 2</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/darlinginthefranxx.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">DARLING in the FRANXX</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/bunnygirlsenpai.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Rascal Does Not Dream of Bunny Girl Senpai</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/chainsawman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Chainsaw Man</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
  </html>