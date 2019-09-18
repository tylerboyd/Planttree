<HTML>
<Head>
	<title>Plant a Tree </title>
</Head>
<Body>
	<h1> Products </h1>
	<li>
		<a href="index.html">Home</a>
	</li>
	<li>
		<a href="cart.html">Cart</a>
	</li>

<?php

$sql_host = "us-cdbr-iron-east-02.cleardb.net";
$sql_user = "bb5b8b54ae95cf";
$sql_pass = "2190a897";
$sql_db = "heroku_9eb67c81329411e";
$sql_table = "tree";

$conn = @mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);

if (!$conn) {
		echo "<p>Database connection failure</p>";
	} else {

		$exists = mysqli_query($conn, "SELECT 1 FROM $sql_table LIMIT 1");

		if($exists !== FALSE){

				$query = "SELECT * FROM $sql_table";

				$result = mysqli_query($conn, $query);

				if(!$result) {
				echo "<p>Something is wrong with ",	$query, "</p>";
			}  else {
				echo "<table border=\"1\">";
				echo "<tr>\n"
				."<th scope=\"col\">Tree Name</th>\n"
				."<th scope=\"col\">Tree Type</th>\n"
				."<th scope=\"col\">Soil Drainage</th>\n"
				."<th scope=\"col\">Sun Requirement</th>\n"
				."<th scope=\"col\">Maintenance</th>\n"
				."<th scope=\"col\">Max Height</th>\n"
				."<th scope=\"col\">Growth Rate</th>\n"
				."<th scope=\"col\">Stock</th>\n"
				."</tr>\n";

				while ($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>",$row["NAME"],"</td>";
					echo "<td>",$row["CATEGORY"],"</td>";
					echo "<td>",$row["SOIL_DRAIN"],"</td>";
					echo "<td>",$row["SUN_REQUIREMENT"],"</td>";
					echo "<td>",$row["MAINTENANCE"],"</td>";
					echo "<td>",$row["MAX_HEIGHT"],"</td>";
					echo "<td>",$row["GROWTH_RATE"],"</td>";
					echo "<td>",$row["STOCK"],"</td>";
					echo "</tr>";
				}
				echo "</table>";
				mysqli_free_result($result);
			}
			mysqli_close($conn);
		}
		else{
			echo "<p>No trees exist in the table!</p>";
		}
	}
?>
</Body>
</HTML>
