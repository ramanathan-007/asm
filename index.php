<?php 
  
include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['uid'])) {
    header("Location: index.php");
}

if (isset($_POST['SUBMIT'])) {
	$uid = $_POST['uid'];
	

	if ($uid) {
		$sql = "SELECT * FROM users WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (uid)
					VALUES ('$uid')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$uid = "";

			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! UserId Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Invalid')</script>";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>
        ASM Group of Institutes
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ASM GROUP OF INSTITUTES</h1>
   <form action="" method="POST">
      <label for="uid">USER ID : </label>
      <input type="text" id="uid" name="uid" value="<?php echo $uid; ?>" required>
      <br>
      <br>
      <input type="submit" value="SUBMIT" name="SUBMIT">
   </form>
</body>
</html>