<html>
<body>
	<button style="background-color:black "><a href="schedule.php" style="color:white">Back</a></button><div style="margin-top:10px; style : center" >
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
<table width="50%" align="center"><tr><th>
		<table align="center">
		   <tr>
			   <th>match_number</th>
			   <th>date</th>
			   <th>team_1</th>
			   <th>team_2</th>
			   <th>venue</th>
		   
		   </tr>
	<?php
	$con=mysqli_connect("localhost","root","","kabaddi");
	$match_number=$_POST['match_number'];
	echo "Details of match for match number $match_number ";
	$query="select * from schedules where match_number='$match_number'";
	$result=mysqli_query($con,$query);
		   if(mysqli_num_rows($result)>0)
		   {
			   while ($row=mysqli_fetch_assoc($result)) {
			   echo "<tr><th>".$row["match_number"]."</th><th>".
			   $row["date"]."</th><th>".
			   $row["team_1"]."</th><th>".
			   $row["team_2"]."</th><th>".$row["venue"]."</th></tr>";
			   }
		   }
		   mysqli_close($con);
		   ?>	   
   
	   
   
   </body>
   </html>