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
	$sql = "DELETE FROM crud WHERE id = $id";


if ($connect->query($sql) === TRUE)
{   
    echo "Data Deleted Successfully";
    ?>
        <br>
        <a href="index.php">Students List</a>
    <?php
}
else{
    echo "Error:". $connect->error;
}

?>