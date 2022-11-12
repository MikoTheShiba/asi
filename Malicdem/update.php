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
        $yeet = "DELETE FROM studentlist WHERE id = $id";
        $fnmup = "UPDATE studentlist SET first_name = '$first_name' WHERE id = $id";
        $lnmup = "UPDATE studentlist SET last_name = '$last_name' WHERE id = $id";
        $secup = "UPDATE studentlist SET section = '$section' WHERE id = $id";
        
        if($first_name != ""){
            mysqli_query($conn, $fnmup);
        }
        if($last_name != ""){
            mysqli_query($conn, $lnmup);
        }
        if($section != ""){
            mysqli_query($conn, $secup);
        }
        sleep(3);
        header("Location: studentcontrol.php");
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>