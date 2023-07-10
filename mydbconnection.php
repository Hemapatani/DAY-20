	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="student";
	
	
	$conn = mysqli_connect($servername,$username,$password,$databasename);
	if($conn -> connect_error)
	{
		die($conn -> connect_error);
	}
	else
	{
		echo"Mysql connection successful".'<br/>';
	}

/*	$sql = "INSERT INTO student1(id,Firstname,Lastname,Phone,Email,Password) VALUES('11','pritee','virendrabhai','6678789065','pritee@123.com','718')";
	$sql = "INSERT INTO student1(id,Firstname,Lastname,Phone,Email,Password) VALUES('12','hema','bharatbhai','898956453467','hema@123.com','418')";
	$sql = "INSERT INTO student1(id,Firstname,Lastname,Phone,Email,Password) VALUES('13','sapna','bharatbhai','898956453467','hema@123.com','418')";
	$sql = "INSERT INTO student1(id,Firstname,Lastname,Phone,Email,Password) VALUES('14','chetna','sanjaybhai','789656453467','chetna@123.com','918')";
	
if ($conn->query($sql) === TRUE) 
	{
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

/*$query="SELECT * FROM student1";
$result=$conn->query($query);
if($conn ->error)
{
	echo $conn->error;
}
else{
	echo '<br/>';
	while($row=$result->fetch_assoc())
	{
		echo '<pre/>';
		print_r($row);
		echo "HI" . $row["Firstname"] . "" . $row["Lastname"]."<br>";
	echo implode('|',$row).'<br/>';
	}
}*/
/*$sql ="UPDATE student1 SET Lastname='bharatbhai' WHERE Firstname='hema' ";
if ($conn->query($sql) ===TRUE){
		echo "Record Update successfully";
}
else{
	echo "error updating record";
}*/
$sql = "DELETE FROM student1 WHERE Firstname='hema'";
if ($conn->query($sql)==true)
{
	echo "Record deleted successfully";
}
else{
	echo "Error deleting record:".$conn->error;
}

$conn->close();
?>
