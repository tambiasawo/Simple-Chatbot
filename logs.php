<?php


$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con, 'chatbox');

$result=mysqli_query($con, "SELECT * FROM logs ORDER BY id DESC");

while($row = mysqli_fetch_array($result))
{
	echo "<span class = 'uname'>". $row['uname']."</span>".": <span class = 'msg'>" .$row['msg'] . "</br>". "</span>";
}
?>