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

<p>Here is a list of the doctor information.<br><p>
<table id="table1">
  <caption style="margin-bottom:12px;">Doctor Information</caption>
  <tr>
    <th>Site Name</th>
    <th>First Name</th>
    <th>Last Name</th>
  </tr>
<?php
   $whichSite= $_POST["siteName"];
   $query = 'SELECT * FROM doctor_works_at W, doctor D 
             WHERE W.Doctor_ID=D.Doctor_ID AND W.Site_Name="' . $whichSite . '"';
   $result = $connection->query($query);
   while ($row=$result->fetch()) {
	    echo "<tr><td>".$row["Site_Name"]."</td><td>".$row["DoctorFirst_Name"]."</td><td>".$row["DoctorLast_Name"]."</td></tr>";
    }
?>
</table>

<hr>

<p>Here is a list of the nurse information.<br><p>
<table id="table1">
  <caption style="margin-bottom:12px;">Nurse Information</caption>
  <tr>
    <th>Site Name</th>
    <th>First Name</th>
    <th>Last Name</th>
  </tr>
<?php
   $whichSite= $_POST["siteName"];

   $query1 = 'SELECT * FROM nurse_works_at W, nurse N 
              WHERE W.Nurse_ID=N.Nurse_ID AND W.Site_Name="' . $whichSite . '"';
   $result = $connection->query($query1);
   while ($row=$result->fetch()) {
	    echo "<tr><td>".$row["Site_Name"]."</td><td>".$row["NurseLast_Name"]."</td><td>".$row["NurseFirst_Name"]."</td></tr>";
    }
   $connection = NULL;
?>
</table>
</body>
</html>