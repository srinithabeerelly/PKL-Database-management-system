<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "kabaddi") or die(mysqli_error($con));

    $venue_name=$_POST['venue_name'];
    $sql="DELETE from venue where venue_name='$venue_name'";
    if(mysqli_query($con,$sql))
    {
       
        echo "<script type='text/javascript'>alert('venue deleted successfully!!');</script>";
      header("refresh: 0.01; url=deletevenue.html");
    
}
else{
    echo "error";
    header("refresh: 0.01; url=deletevenue.html");
    
}
?>    



