<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pandora - Movies</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="icon" href="resources/pandora-logo.svg" type="image/icon type">
    <link rel="stylesheet" href="./main css/movies.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="main">
      <div class="grid-container">
        <div class="sidenav">
          <div class="sidenav-content">
            <div class="logo">
              <img src="resources/pandora-logo.svg" alt="">
            </div>
            <hr>
            <div class="sidenav-content-top">
              <div class="active1"></div>
              <div class="active2"></div>
              <div class="active3"></div>
              <div class="active4"></div>
              <div class="home" onclick="location.href='index.php'">
                <img src="resources/home-icon.svg" alt="">Home
              </div>
              <div class="movies" onclick="location.href='movies.php'">
                <img src="resources/movies-icon.svg" alt="">Movies
              </div>
              <div class="series" onclick="location.href='series.php'">
                <img src="resources/series-icon.svg" alt="">Series
              </div>
              <!-- <div class="favourite" onclick="location.href='favourite.html'">
                <img src="resources/heart-icon.svg" alt="">Watch List
              </div> -->
            </div>
            <hr>
            <div class="sidenav-content-middle">
              <div class="sidenav-middle-header">
                <h5>Accounts</h5>
              </div>
              <div class="account-logo">
                <!-- <img src="resources/person.svg" alt=""> -->
              </div>
              <div class="account-text">
                <h2></h2>
              </div>
            </div>
            <hr>
            <div class="sidenav-content-bottom">
              <!-- <div class="logout">
                <img src="resources/logout-icon.svg" alt="">Logout
              </div> -->
            </div>
          </div>
        </div>

        <!-- content1 -->
        <div class="content1">
          <div class=" cards row row-cols-1 row-cols-md-6 g-3">
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/thequintessentialquintupletsmovie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">The Quintessential Quintuplets: The Movie</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/evangelion1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Evangelion: 1.0 You Are (Not) Alone</h5> 
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/evangelion2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Evangelion: 2.0 You Can (Not) Advance</h6>
                  <button class="btn">Add to Watch List</button>         
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/evangelion3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Evangelion: 3.0 You Can (Not) Redo</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/evangelion3+1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Evangelion: 3.0+1.0 Thrice Upon a Time</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/josee.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Josee, the Tiger and the Fish</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/drifting home.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Drifting Home</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/dsmugentrain.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Demon Slayer Movie: Mugen Train</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/saoprogressive.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Sword Art Online: Progressive</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/bcmovie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Black Clover Movie</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="resources/movies and series/saoprogressive2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Sword Art Online: Progressive - Scherzo of Deep Night</h6>
                  <button class="btn">Add to Watch List</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
  </html>