<?php
include("config.php");
if(isset($_POST['register'])){
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
   

    $result=mysqli_query($mysqli, "INSERT into users values ('', '$fullname', '$address', '$username','$email',
     '$password', '$usertype')");

     if($result){
        header("location:register.php");
     }
     else{
         echo "Failed";
     }
}
?>