<?php
	  $file_name = $_FILES['Upload']['name'];
      $file_size =$_FILES['Upload']['size'];
      $file_tmp =$_FILES['Upload']['tmp_name'];
      $file_type=$_FILES['Upload']['type'];
	$fp = fopen( $file_tmp, "r");
	$content = fread($fp,  $file_size);
	$content = addslashes($content);
	fclose($fp);

	mysql_connect("localhost","root","");
	mysql_select_db("project_db");
	//echo "insert into uploading_tb values('$file_name',' $file_type','$file_size','$content')";
	mysql_query("insert into uploading_tb values('$file_name',' $file_type','$file_size','$content')");//uploading_tb is the table in which its inserting images
	echo "image inserted...";
?>