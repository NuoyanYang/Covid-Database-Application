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
    <title>Vaccine Company</title>
</head>

<body> 
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">Show A List Of Vaccine Company With Address</h1>
<hr>

<h3>This page shows a list of companies that produce the vaccine, including company name, street, city, province and postal code.</h3>
<hr>

<table id="table1">
<p style="text-align:center;font-size:20px;">Vaccine Company Table</p>
  <tr>
    <th>Company Name</th>
    <th>Street</th>
    <th>City</th>
    <th>Province</th>
    <th>Postal Code</th>
  </tr>
<?php
   $query = "SELECT * FROM company";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
       echo "<tr><td>".$row["Company_Name"]."</td><td>".$row["Company_Street"]."</td><td>".$row["Company_City"].
            "</td><td>".$row["Company_Province"]."</td><td>".$row["Company_Postal_Code"]."</td></tr>";
   }
?>
</table>
<br>
<hr>

<figure>
    <figcaption style="text-align:center;font-size:20px">A Randrom Cartoon</figcaption>
    <img src="img/vComp.jpg" alt="Vaccine Company" class="center">
</figure>


<?php
$connection =- NULL;
?>
</body>