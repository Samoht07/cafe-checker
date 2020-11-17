<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require('header.php');
    ?>

<form method="POST">
<label for="thee">Kies het aantal:</label>
<br>

<select name="thee" id="thee">
  <option value="5">1 tot 5 Kopjes</option>
  <option value="10">6 tot 10 Kopjes</option>
  <option value="15">11 tot 15 Kopjes</option>
  <option value="20">16 tot 20 Kopjes</option>
  <option value="25">21 tot 25 Kopjes</option>
  <option value="30">25 tot 30 Kopjes</option>
  <option value="35">31 tot 35 Kopjes</option>
  <option value="40">36 tot 40 Kopjes</option>
  <option value="100">100 Kopjes</option>
</select>
<input type="submit" value="Check">
</form>
</body>
</html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$var = $_POST['thee'];

if ($var == 5) {
    ?>
    <img src="images/thee1.jpg">
    <?php
    echo " Je mag nog wat meer als je wilt.";
} elseif ($var == 10) {
    ?>
    <img src="images/thee2.jpg">
    <?php
    echo " Oke dat is al een beetje veel doe rustig aan.";
} elseif ($var == 15) {
    ?>
    <img src="images/niets-tegen-groene.jpg">
    <?php
    echo " Oke ik zei rustig aan maar kijk nu echt uit.";
} elseif ($var == 20) {
    ?>
    <img src="images/baby-yoda.jpg">
    <?php
    echo " Oke nu heb je teveel water op je moet echt stoppen.";
} elseif ($var == 25) {
    ?>
    <img src="images/cursed.jpg">
    <?php
    echo " Hoe vaak ben je al naar het toilet geweest nu?";
} elseif ($var == 30) {
    ?>
    <img src="images/rex.png">
    <?php
    echo " Blaasontsteking?";
} elseif ($var == 35) {
    ?>
    <img src="images/bloody.jpg">
    <?php
    echo " Je mag nog maar een paar kopjes thee op voordat je cafeïne problemen gaat krijgen maar je hebt zeker al te veel water op.";
} elseif ($var == 40) {
    ?>
    <img src="images/bloody.jpg">
    <?php
    echo " Je hebt te veel cafeïne op.";
} elseif ($var == 100) {
    ?>
    <img src="images/helth.png">
    <?php
    echo " Je hebt te veel cafeïne op een bent sterfenden aan een water vergiftiging.";
};
?>