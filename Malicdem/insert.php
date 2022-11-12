<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "student_list");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $id = $_REQUEST['id'];
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $section = $_REQUEST['section'];
        $add = "INSERT INTO studentlist(id, last_name, first_name, section) VALUES ($id, '$last_name', '$first_name', '$section')";
         
        if(mysqli_query($conn, $add)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$id\n $last_name\n "
                . "$first_name\n $section");
            sleep(3);
            header("Location: studentcontrol.php");
        } else{
            echo "ERROR: Hush! Sorry $add. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>