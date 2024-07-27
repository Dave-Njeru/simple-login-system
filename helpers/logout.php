<?php
require 'redirect.php';

session_start();

//remove sesiion varaibles
session_unset();

//destroy session
session_destroy();

redirect('../views/login.php');
?>
