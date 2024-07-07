<?php

require('inc/essentials.php');

session_start();
$_SESSION = array();
session_destroy();
// redirect('index.php');
header("Location: index.php");
exit;
?>