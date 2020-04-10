<?php
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
?>
<?php
$servername = "localhost";
$username = "ca2";
$password = "pass";
$dbname = "assignment2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select  job from jobportal where skill1='$skill1' and skill2='$skill2'";
if ($result=mysqli_query($conn, $sql)) {
    $arr=mysqli_fetch_assoc($result);
    $string=join(',',$arr);
    
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


?>
<form>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<table border="1" align="center" width="600px">
<tr>
<td>skill1</td>
<td>skill2</td>
<td>job</td>
</tr>

<tr>
<td><?php echo $skill1;?></td>
<td><?php  echo $skill2;?></td>
<td><?php echo $string;?></td>
</tr>
</table>
</form>
