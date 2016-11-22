<?php
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION['name']) !="0") {
header('Location: index.php');
}
?>