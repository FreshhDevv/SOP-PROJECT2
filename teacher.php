<?php
session_start();
include_once('connection.php');


//$con = mysqli_connect('localhost', 'root', '', 'project_db');
//$role     = $con->real_escape_string($_GET['role']);
//$query = "SELECT * FROM  users WHERE role = '$role'";
//$result = mysqli_query($con, $query);
//$resultcheck = mysqli_num_rows($result);
//if ($resultcheck>0 && $result->fetch_assoc()["role"] == "teacher"){
//
//    while ($row = mysqli_fetch_assoc($result)){
//        echo "<h1>Welcome, $row[name]</h1>";
//    }
//}



echo "<h1>Welcome Teacher</h1>";

?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>-->
<!---->
<!--    </title>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--</head>-->
<!--<body>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="expression">Expression</label>
        <input type="text" class="form-control" name="expression" placeholder="Enter Expression" required="">
    </div>
    <div class="form-group">
        <label for="translation">Translation</label>
        <input type="text" class="form-control" name="translation" placeholder="Enter Translation" required="">
    </div>
    <div class="form-group">
        <label for="audioFile">Select Audio</label>
        <input type="file" name="audioFile">
    </div>
    <div class="form-group">
        <label for="save_audio">Upload Audio</label>
        <input type="submit" value="Upload Audio" name="save_audio"/>
    </div>



    <div class="form-group" method = "POST">
        <label for="role">Role:</label>
        <select class="form-control" name="category" required="">
            <option value="">Select Category</option>
            <option value="greetings">Greetings</option>
            <option value="numbers">Numbers</option>
            <option value="general conversations">General Conversations</option>
            <option value="time">Time</option>
            <option value="direction and places">Direction and Places</option>
            <option value="colors">Colors</option>
            <option value="family">Family</option>
            <option value="money">Money</option>
        </select>
    </div>

</form>
<!--</body>-->
<!--</html>-->


<!--<div class="table">-->
<!--    <table align="center" border="1px" style="width: 600px; line: height 40px;">-->
<!--        <tr>-->
<!--            <th colspan="6"><h2>Expressions Record</h2></th>-->
<!--        </tr>-->
<!--        <t>-->
<!--            <th>ID</th>-->
<!--            <th>Expression</th><br>-->
<!--            <th>Translation</th><br>-->
<!--            <th>Category</th><br>-->
<!--            <th>Audio</th><br>-->
<!--            <th>Created_at</th><br>-->
<!--        </t>-->
<!---->
<!--        --><?php
//        //for error display
//        error_reporting(E_ALL);
//        ini_set('display_errors', 1);
//        //open connection to database
//        $con = $con= mysqli_connect('localhost','root','','project_db');
//
//        //sql query to get all records from translations table in database
//        $sql = "SELECT * FROM expressions";
//        //inititalise result to result from query execution
//        $result = mysqli_query($con, $sql);
//        //printing out result to table as long as data exist
//        while($row = mysqli_fetch_assoc($result)):?>
<!--            <tr>-->
<!--                <td>-->
<!--                    --><?php //echo $row['id']?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php //echo $row['expression']?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php //echo $row['translation']?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php //echo $row['category']?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php //echo $row['audio']?>
<!--                </td>-->
<!--                <td>-->
<!--                    --><?php //echo $row['created_at']?>
<!--                </td>-->
<!---->
<!--            </tr>-->
<!--        --><?php //endwhile;?>
    </table>
</div>






<!--</table>-->




<a href="logout.php">Logout</a>
</body>
</html>
