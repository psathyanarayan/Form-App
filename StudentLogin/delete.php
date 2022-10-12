<?php
include("db.php");


$getid = $_GET['deleteid'];

$sel = "DELETE FROM `cec2023` WHERE `eroll` = '$getid'"; 
$qry = mysqli_query($conn, $sel);

if($qry) {
	header("location: data.php");
}


?>