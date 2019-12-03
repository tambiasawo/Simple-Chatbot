<?php

$uname =$_REQUEST['name'];

$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con, 'chatbox');
$msg = mysqli_real_escape_string($con, $_REQUEST['msg']);

mysqli_query($con,"INSERT INTO logs (`username`, `msg`) VALUES ('$uname', '$msg')");

$result=mysqli_query("SELECT * FROM logs ORDER BY id DESC");

while($row = mysqli_fetch_array($result))
{
	echo "<span class = 'uname'>". $row['username']."</span>".": <span class = 'msg'>" .$row['msg'] . "</br>". "</span>";
}
?>