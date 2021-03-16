 <?php
$servername = "localhost";
$username = "20mca026";
$password = "2504";
$dbname = "20mca026";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO STUDENT (name, branch, mark)
VALUES ('John', 'Computer science', '45')";
$sql = "INSERT INTO STUDENT (name, branch, mark)
VALUES ('Anu', 'Commerse', '24')";
$sql = "INSERT INTO STUDENT (name, branch, mark)
VALUES ('Milu', 'Computer science', '35')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 