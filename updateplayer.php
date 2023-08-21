<?php

    

session_start();

$con = mysqli_connect("localhost", "root", "", "kabaddi") or die(mysqli_error($con));

$player_id=$_POST['player_id'];
$no_of_matches=$_POST['no_of_matches'];
$raid_points=$_POST['raid_points'];
$tackle_points=$_POST['tackle_points'];
$highest_raid_points=$_POST['highest_raid_points'];
$highest_tackle_points=$_POST['highest_tackle_points'];


$query="update player set no_of_matches='$no_of_matches',raid_points='$raid_points',tackle_points='$tackle_points',highest_raid_points='$highest_raid_points',highest_tackle_points='$highest_tackle_points' where player_id='$player_id'";
if(mysqli_query($con,$query))
{
    echo "<script type='text/javascript'>alert('PLAYER DETAILS UPDATED SUCCESSFULLY!!');</script>";
    header("refresh: 0.01; url=updateplayer.html");
}
else
{
      echo "<script type='text/javascript'>alert('ERROR');</script>";
    header("refresh: 0.01; url=updateplayer.html");
       mysqli_error($con);
}
?>