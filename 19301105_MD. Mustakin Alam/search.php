<?php
require_once('DBconnect.php');
	if(isset($_POST['submit-search'])){
		$search = mysqli_real_escape_string($conn,$_POST['search']);
		$sql = "SELECT * FROM player WHERE Jersey_No LIKE '%$search%' OR First_Name LIKE '%$search%' OR Last_Name LIKE '%$search%' ";
		$result = mysqli_query($conn, $sql); 
		$queryResult = mysqli_num_rows($result);
		echo "There are " .$queryResult." results!<br>"; 
		echo "Jersey No.--------------Name<br>";
		if($queryResult > 0){
			while($row = mysqli_fetch_assoc($result)){
			?>
				<?php echo $row['Jersey_No'],"----------------------", $row['First_Name']," ", $row['Last_Name'], "<br>" ; ?> 
			<?php
			}

		}
		else{
			echo " No results matching your search.";

		}
}

?>