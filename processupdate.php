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

// step 4: save user to variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $id = $_GET['id'];

// step 5: setup insert SQL
$sql ="UPDATE crud SET name = '$name', email = '$email',
 password = '$password', address = '$address', contact = '$contact'
  WHERE id = $id";

// step 6: run the sql to insert data into database
if ($connect->query($sql) === TRUE)
{   
    echo "Data Updated Successfully";
    ?>
        <br>
        <a href="index.php">Users List</a>
    <?php
}
else{
    echo "Error:". $connect->error;
}

?>