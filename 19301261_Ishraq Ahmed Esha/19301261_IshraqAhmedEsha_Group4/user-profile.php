<?php 
   session_start();
   include "db_conn.php";
   ?>
   <!-- if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manchester United</title>
    <style>
      body{
    	 font-family:"Arial", sans-serif;
    	 margin:0px;
		  background-color: white;
      }

      header{
        font-family: "Arial" , sans-serif;
        text-align: center;
        background-image: url("images/bg.jpg");
        color: #b30000;
        padding:250px;
        font-size: 50px;
        }
   
 nav{
  background-color: #b30000;
  overflow: hidden;
  }

  nav ul{
  	list-style: none;
  	padding: 0px;
  	margin: 0px;

  }
  nav ul li{
  	float: left;

  }
  nav ul li a{
  	text-decoration: none;
  	color:white;
  	padding: 10px 25px;
  	display: inline-block;
  	font-size: 18px;

  }
  nav ul li a:hover{
  	background-color: black;
    color: #ffffff;
  }
  nav ul li a.active{
  	background-color: grey;
  }

  .title{
    background-image: url("https://drive.google.com/uc?export=view&id=1iSeV7imNZgWfMXyB58lwARElfbQ44TDV");
    width: 100%;
    padding: 12px 20px;
    margin-top: 40px;
    text-align:center;
    text-transform: Uppercase;
    font-weight: 800;
    font-size: 30px;
  }

  </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<!-- main header -->
<header>
	<h1>MANCHESTER UNITED</h1>
	
</header>
<!-- main nav -->
<nav>
	<ul>
	<li><b><a href="index.php">HOME</a></b></li>
	<li><b><a href="all_players.php">PLAYERS</a></b></li>
	<li><b><a href="S.M_mechaniclogin.php">CLUB STAFF</a></b></li>
	<li><b><a href="S.M_userlogin.php">BOARD MEMBERS</a></b></li>
	<li><b><a href="S.M_adminlogin.php">CLUB SHOP</a></b></li>
</ul>
</nav>

 <section id="section1">
      <div class="title" style="color:white;">MY UNITED PROFILE</div>
      <br style="line-height: 100px;">
      <div class="container d-flex justify-content-center"  style="min-height: 100vh;">
        <div class="card" style="width: 18rem;">
          <img src="images/user.png" class="card-img-top" alt="user image">
          <div class="card-body text-center">
            <h4 class="card-title" style="font-style: bold;">
              <?=$_SESSION['name']?>
            </h4>
            <h5>Email Address: <?=$_SESSION['email_address']?></h5>
            <h5>User ID: <?=$_SESSION['user_id']?></h5>
            <h5>Phone Number: <?=$_SESSION['phone_number']?></h5>
            <h5>Region: <?=$_SESSION['region']?></h5>
            <h5>Date Of Birth: <?=$_SESSION['date_of_birth']?></h5><br style="line-height: 50px;">
            <a href="index.php" class="btn btn-danger" style="font-style: bold">LOGOUT</a>
          </div>
        </div>
      </div>

      <!-- main footer -->
</section><br style="line-height: 100px;">
<footer>
<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
<p style="color:red" align="center";>All rights are reserved.</p>
<small style="color:black">Developed & maintained by Mustakin, Wakil, Sababa, Ishraq, Bidhan</small>
</footer>


  </body>
</html>




