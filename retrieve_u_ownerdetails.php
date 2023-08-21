<html>
<body>
	<button style="background-color:black "><a href="team_u.php" style="color:white">Back</a></button><div style="margin-top:10px; style : center" >
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
			   <th>owner</th>
			   <th>team</th>
			   <th>D_O_A</th>

		   
		   </tr>
	<?php
	$con=mysqli_connect("localhost","root","","kabaddi");
	$owner_name=$_POST['owner_name'];
	echo "Details of team_owner for team whose owner is $owner_name ";
	$query="select * from team_owners where owner='$owner_name'";
	$result=mysqli_query($con,$query);
		   if(mysqli_num_rows($result)>0)
		   {
			   while ($row=mysqli_fetch_assoc($result)) {
			   echo "<tr><th>".$row["owner"]."</th><th>".
			   $row["team"]."</th><th>".
		       $row["D_O_A"]."</th></tr>";
			   }
		   }
		   mysqli_close($con);
		   ?>	   
   
	   
   
   </body>
   </html>