<?php

include "./database/dbconn.php";
session_start();
$userEmail = $_POST['useremail'];
$pass = $_POST['pass'];

$sql = "select * from member where username='$userEmail' and password='$pass' and role='admin' and approve='approved'";
$run = mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
if($count)
{
    $_SESSION['username'] = $userEmail;
    echo 'Login as Admin';
}
else
{
    $sql1 = "select * from member where email='$userEmail' and password='$pass' and role='admin' and approve='approved'";
    $run1 = mysqli_query($conn,$sql1);
    $count1 = mysqli_num_rows($run1);
    if($count1)
    {
        $row = mysqli_fetch_assoc($run1);
        $_SESSION['username'] = $row['username'];
        echo 'Login as Admin';
    }
    else
    {
        $sql2 = "select * from member where username='$userEmail' and password='$pass' and role='member' and approve='approved'";
        $run2 = mysqli_query($conn,$sql2);
        $count2 = mysqli_num_rows($run2);
        if($count2)
        {
            $_SESSION['username'] = $userEmail;
            echo 'Login as Member';
        }
        else
        {
            $sql3 = "select * from member where email='$userEmail' and password='$pass' and role='member' and approve='approved'";
            $run3 = mysqli_query($conn,$sql3);
            $count3 = mysqli_num_rows($run3);
            if($count3)
            {
                $ro3 = mysqli_fetch_assoc($run3);
                $_SESSION['username'] = $row3['username'];
                echo 'Login as Member';
            }
            else
            {
                echo 'invalid username and password or not approve by admin';
            }
        }
    }
}

?>