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

<form action="" method="POST">
<label for="energie">Kies het aantal:</label>
<br>

<select name="energie" id="energie">
  <option value="1">1 Blikje</option>
  <option value="2">2 Blikjes</option>
  <option value="3">3 Blikjes</option>
  <option value="4">4 Blikjes</option>
  <option value="5">5 Blikjes</option>
  <option value="6">6 Blikjes</option>
  <option value="7">7 Blikjes</option>
  <option value="8">8 Blikjes</option>
  <option value="9">9 Blikjes</option>
  <option value="10">10 Blikjes</option>
  <option value="100">100 Blikjes</option>
</select>
<input type="submit" value="Check">
</form>
</body>
</html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$var = $_POST['energie'];

if ($var == 1) {
    ?>
    <img src="images/stewie.jpg">
    <?php
    echo "*Minecraft Potion Drinking Sound*";
} elseif ($var == 2) {
    ?>
    <img src="images/redbul.jpg">
    <?php
    echo "proberen wakker te blijfen?";
} elseif ($var == 3) {
    ?>
    <img src="images/y-no-stop.jpg">
    <?php
    echo "";
} elseif ($var == 4) {
    ?>
    <img src="images/before.png">
    <?php
    echo "";
} elseif ($var == 5) {
    ?>
    <img src="images/before.png">
    <?php
    echo "Dit is je limit van cafeïne. STOP.";
} elseif ($var == 6) {
    ?>
    <img src="images/bad.jpg">
    <?php
    echo "HO HO JONGEMAN, Je begint er nu teveel te drinken! Stop hier onmiddelijk mee!";
} elseif ($var == 7) {
    ?>
    <img src="images/kill.jpg">
    <?php
    echo "Stop.";
    echo "Get.";
    echo "Some.";
    echo "Help.";
} elseif ($var == 8) {
    ?>
    <img src="images/noises.jpg">
    <?php
    echo "“/effect give @p minecraft:nausea 99999 0 false”";
} elseif ($var == 9) {
    ?>
    <img src="images/die.jpg">
    <?php
    echo "Energy RUSH!";
} elseif ($var == 10) {
    echo "Misschien is het tijd dat je dit leest?";
    ?>
    <a href="https://www.gezondheidsnet.nl/dorstlessers/5-redenen-waarom-energiedrank-schadelijk-is">Druk hier maar op!</a>
    <img src="images/kyle-memes-27.jpg">
    <?php
} elseif ($var == 100) {
    ?>
    <img src="images/EncFeralGhoulGlowing03.png">
    <?php
    echo " DIT GAAT WEL ECHT TE VER!!!!!! STOP NU ONMIDDELIJK MET DRINKEN!";
}
?>