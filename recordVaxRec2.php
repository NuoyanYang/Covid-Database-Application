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

<?php
    echo "<br>Please choose which clinic the vaccine was administered at from the below. <br> <br>";
    echo '<form action="recordVaxRec2.php" method="post">';
    $query3 = "SELECT * FROM vaccination_site";
    $result3 = $connection->query($query3);
    while ($row = $result3->fetch()) {
        echo '<input type="radio" name="siteName" value='.'"'.$row['Site_Name'].'"'.'>'. $row["Site_Name"]."<br>"."<br>";
    } 
    echo '<hr> <br>';
    echo '<label for="LotID">Lot ID: </label>';
    echo '<input type="text" name="LotID" id="LotID"><br><br>';
    echo '<label for="OHIP">OHIP: </label>';
    echo '<input type="text" name="OHIP" id="OHIP"><br><br>';
    echo '<label for="vaxDate">Vaccination Date: </label>';
    echo '<input type="text" name="vaxDate" id="vaxDate"><br><br>';
    echo '<label for="vaxTime">Vaccination Time: </label>';
    echo '<input type="text" name="vaxTime" id="vaxTime" step="1"><br><br>';
    echo '<input type="submit" value="Submit">';
    echo '<hr>';
    echo '</form>';

    if (isset($_POST["OHIP"]) && isset($_POST["siteName"]) && isset($_POST["LotID"]) && 
        isset($_POST["vaxDate"]) && isset($_POST["vaxTime"])) {
        $OHIP = $_POST["OHIP"];
        $whichSite = $_POST["siteName"];
        $whichLot = $_POST["LotID"];
        $date = $_POST["vaxDate"];
        $time = $_POST["vaxTime"]; 
        $query4 = 'INSERT INTO vaccination VALUES("'.$whichLot.'","'.$OHIP.'","'.$whichSite.'","'.$date.'","'.$time.'")';
        $numRows = $connection->exec($query4);

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

        $query5 = 'SELECT * FROM patient P, vaccination VN, vaccine V WHERE
                   VN.LotID = V.LotID  AND
                   VN.PatientOHIP = "' . $OHIP. '" AND
                   P.PatientOHIP = "' . $OHIP . '"
                   ORDER BY VN.Vax_Date';
        $result5 = $connection->query($query5);
        while ($row = $result5->fetch()) {
          echo "<tr><td>".$row["PatientOHIP"]."</td><td>".$row["PatientFirst_Name"]."</td><td>".$row["PatientLast_Name"].
          "</td><td>".$row["Site_Name"]."</td><td>".$row["LotID"]."</td><td>".$row["Vax_Date"]."</td><td>".
          $row["Vax_Time"]."</td></tr>";
      }
      echo '</table>';
      echo '<br> <hr> <br>';
    }
?>


<?php
$connection =- NULL;
?>
</body>