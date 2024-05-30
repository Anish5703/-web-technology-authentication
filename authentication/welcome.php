<?php 
 session_start();
    if(!isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == false){
        header('location: index.php');
    }

    echo "<h1> Welcome " .$_SESSION['username']. "</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>