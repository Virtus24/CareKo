<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/e344b958e1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href="inventory.css">
    <title>Medicinal Inventory</title>
</head>

<header>
  <h1>♥ CARE KO. PHARMACY ♥</h1>
</header>

<body>
  <form method = "POST" action = "functionInventory.php">
<div class="main">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Drug Name">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i> 
      </button>
    </div>
  </div>
  

  <div class="list-group">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Drug List</th> 
      </tr>
  </thead>
</table>
</div>

<div class="ttable">
<table class="table" border="2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Drug Name</th>
      <th scope="col">Dose</th>
      <th scope="col">Route</th>
      <th scope="col">Quantity</th>
      <th scope="col">Expiry Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amoxicillin</td>
      <td>200mg/5mL</td>
      <td>Dinalpupihan</td>
      <td>100</td>
      <td>2025-08</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Acyclovir</td>
      <td>200mg/5mL</td>
      <td>Dinalupihan</td>
      <td>200</td>
      <td>2025-08</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Allepurinol</td>
      <td>2.5mg/3mL</td>
      <td>Dinalupihan</td>
      <td>150</td>
      <td>2025-08</td>
    </tr>
  </tbody>
</table>
</div>




</form>
</body>
</html>