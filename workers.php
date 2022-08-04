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
    <title>Show Workers</title>
</head>

<body> 
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">Show A Listing Of All Workers That Work At A Vaccination Site</h1>
<hr>
 
<h2>Which vaccination site are you looking up?</h2>
<p>One may choose a specific vacination site, then the web will list all the workers in that site with their name 
   and type (doctor or nurse). </br> </br> The below is a table that shows all the vaccination sites for preview.
</p>
<hr>

<table id="table1">
<p style="text-align:center;font-size:20px;">Vaccination Site Table</p>
<?php
   $query = "SELECT * FROM vaccination_site";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
       echo "<tr><td>";
       echo $row["Site_Name"];
       echo "</td></tr>";
   }
?>
</table>

<br>
<hr>

<form action="workersRec.php" method="post">
<p>Please choose one vaccination site name from the above table.</p>
<?php
   $query = "SELECT * FROM vaccination_site";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="siteName" value='.'"'.$row['Site_Name'].'"'.'>'. $row["Site_Name"]."<br>"."<br>";
   }
?>
<input type="submit" value="Submit">
</form>


<!-- 
<form action="workersRec.php">
  <label for="site">Vaccination Site Name:</label>
  <input type="text" id="site" name="site"><br><br>
  <input type="submit" value="Submit">
</form> -->

<p>
    Click the "Submit" button and you will be directed to another page to see the information you want. <br>
</p>

<hr>
<figure>
    <figcaption style="text-align:center;font-size:20px">Doctor AND Nurse</figcaption>
    <img src="img/workers.jpg" alt="Doctor & Nurse" class="center">
</figure>


<?php
$connection =- NULL;
?>
</body>