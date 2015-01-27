<?php 
// Create connection
header('Location:http://127.0.0.1:8020/DanceRegistration/SuccessPage.html');
$conn = new mysqli('127.0.0.1:3306', 'root', '', 'DanceRegistration');
if ($conn->connect_errno) {          
  printf("Connect failed: %s\n", $conn->connect_error);
exit();
}

//$post = "insert into Registration values ('Fiona', 'Tanuwidjaja','12','Mieke','Irawati','4253065652','1','Johnny','Appleseed','Garfield HS','Senior','Appleseed','2060000000','0')";
$post = "insert into Registration 
	values ('$_POST[FirstName]', '$_POST[LastName]', '$_POST[Grade]',
			'$_POST[ParentFirstName]', '$_POST[ParentLastName]', '$_POST[ParentPhone]',
			'$_POST[HasDate]', '$_POST[DateFirstName]', '$_POST[DateLastName]', '$_POST[DateSchool]', 
			'$_POST[DateParentFirstName]', '$_POST[DateParentLastName]', '$_POST[DateParentPhone]', 0)"; 
			
if (!mysqli_query($conn,$post)) {
  die('Error: ' . mysqli_error($conn));
}

$conn->close();
?>