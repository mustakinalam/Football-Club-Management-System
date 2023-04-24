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
<section id = "section1">
        <div class="title" style="color:white";> Club Shop </div>
			<form action = "search_club_shop.php" method="post">
				<input type="text" name="search" placeHolder="Search">
				<button type="submit" name="submit-search">Search</button>
			</form>	
			<div style="margin-left:30%;margin-right:30%;margin-top:50px;margin-bottom:50px;text-align:center;background:#b30000;color:white;font-size:large;font-weight: 700;">
			
				<?php
				require_once('DBconnect.php');
					if(isset($_POST['submit-search'])){
						$search = mysqli_real_escape_string($conn,$_POST['search']);
						$sql = "SELECT * FROM club_shop WHERE shop_id LIKE '%$search%' OR selling_item LIKE '%$search%' OR price LIKE '%$search%' ";
						$result = mysqli_query($conn, $sql); 
						$queryResult = mysqli_num_rows($result);
						echo "---------> There are " .$queryResult." result(s)! <---------<br>"; 
						echo "Shop ID-----Selling Item-----Price(£)<br>";
						if($queryResult > 0){
							while($row = mysqli_fetch_assoc($result)){
							?>
								<?php echo $row['shop_id'],"---------", $row['selling_item'],"---------", $row['price'],"<br>" ; ?> 
							<?php
							}

						}
						else{
							echo " No results matching your search.";

						}
				}

				?>
				
			</div>
        

    </section>

<footer>
<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
<p style="color:red" align="center";>All rights are reserved.</p>
<small style="color:black">Developed & maintained by Mustakin, Al-Wakil, Sababa, Ishraq, Bidhan</small>
</footer>


</body>
</html>