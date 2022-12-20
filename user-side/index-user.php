<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pandora</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="icon" href="../resources/pandora-logo.svg" type="image/icon type">
    <link rel="stylesheet" href="./css-user/index-user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php
      session_start();
      require_once('../php configuration/config.php');
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
                <h4><?php echo $_SESSION['user_name']; ?></h4>
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

        <!-- header / navbar -->
        <div class="header">
          <div class="searchbar">
            <form action="">
              <input type="text" name="query" placeholder="Search anime">
              <button type="submit"></button>
            </form>
          </div>
          
        </div>

        <!-- content1 -->
        <div class="content1">
          <div class="carouselxx">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../resources/crsl/spyxfamilyp2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Spy x Family, Part 2</h5>
                    <p>The master spy codenamed has spent his days on undercover missions, all for the dream of a better world. But one day, he receives a particularly difficult new order from command. For his mission, he must form a temporary family and start a new life?! A Spy/Action/Comedy about a one-of-a-kind family!</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../resources/crsl/step.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>My Stepsister is My Ex-Girlfriend</h5>
                    <p>Listless geek Mizuto Irido and introverted nerd Yume Ayai seemed like a match made in heaven, connected by their mutual love for literature. Unfortunately, their differences gradually grew, and they separated just after their middle school graduation. But, as if ...</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../resources/crsl/tqq.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>The Quintessential Quintuplets: The Movie</h5>
                    <p>Teenage Tutor Fuutaro Uesugi has to finally choose between the 5 Nakano Sisters, who all have feelings for him, at the School's Upcoming Cultural Festival; the event that will lead to his Wedding to one of them in a Flash-Forward.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../resources/crsl/chainsaw-man.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Chainsaw Man</h5>
                    <p>Denji is robbed of a normal teenage life, left with nothing but his deadbeat father's overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza's pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji's brutal, untimely death...</p>
                  </div>
                </div>
              </div>
              <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button> -->
            </div>          
          </div>
        </div>

        <!-- content 2 -->
        <div class="content2">
          <div class="content2-top container">
            <div class="row">
              <div class="col">
                <h3>Trending</h3>
              </div>
              <div class="col seeall">
                <a href="./workinprogress-user.php">View more</a>
              </div>
            </div>
          </div>
          <div class="cards row row-cols-1 row-cols-md-6 g-5">
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/chainsawman.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/spyxfamily2.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/theeminenceinshadow.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/beasttamer.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/thedevilisaparttimer2.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../resources/movies and series/morethanamarriedcouplebutnotlovers.jpg" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
        </div>

        <div class="clear"></div>

        <!-- content3 -->
        <div class="content3">
          <!-- <div class="content3-top container">
            <div class="row">
              <div class="col">
                <h2>Your Watchlist</h2>
              </div>
              <div class="col seeall">
                <a href="">View more</a>
              </div>
            </div>
          </div>
          <div class="cards row row-cols-1 row-cols-md-6 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies/avatar.webp" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies/coco.webp" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies/turningred.webp" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies/avengersendgame.webp" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies/beautyandthebeast.webp" class="card-img-top" alt="...">
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>