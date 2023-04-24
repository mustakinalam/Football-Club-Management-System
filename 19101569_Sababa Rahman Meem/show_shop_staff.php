<?php
	include 'DBConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MANCHESTER UNITED</title>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
	<li><b><a href="show_players.php">PLAYERS</a></b></li>
	<li><b><a href="show_club_staff.php">CLUB STAFF</a></b></li>
	<li><b><a href="show_board_members.php">BOARD MEMBERS</a></b></li>
	<li><b><a href="show_club_shop.php">CLUB SHOP</a></b></li>

</ul>
</nav>

<!-- contents -->

<section id = "section1">
        <div class="title" style="color:white";> Shop Staff </div>
			<form action = "search_shop_staff.php" method="post">
				<input type="text" name="search" placeHolder="Search Shop Staff">
				<button type="submit" name="submit-search">Search</button>
			</form>	
			<div style="margin-left:10%;margin-right:10%;margin-top:50px;margin-bottom:50px;text-align:center;background:#b30000;">
				<div class="row" style="padding:5px;"> 
				<div class="col-md-2" style="color:white";><b> Staff ID </b></div>
				<div class="col-md-2" style="color:white";><b> Name </b></div>
				<div class="col-md-3" style="color:white";><b> Email </b></div>
				<div class="col-md-2" style="color:white";><b> Salary(£) </b></div>
				<div class="col-md-2" style="color:white";><b> Supervisor </b></div>
				</div>
		  <!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			  <div class="data-container">
				<?php
				  require_once("DBconnect.php");
				  $sql = "SELECT * FROM shop_staff";
				  $result = mysqli_query($conn,$sql);
				  $queryResult = mysqli_num_rows($result);
				  if($queryResult > 0){
					while($row = mysqli_fetch_array($result)){
						?>
						<div class="row" style="padding:5px;">
							<div class="col-md-2" style="color:white";> <?php echo $row[0]; ?> </div>  
							<div class="col-md-2" style="color:white";> <?php echo $row[1]; ?> </div>
							<div class="col-md-3" style="color:white";> <?php echo $row[2]; ?> </div>  
							<div class="col-md-2" style="color:white";> <?php echo $row[3]; ?> </div>
							<div class="col-md-2" style="color:white";> <?php echo $row[4]; ?> </div>
						</div>
						<?php
					}
				  }
				?>
			  </div>
			</div>
			<div class="title" style="color:white;"> Sort Shop Staff by Salary </div>
			<form action = "sort_shop_staff_asc.php" method="post">
				<button type="submit" name="submit-search" style="margin-left:40%;margin-right:40%;margin-top:50px;width: 20%;font-weight: 700;">Ascending</button>
			</form>	
			<form action = "sort_shop_staff_desc.php" method="post">
				<button type="submit" name="submit-search" style="margin-left:40%;margin-right:40%;margin-bottom:50px;width: 20%;font-weight: 700;">Descending</button>
			</form>	
    </section>
<footer>
<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
<p style="color:red" align="center";>All rights are reserved.</p>
<small style="color:black">Developed & maintained by Mustakin, Al-Wakil, Sababa, Ishraq, Bidhan</small>
</footer>


</body>
</html>