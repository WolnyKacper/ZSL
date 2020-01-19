<?php
session_start();

echo ucfirst(strtolower(trim($_SESSION['color']))),"<br>";
echo ucfirst(strtolower(trim($_SESSION['city']))),"<br>";
echo ucfirst(strtolower(trim($_SESSION['name']))),"<br>";
?>
