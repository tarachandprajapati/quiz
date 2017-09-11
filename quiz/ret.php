<?php


	mysql_connect("localhost","root","");
	mysql_select_db("project_db");
	$res=mysql_query("select  filesize,filetype,filecontent from uploading_tb where filename='$_REQUEST[fn]'");
	$row = mysql_fetch_assoc($res);
	header("Content-type: $row[filetype]");
	echo $row['filecontent'];

?>