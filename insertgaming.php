<?php
include_once 'config.php';
if(isset($_POST['submit']))
{    
     $studentid = $_POST['studentid'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $dob = $_POST['dob'];
     $medical = $_POST['medical'];
     $dname = $_POST['dname'];
     $dphone = $_POST['dphone'];
     $kname = $_POST['kname'];
     $kphone = $_POST['phone'];
    $photo = $_POST['photo'];
    
    $email = password_hash($email, PASSWORD_DEFAULT);
    $medical = password_hash($email, PASSWORD_DEFAULT);
    $dname = password_hash($email, PASSWORD_DEFAULT);
    $dphone = password_hash($email, PASSWORD_DEFAULT);
    $kname = password_hash($email, PASSWORD_DEFAULT);
    $kphone = password_hash($email, PASSWORD_DEFAULT);

         
    
     $sql = "INSERT INTO gaming (studentid,phone,email,dob,medical,dname,dphone,kname,kphone,photo)
     VALUES ('$studentid','$phone','$email','$dob','$medical','$dname','$dphone','$kname','$kphone','$photo')";
     if (mysqli_query($link, $sql)) {
        echo "Thanks, you have now signed up1!!";
         
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     mysqli_close($link);
}
?>
<br>
<html> <a href="mainpage.php">Go Back</a>.</p> </html>