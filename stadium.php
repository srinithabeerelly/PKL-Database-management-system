<!DOCTYPE html>
<html>
<style >
	body{
		background:lightblue;
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
	<title>venue</title>
</head>
<body>
	<button style="background-color:black "><a href="admin1st.html" style="color:white">Back</a></button>
	<form action="retrieve_vdetails.php" method="post"><table><tr align="center">
            <p style="text-align: center;font-size: 25;">Enter venue name to get details
            <input type="text" name="venue_name" style="width: 300;height: 25;"required><br><br>
            <input type="submit" style="float:center;" value="Submit">
            </p></tr></table>
    </form>

	 <div style="margin-top:30px; style : center" >
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
		$query="call venue()";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["venue_name"]."</th>"."<th>".
			$row["capacity"]."</th><th>".
			$row["DOI"]."</th><th>".
			$row["city"]."</th><th>".
			$row["home_team"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>