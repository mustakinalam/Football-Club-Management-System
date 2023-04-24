<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	// $pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: admin.php?error=User ID is required");
	    exit();
	}
	else{
		$sql_1 = "SELECT * FROM board WHERE member_id='$uname'";
		$sql_2 = "SELECT * FROM club_staff WHERE initial='$uname'";
		$sql_3 = "SELECT * FROM shop_staff WHERE staff_id='$uname'";

		$result_1 = mysqli_query($conn, $sql_1);
		$result_2 = mysqli_query($conn, $sql_2);
		$result_3 = mysqli_query($conn, $sql_3);

		if (mysqli_num_rows($result_1) === 1) {
			$row = mysqli_fetch_assoc($result_1);
            if ($row['member_id'] === $uname) {
            	$_SESSION['member_id'] = $row['member_id'];
            	// $_SESSION['name'] = $row['name'];
            	// $_SESSION['id'] = $row['id'];
            	header("Location: add_update_board_members.php");
		        exit();
            }else{
				header("Location: admin.php?error=Incorrect User ID");
		        exit();
			}
		}
		else if (mysqli_num_rows($result_2) === 1) {
			$row = mysqli_fetch_assoc($result_2);
            if ($row['initial'] === $uname) {
            	$_SESSION['initial'] = $row['initial'];
            	// $_SESSION['name'] = $row['name'];
            	// $_SESSION['id'] = $row['id'];
            	header("Location: modify_players_cf.php");
		        exit();
            }else{
				header("Location: admin.php?error=Incorrect User ID");
		        exit();
			}
		}
		else if (mysqli_num_rows($result_3) === 1) {
			$row = mysqli_fetch_assoc($result_3);
            if ($row['staff_id'] === $uname) {
            	$_SESSION['staff_id'] = $row['staff_id'];
            	// $_SESSION['name'] = $row['name'];
            	// $_SESSION['id'] = $row['id'];
            	header("Location: add_update_delete_club_shop.php");
		        exit();
            }else{
				header("Location: admin.php?error=Incorrect User ID");
		        exit();
			}
		}
		else{
			header("Location: admin.php?error=Incorrect User ID");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}

?>