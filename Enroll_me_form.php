<form method="POST" action="">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<input type="file" name="myimage" required>

<br>
Name:
<input name="name" type="text" required>
<br>
BirthDate:
<input name="birthdate" type="date" required>
<br>
Gender: 
Male:<input name="gender" type="radio" value="male">
Female:<input name="gender" type="radio" value="female">
Other:<input name="gender" type="radio" value="other">
<br>
Habbits:	
<input type="text" name="habbits" >
<br>
Address:
<input type="text" name="address">
<br>
Name of parent:
<input type="text" name="parent_1" >
<br>
Relation with children:
<input type="text" name="relation_1" >
<br>
Occupation of Parent:
<input type="text" name="occupation_1" >
<br>
Office Address:
<input type="text" name="officeaddress_1" >
<br>
Contacts:
<input type="text" name="contacts_1" >
<br>
Name of parent:
<input type="text" name="parent_2">
<br>
Relation with children:
<input type="text" name="relation_2">
<br>
Occupation of Parent:
<input type="text" name="occupation_2">
<br>
Office Address:
<input type="text" name="officeaddress_2">
<br>
Contacts:
<input type="text" name="contacts_2">
<br>
Start Date:
<input type="date" name="start_date" >
<br>
End Date:
<input type="date" name="end_date">
<br>
Status:
<input type="text" name="status" >
<br>
Standard:
<input type="text" name="standard" >
<br>
Charges:
<input type="text" name="charges">
<br>
<input type="submit" value="submit form">
</form>

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enroll_me";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO information (Name,Birthdate,Gender,Habbits,Address,Name1,Relation1,Occupation1,officeaddress1,contacts1,Name2,Relation2,Occupation2,officeaddress2,contacts2,Startdate,Enddate,Status,Standard,charges,image) VALUES ('{$conn->real_escape_string($_POST['name'])}','{$conn->real_escape_string($_POST['birthdate'])}','{$conn->real_escape_string($_POST['gender'])}','{$conn->real_escape_string($_POST['habbits'])}','{$conn->real_escape_string($_POST['address'])}','{$conn->real_escape_string($_POST['parent_1'])}','{$conn->real_escape_string($_POST['relation_1'])}','{$conn->real_escape_string($_POST['occupation_1'])}','{$conn->real_escape_string($_POST['officeaddress_1'])}','{$conn->real_escape_string($_POST['contacts_1'])}','{$conn->real_escape_string($_POST['parent_2'])}','{$conn->real_escape_string($_POST['relation_2'])}','{$conn->real_escape_string($_POST['occupation_2'])}','{$conn->real_escape_string($_POST['officeaddress_2'])}','{$conn->real_escape_string($_POST['contacts_2'])}','{$conn->real_escape_string($_POST['start_date'])}','{$conn->real_escape_string($_POST['end_date'])}','{$conn->real_escape_string($_POST['status'])}','{$conn->real_escape_string($_POST['standard'])}','{$conn->real_escape_string($_POST['charges'])}','{$conn->real_escape_string($_POST['myimage'])}')";
if ($conn->query($sql) === TRUE) {
    echo "newest record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
