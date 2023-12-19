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
    else
    //echo("connect");

// step 4: setup insert sql_regcase	
	$sql = "SELECT * FROM crud";
	
// step 5: save executable sql in a variable.
        $exesql = $connect->query($sql);
    
// step 6: execute the sql and save data in an variable.
    
        ?>
            <table border=1>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th colspan="3">Actions</th>
                </tr>
                <?php
                while($result = $exesql->fetch_assoc())
                {
                ?>
                <tr>
                    <td><?php echo $result['name']?></td>
                    <td><?php echo $result['email']?></td>
                    <td><?php echo $result['address']?></td>
                    <td><?php echo $result['contact']?></td>
                    <td><a href="">Show</a></td>
                    <td><a href="update.php?id=<?php echo $result['id'];?>">Edit</a></td>
                    <td><a href="processdelete.php?id=<?php echo $result['id'];?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            <br>
            <a href="create.php"> create new student </a>