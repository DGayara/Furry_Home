<?php
session_start();
session_unset();
session_destroy();
header("Location: H1.php"); 
exit();
?>
