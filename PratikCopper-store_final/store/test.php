<?php
$var=$_POST['stuff'];

echo " stuff is".$var;
echo "qty = ".$_POST['qty'];
include('glob.php');

$_SESSION['carter'][0]->op();
?>