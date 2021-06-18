<?php
session_start();
//if (isset($_SESSION['ID'])) {
//    header("Location:dashboard.php");
//    exit();
//}
// Include database connectivity

include_once('connection.php');

if (isset($_POST['submit'])) {

    $errorMsg = "";

    $name = $con->real_escape_string($_POST['name']);
    $password = $con->real_escape_string(md5($_POST['password']));


    if(!empty($name) && !empty($password) ){
        $query  = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
        $result = $con->query($query);
        if($result->num_rows > 0 && $result->fetch_assoc()["role"] == "student"){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            header("Location:student.php");
            die();
        }else{
            echo "<script>alert('Woops! Name or Password is Wrong')</script>";
        }
    }
    if (!empty($name) && !empty($password) ) {
        $query  = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
        $result = $con->query($query);
        if($result->num_rows > 0 && $result->fetch_assoc()["role"] == "teacher"){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            header("Location:teacher.php");
            die();
        }
//         else{
//            echo "<script>alert('')"
//        }
        else{
            echo "<script>alert('Oops! Name or Password is Wrong')</script>";
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="card text-center" style="padding:20px;">
    <h1>Login</h1>
</div><br>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <p>Not registered yet ?<a href="index.php"> Register here</a></p>
                    <input type="submit" name="submit" class="btn btn-success" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>