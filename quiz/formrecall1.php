<?php 
//mysql_connect("servername","username","password")
mysql_connect("localhost","root","") or die("server not connected".mysql_error());
mysql_select_db("project_db") or die(mysql_error());
session_start();
$_SESSION["roll_no"]=$_REQUEST["roll_no"];
$_SESSION["firstname"]=$_REQUEST["firstname"];
$_SESSION["lastname"]=$_REQUEST["lastname"];
$_SESSION["college"]=$_REQUEST["college"]; 
$_SESSION["semester"]=$_REQUEST["semester"]; 
$_SESSION["address"]=$_REQUEST["address"]; 
$_SESSION["level"]=$_REQUEST["level"]; 
$_SESSION["mob"]=$_REQUEST["mob"];
$_SESSION["email"]=$_REQUEST["email"];
if($_REQUEST["b1"]=="Submit"){
mysql_query("insert into project_tb values('$_REQUEST[firstname]','$_REQUEST[lastname]', '$_REQUEST[college]' , $_REQUEST[semester], '$_REQUEST[address]', '$_REQUEST[level]', $_REQUEST[mob], '$_REQUEST[email]')") or die(mysql_error()) ;
//header("userprofile.php")
echo "data inserted";
}
/*if($_REQUEST["b1"]=="delete")
{
	mysql_query("delete from emp_info_tb1 where eid=$_REQUEST[t1]");
	echo "data deleted";
}*/
if($_REQUEST["b1"]=="update")
{
mysql_query("update project_tb set firstname='$_REQUEST[firstname]',lastname='$_REQUEST[lastname]', college='$_REQUEST[college]', semester=$_REQUEST[semester], address='$_REQUEST[address]',  level='$_REQUEST[level]', mob=$_REQUEST[mob] where email='$_REQUEST[email]'") or die(mysql_error());
echo "data update";
}
header("location:userprofile.php");
?>