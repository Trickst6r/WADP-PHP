<?php
session_start();

$ten = $_SESSION["username"];
$tuoi = $_SESSION["age"];

echo "<h2> Hello,$ten</h2>";
echo "<h2>Tuoi: $tuoi</h2>";

?>