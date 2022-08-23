<?php 

session_start();

if (!isset($_SESSION['uid'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1 style=color: hotpink;>Welcome " . $_SESSION['uid'] . "</h1>"; ?>
    
</body>
</html>