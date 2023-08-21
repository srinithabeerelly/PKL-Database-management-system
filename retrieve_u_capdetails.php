<html>
<body>
	<button style="background-color:black "><a href="user1st.html" style="color:white">Back</a></button><div style="margin-top:10px; style : center" >
<style >
	body{
		background: lightblue;
	}
	table{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
</style>
<table width="80%" align="center"><tr><th>
		<table align="center">
		   <tr>
			   <th>player_id</th>
			   <th>playername</th>
			   <th>dob</th>
			   <th>no_of_matches</th>
			   <th>player_type</th>
               <th>raid_points</th>
               <th>tackle_points</th>
               <th>highest_raid_points</th>
               <th>highest_tackle_points</th>
               <th>team_name</th>
		   </tr>
<?php
$con = mysqli_connect("localhost", "root", "", "kabaddi");
$player_id=$_POST['player_id'];
echo "Details of player with captain_id $player_id are";
$query="select * from player where player_id ='$player_id'";

	$result=mysqli_query($con,$query);
		   if(mysqli_num_rows($result)>0)
		   {
			   while ($row=mysqli_fetch_assoc($result)) {
			   echo "<tr><th>".$row["player_id"]."</th><th>".
			   $row["playername"]."</th><th>".
			   $row["dob"]."</th><th>".
			   $row["no_of_matches"]."</th><th>".
               $row["player_type"]."</th><th>".
               $row["raid_points"]."</th><th>".
               $row["tackle_points"]."</th><th>".
               $row["highest_raid_points"]."</th><th>".
               $row["highest_tackle_points"]."</th><th>".
               $row["team_name"]."</th></tr>";
			   }
		   }

           else
{
     echo "<script type='text/javascript'>alert('PLAYER NOT FOUND!!');</script>";
      header("refresh: 0.01; url=user1st.html");
    
}
		   mysqli_close($con);
		   ?>	   
   
	   
   
   </body>
   </html>


