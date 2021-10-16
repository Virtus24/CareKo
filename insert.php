<?php
include("config.php");
if(isset($_POST['search'])){
    $searchKey = $_POST['search'];
    $sql = "SELECT * FROM tables WHERE fullname LIKE '%$searchKey%'";
}else
$sql = "SELECT * FROM tables";
$result = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
<title>Home</title>
	   <link rel="stylesheet" type="text/css" href="style1.css"/>
	   <script src="https://kit.fontawesome.com/e344b958e1.js" crossorigin="anonymous"></script>
</head>
<header>
	        <div class="main">
				
				<div class="pilista">
					<ul>
                    <li><a href="About.php">HOME</a></li>
						<li><a href="About.php">SCHEDULE</a></li>
						<li><a href="feedback.php">ABOUT US</a></li>
					</ul>
					
				</div>
	    </header>
<body>
<div class="container">
			
            <div id="box">
     
                   <h1>MEDICAL FORM</H1>                                    
             <form action="insertfunc.php" method="POST">
              <div class="input"> <input  name="fullname" type="text" required="" placeholder="Full Name">
             </div>
             <div class="input"> <input  name="age" type="number" required="" placeholder="Age">
             </div>
             <div class="input"><input  name="phonenumber" type="number" required="" placeholder="Phone Number">
             </div>
             <div class="input"><input  name="bloodtype" type="text" required="" placeholder="Blood Type">
             </div>
             <div class="input"><input  name="weight" type="number" required="" placeholder="Weight">
             </div>
             <div class="input"><input  name="height" type="number" required="" placeholder="Height">
             </div>
             <div class="input"><input  name="address" type="text" required="" placeholder="Address">
             </div>

        <button class="btn" input type="submit" name="submit">Submit</button>
    </form>
    </div> 	
	</div>
    
    
    <div class="srchbtn">
			<form class="example" action="" method="POST">
				<input type="text" placeholder="Search by First Name.." name="search">
				<button type="submit" name="subsearch"><i class="fa fa-search"></i></button>
			  </form>
		</div>
			
        <div class="ttable1">
        <table  id="display" border="4">
        <tr>
			<th>Full Name</th>
			<th>Age</th>
			<th>Blood Type</th>
            <th>Phone Number</th>
			<th>Weight</th>
			<th>Height</th>
			<th>Address</th>
            
		</tr>

</div>

<?php
while($res=mysqli_fetch_array($result)):;?>
    <tr>
        <td><?php echo $res['fullname'];?></td>
        <td><?php echo $res['age'];?></td>
        <td><?php echo $res['bloodtype'];?></td>
        <td><?php echo $res['phonenumber'];?></td>
        <td><?php echo $res['weight'];?></td>
        <td><?php echo $res['height'];?></td>
        <td><?php echo $res['address'];?><td>
       
    </tr>
    <?php endwhile;?>
    
</body>
</html>