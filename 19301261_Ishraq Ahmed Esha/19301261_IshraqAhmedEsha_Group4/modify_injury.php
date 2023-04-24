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
		text-align: center;
    }

    header{

			font-family: "Arial" , sans-serif;
			text-align: center;
			background-image: url("images/bg.jpg");

						color: #b30000;
						padding:250px;
						font-size: 40px;

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
				color:#ffffff;
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
			input[type=text], select {
			  width: 20%;
			  padding: 10px 10px;
			  margin: 20px 80px;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
			}
			input[type=date], select {
			  width: 20%;
			  padding: 10px 10px;
			  margin: 20px 80px;
			  display: inline-block;
			  border: 3px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
			}	
			input[type=submit] {
			  width: 10%;
			  background-color: #b30000;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  align: center;
			}

			input[type=submit]:hover {
			  background-color: black;
			}

			div {
			  border-radius: 5px;
			  background-color: #f2f2f2;
			  padding: 20px;
			}
    </style>

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
	<li><b><a href="index.php">LOG OUT</a></b></li>

</ul>
</nav>

<!-- contents -->




<section id = "section1">
		<div class="title" style ="color:white";>Insert New Injury</div>
		
		<form action="insert_injury.php" method="post">
			
		<div style="text-align:center; font-size: 20px"> Jersey No. <input type="int" name="Jersey_No"> </div> <br/>
		<div style="text-align:center; font-size: 20px">	Date <input type="date" name="date"> </div> <br/>
		<div style="text-align:center; font-size: 20px">	Injury Type <input type="text" name="injury_type"> </div> <br/>
		<div style="text-align:center; font-size: 20px">	Return Date <input type="date" name="return_date"> </div> <br/>
			<br/>
			
			<br/>

		<div style="text-align:center; font-size: 20px"><input type="submit" value="Insert"></div>
		</form>
		<div class="title" style ="color:white";>Update Injury</div>
		<form action = "update_injury.php" method="post">
		
		<div style="text-align:center; font-size: 20px">Set Date <input type="date" name="date"> </div> <br/>
		<div style="text-align:center; font-size: 20px">Set Injury Type <input type="text" name="injury_type"> </div> <br/>
		<div style="text-align:center; font-size: 20px">Set Return Date <input type="date" name="return_date"> </div> <br/>
          <div style="text-align:center; font-size: 20px">Where Jersey No <input type="int" name="Jersey_No"></div><br/>
          <br/>
          <div style="text-align:center; font-size: 20px"><input type="submit" value="Update"></div><br/>
		</form>
</section>

<nav>
	<ul style="margin-left:35%;">
	<li><b><a href="modify_players.php">MODIFY PLAYERS</a></b></li>
	<li><b><a href="modify_injury.php">MODIFY INJURY</a></b></li>
	<li><b><a href="modify_skills.php">MODIFY SKILLS</a></b></li>
	

</ul>
</nav>	


<!-- main footer -->
</section>
<footer>
<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
<p style="color:red" align="center";>All rights are reserved.</p>
<small style="color:black">Developed & maintained by Mustakin, Wakil, Sababa, Ishraq, Bidhan</small>
</footer>


</body>
</html>