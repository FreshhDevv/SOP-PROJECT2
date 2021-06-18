<?php
include_once('connection.php');


//$con = mysqli_connect('localhost', 'root', '', 'project_db');
//$role     = $con->real_escape_string($_GET['role']);
//$query = "SELECT role * FROM  users;";
//$result = mysqli_query($con, $query);
//$resultcheck = mysqli_num_rows($result);
//if ($resultcheck>0 && $result->fetch_assoc()["role"] == "student"){
//
//    while ($row = mysqli_fetch_assoc($result)){
//        echo "<h1>Welcome, $row[name]</h1>";
//    }
//}
echo "<h1>Welcome Student</h1>";
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<audio controls>
    <source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">
    </source>
</audio>
<div>
    <a href="greetings.php">Greetings</a>
    <a href="numbers.php">Numbers</a>
    <a href="general conversations.php">General Conversations</a>
    <a href="time.php">Time</a>
    <a href="direction and places.php">Direction And Places</a>
    <a href="family.php">Family</a>
    <a href="money.php">Money</a>

</div>






<a href = "index.php">Logout</a>
</body>
</html>