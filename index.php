<?php

// Include database connection file

include_once('connection.php');

if (isset($_POST['submit'])) {

    $name = $con->real_escape_string($_POST['name']);
    $email     = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string(md5($_POST['password']));
    $role     = $con->real_escape_string($_POST['role']);



//    if ($result->num_rows > 0) {
//        $name_error = "Sorry... username already taken";
//    }else if($result->num_rows > 0){
//        $email_error = "Sorry... email already taken";
//    } else {
//
//    }




    $query="select * from users where (name='$name' or email='$email');";

    $result = $con->query($query);

    if ($result->num_rows > 0) {

        $row = mysqli_fetch_assoc($result);
        if($name==isset($row['name']) || $email == isset($row['email']))
        {
            echo "<script>alert('Oops!..Username or Email already exists, please try something else.')</script>";
        }
//        elseif ($name==isset($row['name']))
//        {
//            echo "<script>alert('Oops! Username already exists, please try something else.')</script>";
//        }
    }else{
        $query  = "INSERT INTO users(name,email,password,role) VALUES ('$name','$email','$password','$role')";
        $result = $con->query($query);





        if ($result==true) {
            header("Location:login.php");
            die();
        }else{
            $errorMsg  = "You are not Registered..Please Consider Registering";
        }
    }








}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h1>Welcome!!</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php if (isset($errorMsg)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $errorMsg; ?>
                </div>
            <?php } ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required="">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control" name="role" required="">
                        <option value="">Select Role</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>Already have account ?<a href="login.php"> Login</a></p>
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>