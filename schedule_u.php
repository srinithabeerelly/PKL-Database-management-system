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
<head><p>
	<title>SCHEDULES</title>
</head>
<body>
	<button style="background-color:black"><a href="user1st.html" style="color:white">Back</a></button>

	<form action="retrieve_u_sdetails.php" method="post"><table><tr align="center">
            <p style="text-align: center;font-size: 25;">Enter Match Number to get details
            <input type="number" name="match_number" style="width: 300;height: 25;"required><br><br>
            <input type="submit" style="float:center;" value="Submit">
            </p></tr></table>
    </form>

	 <div style="margin-top:30px; style : center" >
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
		$query="select * from schedules";
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