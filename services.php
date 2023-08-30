<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jacqueline Njoki, and Bootstrap contributors">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EVENTS WEBSITE</title>
  </head>
  <body>
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

    <div class="container">
      </br></br></br>
      <h1>Funky Fest is definately the company to call incase you need an event. Let me tell you why:</h1>
      <br></br>
      <div class="row">
        <div class="col">
          <h3> Offers Trampolines for kids</h3>
      <div class="card" style="width: 18rem;">
        <img src="event.jpeg" class="card-img-top" alt="img event">
        <div class="card-body">
          <p class="card-text">WHAT MORE WOULD YOU ASK FOR?</p>
          <a href="#">See More</a>
        </div>
      </div>
        </div>
        <div class="col">
          <h3> Offers Music fo all ages (thus nobody has to ever get bored)</h3>
      <div class="card" style="width: 18rem;">
        <img src="amaizing.jpg" class="card-img-top" alt="img event">
        <div class="card-body">
          <p class="card-text">WHAT MORE WOULD YOU ASK FOR?</p>
          <a href="#">See More</a>
        </div>
      </div>
        </div>
    
      </div>
    </div>


      <div style="text-align: center; color: rgb(1, 1, 1);font-size: large; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
        <br>You can never go wrong with Funky Fest</br>
      All rights reserved. Copyright &copy </div>

   <!--START FOOTER-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!--END FOOTER-->
  </body>
</html>