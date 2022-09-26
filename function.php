<?php require_once("header.php"); ?>


<?php
dateFunction();

function dateFunction()
{
  echo "Today is " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l");
}
?>

