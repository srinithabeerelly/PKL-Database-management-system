<!DOCTYPE html>
<html>
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
<head>
	<title>PKL_RANKS</title>
</head>
<body>
	<button style="background-color: black"><a href="user1st.html" style="color:white">Back</a></button>

<div style="margin-top:10px; style : center" >
<table width="100%"><tr><th>
 
 	<table width="100%"><tr><th>
		 <p style="align-content: center;">
		 <h1 style="color: #51111">Player Ranking</h1></p></th></tr>
	<table align="center">
		<br>
		<tr>
			<th>player_id</th>
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Raid_points</th>
			<th>Tackle_points</th>
		</tr>
		<?php


		$con=mysqli_connect("localhost","root","","kabaddi");
		$query="select * from player order by (raid_points+tackle_points*2) desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)){ $i=$i+1;
			echo "<tr><th>".$row["player_id"]."</th><th>".
			$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["team_name"]."</th><th>".
			$row["raid_points"]."</th><th>".
			$row["tackle_points"]."</th></tr>";
			}
		}?></table></th><th></table></div>
	

<div style="margin-top:10px; style : center" >
<table width="100%"><tr><th>
 
 	<table width="100%"><tr><th>
		 <p style="align-content: center;">
		 <h1 style="color: #51111">Raider Ranking</h1></p></th></tr>
	<table align="center">
	<br>
		<tr>
			<th>player_id</th>
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Raid_points</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","kabaddi");
		$query="select * from player  where player_type='raider' order by raid_points desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				$player_id = $row["player_id"];
			$q="update player set rank='$i' where player_id='$player_id'";
    		mysqli_query($con,$q);
			echo "<tr><th>".$row["player_id"]."</th><th>".
			$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["team_name"]."</th><th>".
			$row["raid_points"]."</th></tr>";
			}
		}?></table></th><th></table></div>


<div style="margin-top:10px; style : center" >
<table width="100%"><tr><th>

<table width="100%"><tr style="width: 100%"><th>
<p align="center">
	<h1> Defender Ranking</h1>
</p></th></tr>
		<table align="center">
		<br>
		<tr>
			<th>Player_id</th>
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Tackle_points</th>
			
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","kabaddi");
		$query="select * from player  where player_type='defender' order by tackle_points desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				$player_id = $row["player_id"];
			$q="update player set rank='$i' where player_id='$player_id'";
    		mysqli_query($con,$q);
			
			echo "<tr><th>".$row["player_id"]."</th><th>".
			$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["team_name"]."</th><th>".
			$row["tackle_points"]."</th></tr>";
			}
		}?></table></th><th></table></div>
		
<div style="margin-top:10px; style : center" >
<table width="100%"><tr><th>
 
<table width="100%"><tr style="width: 100%"><th>
<p align="center">
	<h1>Allrounder Ranking</h1>
</p></th></tr>

	<table align="center">
	<br>
		<tr>
			<th>Player_id</th>
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Raid_points</th>
			<th>Tackle_points</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","kabaddi");

		$query="select * from player  where player_type='Allrounder' order by (raid_points+tackle_points*2) desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				$player_id = $row["player_id"];
			$q="update player set rank='$i' where player_id='$player_id'";
    		mysqli_query($con,$q);
			
			echo "<tr><th>".$row["player_id"]."</th><th>".
			$row["playername"]."</th><th>".	
			floor($i)."</th><th>".
			$row["team_name"]."</th><th>".
			$row["raid_points"]."</th><th>".
			$row["tackle_points"]."</th></tr>";
			}
		}
	
		mysqli_close($con);
		?>
	</table></th></tr></table></div>