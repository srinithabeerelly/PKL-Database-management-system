<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "kabaddi") or die(mysqli_error($con));

    $match_number=$_POST['match_number'];
    $sql="delete from schedules where match_number='$match_number'";
    if(mysqli_query($con,$sql)>0)
    {
    	echo "<script type='text/javascript'>alert('SCHEDULE DELETED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=deleteschedule.html");
    
}
else{
	echo "error";
	header("refresh: 0.01; url=deleteschedule.html");
    
}
?>    


