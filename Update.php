
<!doctype html>
<html>
<head>
</head>
<body>
<?php


 
include 'connection.php';


$uphone=$_POST['uphone'];
if(isset($_GET['edit'])){
    $id= $_GET['edit'];
  $uphone=$id;
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$part=$_POST['part'];
$add=$_POST['add'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$per=$_POST['per'];
$sql="UPDATE blue SET FirstName='$fname',LastName='$lname',dob='$dob',parents_name='$part',address='$add',city='$city',phone='$phone',percentage='$per' WHERE id='$uphone'";
echo "<br>";
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Updated where id='$uphone'";
}
?>
</body>
</html>




