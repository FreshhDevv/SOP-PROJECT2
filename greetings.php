<?php
include_once ('connection.php');

?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

<div class="table">
    <table align="center" border="1px" style="width: 600px; line: height 40px;">
        <tr>
            <th colspan="6"><h2>Expressions Record</h2></th>
        </tr>
        <t>
            <th>ID</th>
            <th>Expression</th><br>
            <th>Translation</th><br>
            <th>Audio</th><br>

        </t>

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
<!---->
<!--                <td>-->
<!--                    --><?php //echo $row['audio']?>
<!--                </td>-->
<!---->
<!---->
<!--            </tr>-->
<!--        --><?php //endwhile;?>




<!--        --><?php
//        $con = $con= mysqli_connect('localhost','root','','project_db');
//        $query="select * from expressions";
//        $result=mysqli_query($con,$query);
//
//        if (isset($_POST['category']))
//        {
//            $greetings = $_POST['greetings'];
//            $query = "SELECT * FROM expressions WHERE category = '$greetings'";
//            $result = mysqli_query($con, $query);
//
//            while ($row = mysqli_fetch_array($result))
//            {
//                ?>
<!--                        <tr>-->
<!--                            <td>-->
<!--                                --><?php //echo $row['id'];?>
<!--                            </td>-->
<!--                            <td>-->
<!--                                --><?php //echo $row['expression'];?>
<!--                            </td>-->
<!--                            <td>-->
<!--                                --><?php //echo $row['translation'];?>
<!--                            </td>-->
<!---->
<!--                            <td>-->
<!--                                --><?php //echo $row['audio'];?>
<!--                            </td>-->
<!---->
<!---->
<!--                        </tr>-->
<!--                --><?//
//            }
//
//        }
//
//        ?>




<!--    </table>-->
<!--</div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</table>-->



        <?php
        $con = $con= mysqli_connect('localhost','root','','project_db');
                $query="select * from expressions";
                $result=mysqli_query($con,$query);
            while ($row = mysqli_fetch_assoc($result))
            {

            }
        ?>
        <tr>
                                        <td>
                                            <?php echo $row['id'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['expression'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['translation'];?>
                                        </td>

                                        <td>
                                            <?php echo $row['audio'];?>
                                        </td>

        </tr>
    </table>



<a href="student.php">Logout</a>



</body>
</html>