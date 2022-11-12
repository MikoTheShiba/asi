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
        $yeet = "DELETE FROM studentlist WHERE id = $id";
         
        if(mysqli_query($conn, $yeet)){
            echo "<h3>data removed in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
            sleep(3);
            header("Location: studentcontrol.php");
        } else{
            echo "ERROR: Hush! Sorry $yeet. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>