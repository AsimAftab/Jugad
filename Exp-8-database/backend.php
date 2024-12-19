<?php
$host="localhost";
$username="root";
$password="";
$dbname="studentdatabase";


$conn= new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Failed: " );
	//+ . $conn->connect_error
}

$action=$_POST["action"];

if($action=="insert")
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$course=$_POST['course'];

	

	if(!empty($name) && !empty($age) && !empty($course)){
		$sql="INSERT INTO students (name,age,course) VALUES ('$name','$age','$course')";
		if($conn->query($sql)==TRUE){

			echo "<h3>Record inserted successfully</h3>";
		}
		
		else{
			echo "<h3>Pleaase fill in all details</h3>";
		}
	}

}
elseif ($action=="delete") {
	$name=$_POST['name'];
	$sql="DELETE FROM students WHERE name='$name'";
	$conn->query($sql);
	if($conn->affected_rows>0){
		echo "<h3>Record deleted successfully</h3>";
	}
	else{
	  echo "<h3>No Records Found</h3>";
	}
	
	// code...
} 
elseif($action=="display"){
	$sql="SELECT *FROM students";
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		 echo "<h3>Student Records</h3>";

		 echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Age</th><th>Course</th></tr>";
		 while($row=$result->fetch_assoc()){
		 	echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['course']}</td>";
		 }
		 echo "</table>";

	}else{
		echo "<h3> No Records Found</h3>";
	}
}
$conn->close();
?>