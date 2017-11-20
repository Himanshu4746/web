 <?php
 	# take inputs & store in local variables
 	$name = $_REQUEST['name'];
 	$addr1 = $_REQUEST['addr1'];
 	$addr2 = $_REQUEST['addr2'];
	$email = $_REQUEST['email'];
   # create a database handle
   # mysql_connect() connects the script to MySQL server
   # the parameters are hostname
   $con = mysql_connect("localhost","sirmvit","cse") or die('Could not connect');
# select a database
   mysql_select_db("web",$con);
   if (mysql_query("insert into person_info values('$name','$addr1','$addr2','$email')")) {
          echo "Data inserted successfully!";
   }
   # release the database handle by closing the connection
   mysql_close($con);
   #header("Location: http://localhost/11.html");
   #exit;  
?>
