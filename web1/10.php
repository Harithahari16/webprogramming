 <?php
$servername = "localhost";
$username = "20mca026";
$password = "2504";
$dbname = "20mca026";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT C_No,C_Name,Purchased_item,Mob_no FROM customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<table border='1'>
<tr>
<th>C_NO</th>
<th>C_NAME</th>
<th>PURCHASED_ITEM</th>
<th>MOB_NO</th>
</tr>";
  
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
echo "<td>".$row['C_No']."</td>";
echo "<td>".$row['C_Name']."</td>";
echo "<td>".$row['Purchased_item']."</td>";
echo "<td>".$row['Mob_no']."</td>";
echo "</tr>";
  }
echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 