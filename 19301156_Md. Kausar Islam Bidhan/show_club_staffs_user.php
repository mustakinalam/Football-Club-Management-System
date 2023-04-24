<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manchester United</title>
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
	<li><b><a href="R_servicerequest.php">PLAYERS</a></b></li>
	<li><b><a href="S.M_mechaniclogin.php">CLUB STAFF</a></b></li>
	<li><b><a href="S.M_userlogin.php">BOARD MEMBERS</a></b></li>
	<li><b><a href="show_club_shop.php">CLUB SHOP</a></b></li>

</ul>
</nav>

<section id = "section1">
      <div class = "title" style = "color:white";> club staff </div>
  <form action = "search_club_staff.php" method="post">
                <input type="text" name="search" placeHolder="Search club Staff">
                <button type="submit" name="submit-search">Search</button>
            </form>
       <div style = "margin-left:10%;margin-right:10%;margin-top:50px;margin-bottom:50px;text-align:center;background:#b30000;">
       <div class = "row" array = "padding:5px;">
         <div class = "col-md-4" style = "color:white";><b> Initial </b></div>
         <div class = "col-md-4" style = "color:white";><b> Name </b></div>
         <div class = "col-md-4" style = "color:white";><b> Position </b></div>
       </div>
	   
       <?php
       require_once ("DBconnect.php");
       $sql = "SELECT * FROM club_staff order by salary desc";
       $result = mysqli_query ($conn,$sql);
       if (mysqli_num_rows ($result)!= 0)
   {
       while($row = mysqli_fetch_array ($result))
   {
       ?>
	   
       <div class = "row" style = "padding:5px;">
        <div class = "col-md-4" style = "color:white";>  <?php echo $row [0]; ?> </div>
        <div class = "col-md-4" style = "color:white";>  <?php echo $row [2]; ?> </div>
        <div class = "col-md-4" style = "color:white";>  <?php echo $row [3]; ?> </div>
       </div>
	   
       <?php
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