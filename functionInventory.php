<?php
include("config.php");
if(isset($_POST['register'])){
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $result=mysqli_query($mysqli, "INSERT into inventory values ('', '$drugname', '$dose', '$route','$quantity',
     '$expiry')");

     if($result){
        header("location:inventory.php");
     }
     else{
         echo "Failed";
     }
}
?>