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
    <title>Request Vaccination Status</title>
</head>

<body> 
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">Show A Patient's Vaccination Status</h1>
<hr>
    
<h2>Which patient are you looking up?</h2>
<p>One may choose a specific patient from the list, then the web will list the patient's
    vaccination status, including name, OHIP number, vaccination date & type. </br> </br> 
    The below is a table that shows all the patients for preview.
</p>
<hr>

<table id="table1">
<p style="text-align: center;font-size: 20px;">Patient Table</p>
  <tr>
    <th>OHIP Number</th>
    <th>First Name</th>
  </tr>
<?php
   $query = "SELECT * FROM patient";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
       echo "<tr><td>".$row["PatientOHIP"]."</td><td>".$row["PatientFirst_Name"]."</td>"."</td></tr>";
   }
?>
</table>

<br>
<hr>

<form action="vaxStatusRec.php" method="post">
<p>Please choose one patient's fitst name from the above table.</p>
<p>
   Note that there may exists same first name of the patients. Plese select the OHIP number
   with respect to that patient.
</p>
<?php
   $query = "SELECT * FROM patient";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="OHIPNumber" value='.'"'.$row['PatientOHIP'].'"'.'>'. $row["PatientOHIP"]."<br>"."<br>";
   }
?>
<input type="submit" value="Submit">
</form>

<p>
    Click the "Submit" button and you will be directed to another page to see the information you want. <br>
</p>

<hr>
<figure>
    <figcaption style="text-align:center;font-size:20px">Vaccination Status</figcaption>
    <img src="img/vStatus.jpg" alt="Vaccination Status" class="center">
</figure>


<?php
$connection =- NULL;
?>
</body>