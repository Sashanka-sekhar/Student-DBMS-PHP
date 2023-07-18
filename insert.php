

<?php


include 'connection.php';

// $server="localhost:3306";
// $user="root";
// $pass="root";
// $db="student";

// $con = new mysqli($servername, $username, $password,$db);
// if ($con->connect_error) {
//   die("Connection failed: " . mysqli_connect_error()); 
// }
// echo "Connected successfully";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$part=$_POST['part'];
$add=$_POST['add'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$per=$_POST['per'];
$sql="INSERT INTO blue(FirstName,LastName,dob,parents_name,address,city,phone,percentage) 
VALUES ('$fname','$lname','$dob','$part','$add','$city','$phone','$per')";

$rs = mysqli_query($con, $sql);
echo "<br>";
if($rs)
{
	echo "Contact Records Inserted";
}



?>

