<html>
<body>
	<button style="background-color:black "><a href="stadium.php" style="color:white">Back</a></button><div style="margin-top:10px; style : center" >
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
			   <th>venue_name</th>
			   <th>capacity</th>
			   <th>DOI</th>
			   <th>city</th>
			   <th>home_team</th>
		   
		   </tr>
	<?php
	$con=mysqli_connect("localhost","root","","kabaddi");
	$venue_name=$_POST['venue_name'];
	echo "Details of match for match number $venue_name ";
	$query="select * from venue where venue_name='$venue_name'";
	$result=mysqli_query($con,$query);
		   if(mysqli_num_rows($result)>0)
		   {
			   while ($row=mysqli_fetch_assoc($result)) {
			   echo "<tr><th>".$row["venue_name"]."</th><th>".
			   $row["capacity"]."</th><th>".
			   $row["DOI"]."</th><th>".
			   $row["city"]."</th><th>".$row["home_team"]."</th></tr>";
			   }
		   }
		   mysqli_close($con);
		   ?>	   
   
	   
   
   </body>
   </html>