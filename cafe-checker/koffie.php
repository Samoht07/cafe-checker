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
<label for="koffie">Kies het aantal:</label>
<br>

<select name="koffie" id="koffie">
  <option value="2">1 tot 2 kopjes</option>
  <option value="4">3 tot 4 Kopjes</option>
  <option value="6">5 tot 6 Kopjes</option>
  <option value="8">7 tot 8 Kopjes</option>
  <option value="10">9 tot 10 Kopjes</option>
  <option value="12">11 tot 12 Kopjes</option>
  <option value="100">100 Kopjes</option>
</select>
<input type="submit" value="Check">
</form>
</body>
</html>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$var = $_POST['koffie'];

if ($var == 2) {
    ?>
    <img src="images/kitten.jpg">
    <?php
    echo "Slechte ochtend?";
} elseif ($var == 4) {
    ?>
    <img src="images/owl.jpg">
    <?php
    echo "Beetje stress?";
} elseif ($var == 6) {
    ?>
    <img src="images/owl.jpg">
    <?php
    echo "Iets te veel.";
} elseif ($var == 8) {
    ?>
    <img src="images/you-can-do-it-no-more-caffeine.png">
    <?php
    echo "Beetje oppassen!";
} elseif ($var == 10) {
    ?>
    <img src="images/stitch-caffeine.jpg">
    <?php
    echo "Dat mag echt niet! Dit is te veel!!!";
} elseif ($var == 12) {
    ?>
    <img src="images/stop-coffee.jpg">
    <?php
    echo "STUITEREN!!!!!";
} elseif ($var == 100) {
    ?>
    <img src="images/no-more-coffee-for-you.jpg">
    <?php
    echo "How are you alive?????";
}
?>