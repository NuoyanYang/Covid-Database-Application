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

body {
  background-color: #c2d2fc;
}

</style>

<head>
    <meta charset="utf-8">
    <title>Covid Web</title>
</head>

<body> 
<?php
include 'connectdb.php';
?>

<div>
<h1 style="text-align: center;">Welcome To The Covid Vaccination Web
    <a href="https://www.canada.ca/en/public-health/services/diseases/coronavirus-disease-covid-19/testing-screening-contact-tracing.html">
        <figure style="float: right;font-size: 24px;background-color: #0069EC;margin: 10px;">
            <img src="img/vax.png" alt="Vaccine" style="float:right;max-width:100%;height:266px;">
            <figcaption style="background-color:beige">Testing for COVID-19</figcaption>
        </figure>
    </a>
</h1>
<hr>

<h3><b>Functionalities of This Web Application</b></h3>
<ul style="list-style-type:square;line-height:3;">
  <li>
      <a href="recordVax.php">Record a vaccination for a patient</a>
  </li>
  <li>
      <a href="vaxInfo.php">Request the vaccine information</a>
  </li>
  <li>
      <a href="vaxStatus.php">Request a patient's vaccination status</a>
  </li>
  <li>
      <a href="workers.php">Show a listing of all workers that work at a vaccination site</a>
  </li>
</ul>  
<hr>

<h3> Extra Funcitonalities of This Web Application 
    <a href="https://www.ontario.ca/page/how-ontario-is-responding-covid-19">
        <figure style="float:right;font-size:22px;background-color:#0069EC;margin:6px;">
            <img src="img/covid.png" alt="Covid" style="float:right;max-width:100%;height:216px;">
            <figcaption style="background-color:beige">How Ontario Is Responding To COVID-19</figcaption>
        </figure>
    </a>
</h3>
<ul style="list-style-type:circle; line-height:3;">
  <li>
      <a href="doctorCres.php">Show a list of doctors' credential</a>
  </li>
  <li>
      <a href="nurseCres.php">Show a list of nurses' credential</a>
  </li>
  <li>
      <a href="vaxAddress.php">Show a list of vaccination sites with address</a>
  </li>
  <li>
      <a href="vaxComp.php">Show a list of vaccine companies with address</a>
  </li>
</ul>  

<hr style="margin-top:30px;">
<div style="background-color:black;color:white;margin-top:10px;padding:10px;">
  <h2>Produced By Nuoyan Yang</h2>
  <p style="line-height: 1.6">This is for the last assignment (Web Application and Demo) in CISC 332 (Database Management Systems) W22. 
     It is a fully functioning web-based interface for the covid vaccination database based on the datebase 
     created before. &nbsp; &nbsp; <button type="button" onclick="alert('Thanks for your time to go through the web!')">Click Me!</button>
  </p>
</div>

<?php
$connection =- NULL;
?>
</body>