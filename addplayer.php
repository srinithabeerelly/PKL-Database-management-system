<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "kabaddi") or die(mysqli_error($con));

    $player_id=$_POST['player_id'];
    $playername=$_POST['playername'];
    $dob=$_POST['dob'];
    $no_of_matches=$_POST['no_of_matches'];
    $player_type=$_POST['player_type'];
    $raid_points=$_POST['raid_points'];
    $tackle_points=$_POST['tackle_points'];
    $highest_raid_points=$_POST['highest_raid_points'];
    $highest_tackle_points=$_POST['highest_tackle_points'];
    $team_name=$_POST['team_name'];
    

    $query="insert into player(player_id,playername,dob,no_of_matches,player_type,raid_points,tackle_points,highest_raid_points,highest_tackle_points,team_name) values('$player_id','$playername','$dob','$no_of_matches','$player_type','$raid_points','$tackle_points','$highest_raid_points','$highest_tackle_points','$team_name')";
    if(mysqli_query($con,$query))
    {
        echo "<script type='text/javascript'>alert('NEW PLAYER ADDED SUCCESSFULLY!!');</script>";
        header("refresh: 0.01; url=addplayer.html");
    }
    else
    {
    	  echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addplayer.html");
     	  mysqli_error($con);
    }
    ?>

    