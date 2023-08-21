<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "kabaddi") or die(mysqli_error($con));

$player_id=$_POST['player_id'];
$sql="delete from player where player_id='$player_id'";
if(mysqli_query($con,$sql)>0)
{
	echo "<script type='text/javascript'>alert('PLAYER DELETED SUCCESSFULLY!!');</script>";
  header("refresh: 0.01; url=deleteplayer.html");

}
else{
echo "error";
header("refresh: 0.01; url=deleteplayer.html");

}
?>    


