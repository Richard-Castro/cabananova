<?php

session_start();

unset($_SESSION['EMAIL']);
unset($_SESSION['SENHA']);
header("Location: index.php");
?>