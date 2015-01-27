<?php 

// Create connection
$conn = new mysqli('127.0.0.1:3306', 'root', '', 'DanceRegistration');
if ($conn->connect_errno) {          
  printf("Connect failed: %s\n", $conn->connect_error);
exit();
}

$get = "select * from Registration";
$getresult = $conn->query($get);

if ($getresult->num_rows > 0) {
    // While not empty, fetch results from each row from 'results' and print
    while($row = $getresult->fetch_assoc()) {
        echo 
        	"***Student's name: " . $row["FirstName"]. " ". $row["LastName"].
        	" - Has paid: " . $row["HasPaid"].
        	" - Has date: " . $row["HasDate"]. 
        	" - Grade: " . $row["Grade"].
        	" - Student's parent's name: " . $row["ParentFirstName"]. " ". $row["ParentLastName"].
        	" - Student's parent's phone: " . $row["ParentPhone"].
        	" - Date's name: " . $row["DateFirstName"]. " ". $row["DateLastName"].
        	" - Date's school: " . $row["DateSchool"].
        	" - Date's parent's name: " . $row["DateParentFirstName"]. " ". $row["DateParentLastName"].
        	" - Date's parent's phone: " . $row["DateParentPhone"].
        	"\n <br/>";
    }
} 

else {
    echo "0 results";
}

$conn->close();
?>