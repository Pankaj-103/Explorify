


<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corinthia&family=Fuzzy+Bubbles&display=swap" rel="stylesheet">

<title>Explorify</title>

<style>
body{
    background-color: #FAD0C9FF;
    background-image: url("./admin/images/image1.jpg");
    background-size:cover;
}

#search{
    width: 500px;
    margin: 150px auto;
    
}

#caption{
  margin-top: 20px;
  text-align: center;
  font-family: 'Corinthia', cursive;
font-family: 'Fuzzy Bubbles', cursive;
color: brown;
}



@media only screen and (max-width:900px) {
   body{
     background-image: url("./admin/images/image3.jpg");
     background-size: cover;
     
   }
   #search{
    width: 200px;
    margin: 150px auto;
    
  }
 
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #101820FF;">
        <a class="navbar-brand" href="#" style="font-family: 'Fuzzy Bubbles', cursive;color: #F2AA4CFF;">Explorify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" >
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="discover.php">Discover</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.php">Contact us</a>
            </li>
          </ul>
          <div class=" navbar-nav ml-auto ">
            
          
     <?php  if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
           $name=$_SESSION['username'];
           echo "<a class='nav-link' href='#' style='color:magenta;'>Welcome $name</a>";
           
            echo "<a class='nav-link' href='logout.php'>Log out</a>";

     }
             else{
             echo "<a class='nav-link' href='login.php'>Log in</a>";
             }
             ?>
        </div>

      </nav>