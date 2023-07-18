

<?php
include 'connection.php';

$fetchData= fetch_data($con);
// fetch query
function fetch_data($con){
  $query="SELECT * from blue WHERE percentage >=60 ORDER BY id DESC";
  $exec=mysqli_query($con, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }
  else{
    return $row=[];
  }
}


if(isset($_GET['delete'])){
    $id= $_GET['delete'];
  delete_data($con, $id);
}
// delete data query
function delete_data($con, $id){
   
    $query="DELETE from blue WHERE id=$id";
    $exec= mysqli_query($con,$query);
    if($exec){
      header('location:Show.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($con);
      echo $msg;
    }
}

?>
<!doctype html>
<html>
<head>
<style>
     table, td, th {  
      border: 1px solid #ddd;
      text-align: center;
    }
    
    table {
      border-collapse: collapse;
      max-width: 100%;
     width:90%;
    }
    .table-data{
      
      width:65%;
      float: center;
    }
    th{
      padding: 15px;
	  background-color: black;
	  color: white;
    }
	 td {
      padding: 15px;
    }
body{
    overflow-x: hidden;
	
}
* {
  box-sizing: border-box;}
  #id:before{
	  content: attr(data-hover);
     visibility: hidden;
	  transition: opacity 1s ease-in-out;
  }
</style>
</head>
<body align="center">
<form action="" method="get">
<div class="table-data">
        <div class="list-title">
 <h2>CRUD List</h2>
         
            </div>
    <table border="1" align="center">
        <tr>
            <th>S.N</th>
			<th>id</th>
            <th>FirstName</th>
			<th>LastName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
			<th>Gender</th>
			<th>Designation</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
<?php
        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['FirstName']; ?></td>
<td><?php echo $data['LastName']; ?></td>
<td><?php echo $data['dob']; ?></td>
<td><?php echo $data['parents_name']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><?php echo $data['phone']; ?></td>
<td><?php echo $data['percentage']; ?></td>
<td><a href="Update.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="Show60.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> <?php
      $sn++; }
      }else{
            
?>
      <tr>
        <td colspan="10">No Data Found</td>
      </tr>
                
<?php
    }
?>
 
    </table>
    </div>
</form>
<br><br>
<span id="id" data-hover="Return to Main Menu">
<a href="CRUD.html"><img src="home.gif"  width="50" 
     height="50" /></a>
	 </span>

</body>
</html>