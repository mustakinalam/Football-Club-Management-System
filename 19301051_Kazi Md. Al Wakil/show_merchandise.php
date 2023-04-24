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
        <div class="title" style="color:white"> MERCHANDISE </div>

        
          <div style="margin-left:10%;margin-right:10%;margin-top:50px;margin-bottom:50px;text-align:center;background:#b30000;">
          <div class="row" style="padding:5px;">
            <div class="col-md-3" style="color:white";><b> Shop ID</b></div> 
            <div class="col-md-3" style="color:white";><b> Selling Item </b></div>
			<div class="col-md-3" style="color:white";><b> Quantity </b></div>
            <div class="col-md-3" style="color:white";><b> Price(£) </b></div>
          </div>
		  <!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
		  <?php
		  require_once("DBconnect.php");
		  $sql = "SELECT M.shop_id, CS.selling_item, CS.quantity, CS.price FROM club_shop CS INNER JOIN merchandise M on CS.shop_id = M.shop_id AND (CS.selling_item = 'Merchandise' OR CS.selling_item = 'Wearable' OR CS.selling_item = 'Figures')";
		  $result = mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result) != 0){
			while($row = mysqli_fetch_array($result)){
			?>
			<div class="row" style="padding:5px;">
				<div class="col-md-3" style="color:white";> <?php echo $row[0]; ?> </div>  
				<div class="col-md-3" style="color:white";> <?php echo $row[1]; ?> </div>
				<div class="col-md-3" style="color:white";> <?php echo $row[2]; ?> </div>
				<div class="col-md-3" style="color:white";> <?php echo $row[3]; ?> </div>
			</div>
			<?php
			}
		  }
		  ?>
        </div>
        

    </section>
	<nav>
		<ul style="margin-left:38%;">
			<li><b><a href="show_kits.php" align="center">KITS</a></b></li>
			<li><b><a href="show_gift_packages.php" align="center">GIFT PACKAGES</a></b></li>
			<li><b><a href="show_merchandise.php" align="center">MERCHANDISE</a></b></li>
		</ul>
	</nav>
<footer>
	<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
	<p style="color:red" align="center";>All rights are reserved.</p>
	<small style="color:black">Developed & maintained by Mustakin, Al-Wakil, Sababa, Ishraq, Bidhan</small>
</footer>


</body>
</html>