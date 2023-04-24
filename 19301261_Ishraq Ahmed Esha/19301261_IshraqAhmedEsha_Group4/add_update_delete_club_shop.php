<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MANCHESTER UNITED</title>
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
	<li><b><a href="#">PLAYERS</a></b></li>
	<li><b><a href="add_club_staff.php">CLUB STAFF</a></b></li>
	<li><b><a href="#">BOARD MEMBERS</a></b></li>
	<li><b><a href="#">CLUB SHOP</a></b></li>
	<li><b><a href="index.php">LOG OUT</a></b></li>

</ul>
</nav>

<!-- contents -->

<section id = "section1">
        <div class="title" style="color:white";> Add a new item </div>

        
          <form action = "insert_club_shop.php" method="post">
		  <div style="text-align:center; font-size: 20px">Shop ID: <input type="text" name="shop_id"></div><br/>
		  <div style="text-align:center; font-size: 20px">Selling Item: <input type="text" name="selling_item"></div><br/>
		  <div style="text-align:center; font-size: 20px">In Stock: <input type="int" name="quantity"></div><br/>
		  <div style="text-align:center; font-size: 20px">Price(£): <input type="int" name="price"></div><br/>
		  <br/>
		  <div style="text-align:center; font-size: 15px"><input type="submit" value="Add to Database"></div><br/>
		  </form>
		  
		  <div class="title" style="color:white";> Modify Item </div>
          <form action = "modify_club_shop.php" method="post">
			  <div style="text-align:center; font-size: 20px">Set Quantity: <input type="int" name="quantity"></div><br/>
			  <div style="text-align:center; font-size: 20px">Set Price: <input type="int" name="price"></div><br/>
			 
			  <div style="text-align:center; font-size: 20px">Where Shop ID: <input type="text" name="shop_id"></div><br/>
			  <div style="text-align:center; font-size: 20px">Where Selling Item: <input type="text" name="selling_item"></div><br/>
		  <br/>
			  <div style="text-align:center; font-size: 20px"><input type="submit" value="Modify"></div><br/>
		  </form>
		  
		  <div class="title" style="color:white";> Delete Item </div>
          <form action = "delete_club_shop.php" method="post">
			  <div style="text-align:center; font-size: 20px">Where Shop ID: <input type="text" name="shop_id"></div><br/>
			  <div style="text-align:center; font-size: 20px">Where Selling Item: <input type="text" name="selling_item"></div><br/>
			  <br/>
			  <div style="text-align:center; font-size: 20px"><input type="submit" value="Delete"></div><br/>
		  </form>
		  <!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
		  
		  
</section>
<footer>
<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
<p style="color:red" align="center";>All rights are reserved.</p>
<small style="color:black">Developed & maintained by Mustakin, Al-Wakil, Sababa, Ishraq, Bidhan</small>
</footer>


</body>
</html>