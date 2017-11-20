     <html>
     	<h2>Search Result</h2>
     		<table border=1>
     		<tr>
     			<th>Name</th><th>Address Line 1</th><th>Address Line 2</th><th>Email-ID</th>
     		</tr>
     			<?php
     				$name = $_REQUEST['name'];
     				$con = mysql_connect("localhost","sirmvit","cse") or die('Could not connect');
     				mysql_select_db("web",$con);
     				$result = mysql_query("select * from person_info where name like '%".$name."%'");
     				# retrieve all rows with matches
     				while ($row = mysql_fetch_array($result))	{
     				        # display result
     				        echo "<tr>";
     				        echo "<td>".$row['name']."</td>";
     				        echo "<td>".$row['addr1']."</td>";
     				        echo "<td>".$row['addr2']."</td>";
     				        echo "<td>".$row['email']."</td>";
     				        echo "</tr>";
     				}
     				mysql_close($con);
     			?>
     		</table>
     </html>
