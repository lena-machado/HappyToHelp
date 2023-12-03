<?php
session_destroy();
session_start();
$_SESSION['userName'] = null;
header('Location: ./index.php');
exit();
?>