<?php
$username = "root";
$password = "";
$database = "student_list";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query1 = "SELECT * FROM studentlist";

echo "<b> <center>Database Output</center> </b> <br> <br>";
?>

<table border="2" align = center>
	<tr>
    <th>STUDENT_ID</th>
	<th>LAST_NAME</th>
	<th>FIRST_NAME</th>
    <th>SECTION</th>
	</tr>
<?php
  if ($result = $mysqli->query($query1)) {
    while ($row = $result->fetch_assoc()) {
        ?>
		  <tr>
		    <td><?php echo $row['id'] ?></td>
			<td><?php echo $row['last_name'] ?></td>
			<td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['section']?></td>
		  </tr>
		<?php
  }
}?>
</table>
<body>

<?php
$id=$first_name=$last_name=$section=""
?>

<h2>ADD SOMETHING NEW TO THE TABLE</h2>
<p><span class="error">* required field</span></p>
<form action="insert.php" method="POST" >  
    ID: <input type="number" name="id" max="99999999">
  <br><br>
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name">
  <br><br>
  Section: <input type="text" name="section">
  <input type="submit" name="submit" value="Submit">  
</form>
<h2>REMOVE SOMETHING INSTEAD</h2>
<form action="remove.php" method="POST">
ID: <input type="number" name="id" max="99999999">
<input type="submit" name="submit" value="Submit">  
</form>
<h2>OR UPDATE SOMETHING (using ID)</h2>
<p><span class="error">* required field</span></p>
<form action="update.php" method="POST" >  
    ID: <input type="number" name="id" max="99999999">
  <br><br>
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name">
  <br><br>
  Section: <input type="text" name="section">
  <input type="submit" name="submit" value="Submit">  
</form>


</body>