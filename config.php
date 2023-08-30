  <?php
  $host ="localhost";
  $dbuser ="root";
  $dbpass ="";
  $db = "funky_fest";
  $conn = mysqli_connect($host,$dbuser,$dbpass,$db);

 if(!mysqli_connect($host,$dbuser,$dbpass))
 {
	 
	 exit("Error: Database connection not established!!");
 }
 