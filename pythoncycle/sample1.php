<html>
<form method="post" >
Name: <input type="text" name="txtName">
<input type="submit" name="btnSubmit" value="Save">
</form>
<html>

<?php
$servername = "localhost";
$username = "20mca027";
$password = "2514";
$dbname = "20mca027";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST["btnSubmit"]))
{

$name = $_POST["txtName"];

$sql ="insert into Test_Insert (Name) values ('$name'); ";
echo $sql ;

    mysqli_query($conn, $sql);

}