<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
    header("location:../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Member-Dashboard</title>
</head>
<body>
    <h1>Member</h1>
    <button class="btn btn-info mx-3" type="submit"><a class="text-white" href="../logout.php">Logout</a></button>
    
</body>
</html>