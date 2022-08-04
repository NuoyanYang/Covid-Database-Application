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
    <title>Request Vaccine Info</title>
</head>

<body> 
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">Show A Patient's Vaccination Status</h1>
<hr>
    
<h2>Which vaccine type are you looking up?</h2>
<p>One may choose a specific vaccine type from the list, then the web will display all
   the vaccination sites that have (or will) offer that type of vaccine along with the
   total number of doses that have shipped to that site. </br> </br> 
   The below is a table that shows all the information for preview.
</p>
<hr>

<table id="table1">
<p style="text-align: center;font-size: 20px;">Vaccine Table</p>
  <tr>
    <th>Vaccine Type</th>
  </tr>
<?php
   $query = "SELECT * FROM company";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
       echo "<tr><td>".$row["Company_Name"]."</td></tr>";
   }
?>
</table>

<br>
<hr>

<form action="vaxInfoRec.php" method="post">
<p>Please choose one vaccine type from the above table.</p>
<?php
   $query = "SELECT * FROM company";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="companyName" value='.'"'.$row['Company_Name'].'"'.'>'. $row["Company_Name"]."<br>"."<br>";
   }
?>
<input type="submit" value="Submit">
</form>

<p>
    Click the "Submit" button and you will be directed to another page to see the information you want. <br>
</p>

<hr>
<figure>
    <figcaption style="text-align:center;font-size:20px">A Random Vaccine Cartoon</figcaption>
    <img src="img/vRecs.jpg" alt="Vaccine" class="center">
</figure>

<?php
$connection =- NULL;
?>
</body>