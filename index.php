<?php
session_start();
include "config.php";
	
	if(isset($_POST["log"]))
	{
		$email = $_POST["email"];
		$pass = md5($_POST["pass"]);
		
		$query = mysqli_query($conn,"SELECT * FROM members WHERE email='$email' and password='$pass'");
		
		$result = mysqli_num_rows($query);
		if($result>0)
		{
			$row = mysqli_fetch_assoc($query);
	
			$_SESSION["EMAIL"] = $row["email"];
		
			
			echo "<script>alert('Login Successful!!');location.href='home.php';</script>";
		}
		else
		{
			echo "<script>alert('Sorry Login failed!!');</script>";
		}
		
		
	}

?>
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
  <body style="background-repeat: no-repeat; background-image: url(event.jpeg);background-attachment: fixed;">
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

<div class="container" style="background-color: beige;">

    <form action="index.php" method="post" enctype="multipart/form-data">
        <h3 style="text-align: center;">Login</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label></br>
          <a href="#">forgot password</a>       </br> <a href="register.php">Don't have an account?</a>
          
        </div>
        <button type="submit" name="log" class="btn btn-primary">Submit</button>
      </form>


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