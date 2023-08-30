<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jacqueline Njoki B14, and Bootstrap contributors">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/style.css"rel="stylesheet"/>
    <title>EVENTS WEBSITE</title>
  </head>
  <body class="container">
    <!--Start  Navigation bar-->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: rgb(1, 1, 1);font-size: xx-large; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">FUNKY FEST</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                  </li>
              </ul>
             
            </div>
          </div>
        </div>
      </nav>
    <!--End Nav bar-->

    <!---->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="events2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="background.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="events2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!---->  

    <div class="card">
        <div class="card-body">
            <p>Funky Fest was started in the year 2023 by the founder Jacqueline Njoki who is the CEO of the company.
                She has done tremendous deeds in her events company ranging from big events to small events. 
                She has gaine access to the global market ranking her one of the best in event organising be it a school 
                function(from primary school all the way up) and even a family or friends function.
              </p>
        </div>
      </div> </br>
      <h3> Upcoming Events</h3>
      <div class="card" style="width: 18rem;">
        <img src="event.jpeg" class="card-img-top" alt="img event">
        <div class="card-body">
          <p class="card-text">WHAT MORE WOULD YOU ASK FOR?</p>
          <a href="#">See More</a>
        </div>
      </div> </br>
    
      <div style="text-align: center; color: rgb(1, 1, 1);font-size: large; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
        <br>You can never go wrong with Funky Fest</br>
      All rights reserved. Copyright &copy </div>

   <!--START FOOTER-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!--END FOOTER-->
  </body>
</html>