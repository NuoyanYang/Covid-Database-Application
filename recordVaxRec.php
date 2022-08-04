<!DOCTYPE html>
<html style="max-width:90%;margin:auto;">

<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: blue;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

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

<?php
    $whichOHIP = $_POST["OHIPNumber"];
    $query = 'SELECT COUNT(*) AS count FROM patient WHERE
              PatientOHIP = "' . $whichOHIP . '"';
    $result = $connection->query($query);
    $row0 = $result->fetch();
    if (intval($row0["count"]) != 0) {
        echo '<table id="table1">';
        echo '<caption style="margin-bottom:12px;font-size:20px"><br><br>Patient Vaccination Information</caption>';
        echo '<tr>';
        echo '<th>OHIP Number</th>';
        echo '<th>First Name</th>';
        echo '<th>Last Name</th>';
        echo '<th>Vaccination Site Name</th>';
        echo '<th>Vaccine Lot ID</th>';
        echo '<th>Vaccination Date</th>';
        echo '<th>Vaccination Time</th>';
        echo '</tr>';
        $query1 = 'SELECT * FROM patient P, vaccination VT, vaccine V WHERE
                   VT.LotID = V.LotID AND
                   VT.PatientOHIP = "' . $whichOHIP . '" AND
                   P.PatientOHIP = "' . $whichOHIP . '"';
        $result1 = $connection->query($query1);
        while ($row = $result1->fetch()) {
            echo "<tr><td>".$row["PatientOHIP"]."</td><td>".$row["PatientFirst_Name"]."</td><td>".$row["PatientLast_Name"].
            "</td><td>".$row["Site_Name"]."</td><td>".$row["LotID"]."</td><td>".$row["Vax_Date"]."</td><td>".
            $row["Vax_Time"]."</td></tr>";
       }
       echo '</table>';
       echo '<br> <hr> <br>';
       echo '<a href="recordVaxRec2.php" style="font-size:20px">Click Here To Record The Vaccination <br>';
       
    }
    else {
        echo '<br> <br> Sorry, the database does not have your information. <br> <br>';
        echo 'We need you to enter your basic information for record. <br> <br> <hr> <br> <br>';
        echo '<form action="recordVaxRec1.php", method="post">';
        echo '<label for="OHIPNumber1">OHIP Number: </label>';
        echo '<input type="text" name="OHIPNumber1" id="OHIPNumber1"><br><br>';
        echo '<label for="FirstName">First Name: </label>';
        echo '<input type="text" name="FirstName" id="FirstName"><br><br>';
        echo '<label for="LastName">Last Name: </label>';
        echo '<input type="text" name="LastName" id="LastName"><br><br>';
        echo '<label for="BirthDate">Birth Date: </label>';
        echo '<input type="text" name="BirthDate" id="BirthDate"><br><br>';
        echo '<input type="submit" value="Submit">';
        echo '</form>';  
        echo '<p><br>Click the "Submit" button and your information will be recorded into database.</p>';
    }
?>

<?php
$connection =- NULL;
?>
</body>