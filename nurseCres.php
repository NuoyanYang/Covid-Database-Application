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
    <title>Nurses' Credential</title>
</head>

<body> 
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">Show A List Of Nurses' Credential</h1>
<hr>

<h3>This page shows a list of nurses' credentials, including nurses' first name, last name and credential.</h3>
<hr>

<table id="table1">
  <p style="text-align:center;font-size:20px;">Credentials Table</p>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Credential</th>
  </tr>
<?php
   $query = "SELECT * FROM nurse N, nurse_credential NC 
             WHERE N.nurse_ID = NC.nurse_ID";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
       echo "<tr><td>".$row["NurseFirst_Name"]."</td><td>".$row["NurseLast_Name"]."</td><td>".$row["Cred"]."</td></tr>";
   }
?>
</table>
<br>
<hr>

<figure>
    <figcaption style="text-align:center;font-size:20px">A Randrom Cartoon</figcaption>
    <img src="img/nurC.png" alt="Nurse With Patient" class="center">
</figure>

<?php
$connection =- NULL;
?>
</body>