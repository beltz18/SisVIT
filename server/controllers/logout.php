<?php
@session_start();
session_destroy();
$_SESSION['active'] = FALSE;
$_SESSION['usr']    = null;
header("Location: ../../login.php");