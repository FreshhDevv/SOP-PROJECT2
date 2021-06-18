<?php

include_once('connection.php');
include_once('teacher.php');

if (isset($_POST['save_audio']) && ($_POST['save_audio'])&& $_POST['save_audio']=="Upload Audio") {

    $expression = $con->real_escape_string($_POST['expression']);
    $translation = $con->real_escape_string($_POST['translation']);
    $category = $con->real_escape_string($_POST['category']);



//    $dir='uploads/';
//    $audio_path=$dir.basename($_FILES['audioFile']['name']);
//
//    if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
//    {
//        echo 'uploaded successfully.';
//
//        saveAudio($audio_path);
//        displayAudios();
//
//    }



    $query = "select * from expressions where (expression ='$expression' or translation ='$translation' or category = $category);";

    $result = $con->query($query);

    if ($result != false && $result->num_rows > 0) {

        $row = mysqli_fetch_assoc($result);
//        if ($expression == isset($row['expression']) || $translation==isset($row['translation'])) {
//            echo "<script>alert('Oops!..Expression already exists, please try something else.')</script>";
//        }

    } else {
//        $query = "INSERT INTO expressions(expression ,translation,category) VALUES ('$expression','$translation','$category')";
//        $result = $con->query($query);

        $con =  mysqli_connect('localhost','root','','project_db');

        if (!$con) {
            die("server not connected" );
        }

        $query="select * from expressions where (name='$expression' or email='$translation');";

        $result = $con->query($query);


//        if ($expression == isset($row['expression']) || $translation==isset($row['translation'])) {
//            echo "<script>alert('Oops!..Expression already exists, please try something else.')</script>";
//        }

        if ($result != false && $result->num_rows > 0) {

            $row = mysqli_fetch_assoc($result);
            if($expression==isset($row['expression']) || $translation == isset($row['translation']))
            {
                echo "<script>alert('Oops!..Username or Email already exists, please try something else.')</script>";
            }
//        elseif ($name==isset($row['name']))
//        {
//            echo "<script>alert('Oops! Username already exists, please try something else.')</script>";
//        }
        }




        else{
            $query="insert into expressions(expression , translation , category, audio)values('$expression', '$translation', '$category', 'audio')";
            mysqli_query($con,$query);
        }
//        mysqli_query($con,$query);
        if(mysqli_affected_rows($con)>0)
        {
            echo "<h2>Expression and audio file path saved to database</h2>";

        }
        mysqli_close($con);




    }
}










//if(isset($_POST['save_audio'])&& $_POST['save_audio']=="Upload Audio")
//{
//    $dir='uploads/';
//    $audio_path=$dir.basename($_FILES['audioFile']['name']);
//
//    if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
//    {
//        echo 'uploaded successfully.';
//
//        saveAudio($audio_path);
//        displayAudios();
//
//    }
//}
function displayAudios()
{
    $con=mysqli_connect('localhost','root','','project_db');
    if(!$con)
    {
        die('Server not connected');
    }

    $query="select * from expressions";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        echo '<a href="play.php?name='.$row['audio'].'">'.$row['audio'].'</a>';
        echo "<br/>";
    }
    mysqli_close($con);

}

function saveAudio($audio)

{
   $con =  mysqli_connect('localhost','root','','project_db');

    if (!$con) {
        die("server not connected" );
    }
   $query="insert into expressions(audio)values('{audio}')";
    mysqli_query($con,$query);
   if(mysqli_affected_rows($con)>0)
   {
       echo "audio file path saved to database";

    }
   mysqli_close($con);

}
?>