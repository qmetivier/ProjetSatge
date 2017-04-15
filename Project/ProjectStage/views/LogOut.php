<?php 
session_start();
$PageNow = $_SESSION['pageNow'];
session_destroy();
header('Location: ../'.$PageNow.'');
 ?>