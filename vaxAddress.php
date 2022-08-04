<!DOCTYPE html>
<html style="max-width:90%;margin:auto;">

<style>
#table1 {
  border: 1px solid black;
  border-collapse: collapse;
  width: auto;
  margin: 0 auto;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

body {
  background-color: #c2d2fc;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>

<head>
    <meta charset="utf-8">
    <title>Vaccination Information</title>
</head>

<body> 
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">Show A List Of Vaccination Site With Address</h1>
<hr>

<h3>This page shows a list of vaccination sites, including site name, street, city, province and postal code.</h3>
<hr>

<table id="table1">
<p style="text-align:center;font-size:20px;">Vaccination Site Table</p>
  <tr>
    <th>Site Name</th>
    <th>Street</th>
    <th>City</th>
    <th>Province</th>
    <th>Postal Code</th>
  </tr>
<?php
   $query = "SELECT * FROM vaccination_site";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
      echo "<tr><td>".$row["Site_Name"]."</td><td>".$row["Site_Street"]."</td><td>".$row["Site_City"].
           "</td><td>".$row["Site_Province"]."</td><td>".$row["Site_Postal_Code"]."</td></tr>";
   }
?>
</table>
<br>
<hr>

<figure>
    <figcaption style="text-align:center; font-size:20px">A Randrom Vaccination Site</figcaption>
    <img src="img/vSite.png" alt="Vaccination Site" class="center">
</figure>


<?php
$connection =- NULL;
?>
</body>