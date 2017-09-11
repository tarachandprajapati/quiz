<?php

	mysql_connect("localhost","root","");
	mysql_select_db("project_db");
	$res=mysql_query("select  * from uploading_tb");
	while($row=mysql_fetch_array($res))
	{
		echo "<img src='ret.php?fn=$row[filename]' width=100 height=100></img><br>";
	}

?>