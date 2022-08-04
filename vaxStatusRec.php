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

</style>

<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
   include 'connectdb.php';
?>

<p>Here is a list of the patient information.<br><p>
<table id="table1">
  <caption style="margin-bottom:12px;">Patient Information</caption>
  <tr>
    <th>OHIP Number</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Vaccination Date</th>
    <th>Vaccination Type</th>
  </tr>
<?php
    $whichOHIP= $_POST["OHIPNumber"];
    $query = 'SELECT * FROM patient P, vaccination VT, vaccine V
              WHERE  VT.LotID = V.LotID AND
              VT.PatientOHIP = "' . $whichOHIP . '" AND
              P.PatientOHIP = "' . $whichOHIP . '"';
              $result=$connection->query($query);
    while ($row=$result->fetch()) {
	      echo "<tr><td>".$row["PatientOHIP"]."</td><td>".$row["PatientFirst_Name"]."</td><td>".$row["PatientLast_Name"].
             "</td><td>".$row["Vax_Date"]."</td><td>".$row["Company_Name"]."</td></tr>";
    }
?>
</table>

</body>
</html>