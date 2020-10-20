<?php
session_start();
unset($_SESSION['auth']);
unset($Session['id']);
header("location:index.php");
?>