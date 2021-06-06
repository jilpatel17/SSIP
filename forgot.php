<?php
include "./database/dbconn.php";
$email = $_POST['femail'];
$pass = $_POST['fpass'];
$cpass = $_POST['fcpass'];

$sql = "select * from member where email='$email'";
$run = mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
if($count)
{
    if($pass === $cpass)
    {
        $subject = "Your Password was changed";
        $message = "Hi, user your password for Smart Society was changed ! ";
        $sender = "From: jil1710.jp@gmail.com";
        if(mail($email,$subject,$message,$sender))
        {

            $sql2 = "update member set password='$pass' where email='$email'";
            $run2 = mysqli_query($conn,$sql2);
            if($run2)
            {
                echo "Updated Successfully";
            }
        }
        else
        {
            echo "Sorry something went wronge! Try again";
        }
    }
    else
    {
        echo "Password does not match.";
    }
}
else
{
    echo "Email Id. is not exist!";
}

?>