<?php
// step 1: server and db details
	$server = "localhost";
	$database = "ismt";
	$user = "root";
	$password = "";

// step 2: save connection instance in a variable
$connect = new mysqli($server, $user, $password, $database);

// step 3: check the connection
if ($connect->connect_error)
{
    die("Connection failed:");
}

// step 4: Get id of the necessary articles
	$id = $_GET['id'];

// step 5: setup select sql query
	$sql = "SELECT * FROM crud WHERE id = $id";

// step 6: save executable sql in a variable.
$exesql = $connect->query($sql);

// step 7: execute the sql and save data in an variable.
$result = $exesql->fetch_assoc();
?>

<form action="processupdate.php?id=<?php echo $result['id'];?>" method="POST">
	Name:<br>
	<input name="name" value="<?php echo $result['name'];?>"><br>
	Email:<br>
	<input name="email" value="<?php echo $result['email'];?>"><br>
	Password:<br>
	<input name="password" value="<?php echo $result['password'];?>"><br>
    Address:<br>
	<input name="address" value="<?php echo $result['address'];?>"><br>
    Contact:<br>
	<input name="contact" value="<?php echo $result['contact'];?>"><br>
	<br>
	<input type="submit" value="Update">

</form>