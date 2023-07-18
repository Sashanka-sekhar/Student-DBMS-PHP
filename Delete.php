<?php

$uinclude 'connection.php';

$num=$_POST['id'];
$sql="DELETE FROM blue WHERE id='$num';";
$rs = mysqli_query($con, $sql);

if($rs)
{
	 echo " one row deleted";
}

?>