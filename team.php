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
	<title>teams</title>
</head>
<body>
	<button style="background-color: black"><a href="admin1st.html" style="color:white">Back</a></button>

	<form action="retrieve_capdetails.php" method="post"><table><tr align="center">
            <p style="text-align: center;font-size: 25;">Enter Capitan Id to get details
            <input type="number" name="player_id" style="width: 300;height: 25;" required><br><br>
            <input type="submit" style="float:center;" value="Submit">
            </p></tr></table>
    </form>

	<form action="retrieve_ownerdetails.php" method="post"><table><tr align="center">
            <p style="text-align: center;font-size: 25;">Enter owner_name to get owner details
            <input type="text" name="owner_name" style="width: 300;height: 25;"required><br><br>
            <input type="submit" style="float:center;" value="Submit">
            </p></tr></table>
    </form>

	 <div style="margin-top:50px; style : center" >
	<table align="center">
		<tr>
			<th>team_name</th>
			<th>owner_name</th>
			<th>captain_id</th>
			<th>coach_name</th>
			<th>no_of_matches</th>
			<th>no_of_matches_won</th>
			<th>no_of_titles_won</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","kabaddi");
		$query="select * from team";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["team_name"]."</th>"."<th>".
			$row["owner_name"]."</th><th>".
			$row["captain_id"]."</th><th>".
			$row["coach_name"]."</th><th>".
			$row["no_of_matches"]."</th><th>".
			$row["no_of_matches_won"]."</th><th>".
			$row["no_of_titles_won"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>

</body>
</html>

