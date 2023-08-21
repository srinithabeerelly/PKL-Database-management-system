<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "kabaddi") or die(mysqli_error($con));
    $match_number=$_POST['match_number'];
    $date=$_POST['date'];
    $team_1=$_POST['team_1'];
    $team_2=$_POST['team_2'];
    $venue=$_POST['venue'];
    
    
    
    $query="insert into schedules(match_number,date,team_1,team_2,venue) values('$match_number','$date','$team_1','$team_2','$venue')";
    if(mysqli_query($con,$query))
    {
    	echo "";
      echo "<script type='text/javascript'>alert('SCHEDULE ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addschedule.html");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR CONSTRAINT FAILED');</script>";
header("refresh: 0.01; url=addschedule.html");
mysqli_error($con);
    }
    ?>
    