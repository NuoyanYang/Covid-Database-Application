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

<p>Here is a list of information.<br><p>
<table id="table1">
  <caption style="margin-bottom:12px;font-size:20px">Vaccine Information</caption>
  <tr>
    <th>Vaccine Type</th>
    <th>Vaccination Site Name</th>
    <th>Total Number of Doses</th>
  </tr>
<?php
   $whichType= $_POST["companyName"];
   $query = 'SELECT * FROM vaccination VT, vaccine V WHERE  
             VT.LotID = V.LotID AND V.Company_Name = "' . $whichType . '"';
   $result=$connection->query($query);
   while ($row=$result->fetch()) {
	    echo "<tr><td>".$row["Company_Name"]."</td><td>".$row["Site_Name"]."</td><td>"
        .$row["Dose_Number"]."</td></tr>";
    }
?>
</table>

</body>
</html>