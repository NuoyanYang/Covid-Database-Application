<!DOCTYPE html>
<html style="max-width:90%;margin:auto;">
<head>
    <meta charset="utf-8">
    <title>Record Vaccination</title>
</head>

<style>
body {
  background-color: #c2d2fc;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
</style>

<body> 
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">Record A Vaccination For A Patient</h1>
<hr>
    
<h2>Please enter your OHIP Number in the following text box.</h2>

<form action="recordVaxRec.php", method="post">
<label for="OHIPNumber">OHIP Number:</label>
<?php
    echo '<input type="text" name="OHIPNumber" id="OHIPNumber"><br><br>';
?>
<input type="submit" value="Submit">
</form> 

<p>
   The web ask the user/patient for their OHIP number. If the patient doesn't exist in
   the database, then one will need to prompt for the patient information and add the 
   patient first before asking for vaccination data. Once the patient is in the database,
   the web will ask relavant information and record the vaccination. Finally, the web will
   go into a new page, including all vaccinations for this patient after you update the 
   vaccination table.
</p>
<hr>

<figure>
    <figcaption style="text-align:center;font-size:20px">OHIP Sample</figcaption>
    <img src="img/ohip.jpg" alt="OHIP Sample" class="center">
</figure>

<?php
$connection =- NULL;
?>
</body>
</html>