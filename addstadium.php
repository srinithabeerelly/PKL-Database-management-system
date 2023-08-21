<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "kabaddi") or die(mysqli_error($con));

    $venue_name=$_POST['venue_name'];
    $capacity=$_POST['capacity'];
    $DOI=$_POST['DOI'];
    $city=$_POST['city'];
    $home_team=$_POST['home_team'];
    
    

    $query="insert into venue(venue_name,capacity,DOI,city,home_team) values('$venue_name','$capacity','$DOI','$city','$home_team')";
    if(mysqli_query($con,$query))
    {
    	
      echo "<script type='text/javascript'>alert('VENUE ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addstadium.html");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addstadium.html");
        mysqli_error($con);
    }
    ?>
    