<?php
include("config.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $phonenumber=$_POST['phonenumber'];
    $bloodtype=$_POST['bloodtype'];
    $address=$_POST['address'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    
    
    

    $result=mysqli_query($mysqli, "INSERT into tables values ('','$fullname','$age','$phonenumber', '$bloodtype','$address','$weight','$height')");
     if($result){
        header("location:insert.php");
     }
     else{
         echo "Failed";
     }
}
?>