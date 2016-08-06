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

$sql = "SELECT id,Name FROM information";
$result = $conn->query($sql);
$var=Nap;
$var1=Food;
$var2=Potty;
$var3=Play;

//if ($result->num_rows > 0) {
    // output data of each row
	//$i=1;
   // while($row = $result->fetch_assoc()) {
		?>
		<pre>
		<?php
        //echo "id: " . $row["id"]. " - Name: " . $row["Name"];
		?>
		<form method="POST" action="">
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<br>
		Dance:
		  <input name="Dance" type="text" >
   		Group Singing:
		  <input name="Sing" type="text" >
		Group Poetry:
		  <input name="Poem" type="text" >
		Drawing:
		  <input name="Draw" type="text" >
		<br>
	<input type="submit" value="submit form">
	</form>
	<?php
	//else {
   // echo "0 results";
?>
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
echo "AAYA";
/*$query  = "SELECT image FROM information WHERE id='65' ";		
	$result = $conn->query($query);
	echo "<br /> '$query' <br />";
//  Decode result	
//  Retrieve image
	$row     = $result->fetch_assoc();	 
	$content = $conn->real_escape_string($row[image]); 	
//	Display image
	echo $content;*/
	
	$sql = "SELECT id,Food,Potty,Play,Nap FROM information";
	$result = $conn->query($sql);
		$i=1;
if ($result->num_rows > 0) {
	$i=1;
	//$sql = "INSERT INTO information ( Food , Potty ,Nap , Play ) VALUES ( '{$conn->real_escape_string($_POST["$var.$i"])}', '{$conn->real_escape_string($_POST["$var1.$i"])}', '{$conn->real_escape_string($_POST["$var2.$i"])}','{$conn->real_escape_string($_POST["$var3.$i"])}')";
	while($row = mysqli_fetch_array($result)) {
	//$result->fetch_assoc()
	//$sql = "INSERT INTO information ( $row['Food'] , $row['Potty'] ,$row['Nap'] , $row['Play'] ) VALUES ('yes','yes','yes','yes')";
		//$sql = "INSERT INTO information ( $row[Food] , $row[Potty] ,$row[Nap] , $row[Play] ) VALUES ('yess','yess','yess','yess')";
		//$sql="INSERT INTO information (Food, Potty, Nap) VALUES('{$conn->real_escape_string($_POST['Dance'])}', '{$conn->real_escape_string($_POST['Sing'])}', '{$conn->real_escape_string($_POST['Poem'])}') ON DUPLICATE KEY UPDATE Food='aaw', Potty='aaw'";
		$sql="UPDATE information SET Dance = '{$conn->real_escape_string($_POST['Dance'])}', Sing = '{$conn->real_escape_string($_POST['Sing'])}', Poem='{$conn->real_escape_string($_POST['Poem'])}',Draw='{$conn->real_escape_string($_POST['Draw'])}'";


	$i++;
	}
}
if ($conn->query($sql) === TRUE) {
    echo "newest record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>