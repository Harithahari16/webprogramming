

<?php
$servername = "localhost";
$username = "20mca026";
$password = "2504";
$dbname = "20mca026";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE Student (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(40) NOT NULL,
Branch VARCHAR(30) NOT NULL,
Mark INT(6) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
echo "Table Student created successfully";
} else {
echo "Error creating table" . mysqli_error($conn);
}
$sql = "INSERT INTO Student (ID, Name, Branch, Mark)
VALUES ('01', 'Arya', 'Computer Science', '98')";
if($conn->query($sql) == TRUE) {
echo "New record created successfuly";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Student (ID, Name, Branch, Mark)
VALUES ('02', 'Riya', 'Civil', '88')";
if($conn->query($sql) == TRUE) {
echo "New record created successfuly";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Student (ID, Name, Branch, Mark)
VALUES ('03', 'Manu', 'Electronics', '92')";
if($conn->query($sql) == TRUE) {
echo "New record created successfuly";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Student (ID, Name, Branch, Mark)
VALUES ('04', 'Diya', 'Computer Science', '68')";
if($conn->query($sql) == TRUE) {
echo "New record created successfuly";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Student (ID, Name, Branch, Mark)
VALUES ('05', 'Everlyn', 'Civil', '85')";
if($conn->query($sql) == TRUE) {
echo "New record created successfuly";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>


