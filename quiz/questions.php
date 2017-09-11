
<html>
<head><title>Question 3 -->></title>
<meta charset="utf-8">
<meta name="viewport content="width=device-width, initial-scale=1"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style>
body {
    background-image: url("Melamine-wood-005.png");
    background-repeat: repeat;
    background-attachment: fixed;
}
</style>
</head>

<body>
<nav class="navbar navbar-inverse">
<div class="container fluid">
<!--logo-->
<div class="navbar-header">
<a href="https://www.technocracynitrr.org" class="navbar-brand">TECHNOCRACY</a>
</div>
<!--menu items-->
<div>
<ul class="nav navbar-nav">
<li class="active"><a href="main.html">Home</a></li>
<li><a href="aboutus.html">About</a></li>
<li><a href="contactus.html">Contact</a></li>
</ul>

</div>
</div></nav>

<div class="well">
		<?php
    session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("project_db");
	if(isset($_SESSION["qno"]))
	{
     
	}
	else
	{
		$count=mysql_query("SELECT count(question_no)  FROM questions_tb");	
		$row=mysql_fetch_array($count);
		$_SESSION["count"]=$row[0];
	    $_SESSION["qno"]=1;
	}
	if($_SESSION["count"]>$_SESSION["qno"])
	{
	
	$res=mysql_query("SELECT  * FROM questions_tb WHERE question_no=$_SESSION[qno]");
	echo "<form action='result.php' method='post'>";
	if($row=mysql_fetch_array($res))
	{
		echo "$row[0]</br>";
		echo "<input type=radio name=answer value=$row[3]/>$row[3]</br>";
		echo "<input type=radio name=answer value=$row[4]/>$row[4]</br>";
		echo "<input type=radio name=answer value=$row[5]/>$row[5]</br>";
		echo "<input type=radio name=answer value=$row[6]/>$row[6]";
	}
	echo "</form>";	
	
		$q=$_SESSION["qno"];
		echo $q;
		$q=$q+1;
		if($q==5)
			$q=1;
		echo $q;
		$_SESSION["qno"]=$q;
		echo $_SESSION["qno"];
		
		
	}
	echo"<a href=questions.php?id=$_SESSION[qno]>NEXT QUESTION</a>&nbsp&nbsp&nbsp";
	echo"<a href=result.php?>CLICK HERE TO PUBLISH THE RESULT</a>";
	?>

	 </div>


<form action="quit.php" method="post">
</br>
 
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp 
&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp
<input type="submit" value="QUIT"/>
</form>
</body>
</html>