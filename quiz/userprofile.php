<?php
session_start();
?>
<html>
<head>
<title>BRainSTormeRz !
</title>
<script language="JavaScript" src="javascript.js" type="text/javascript"/>
</script>
<meta charset="utf-8">
<meta name="viewport content="width=device-width, initial-scale=1"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel=stylesheet href="style.css">

<link rel=stylesheet href="slidebar.css">
<style>
body {
    background-image: url("main background.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
<nav class="navbar navbar-inverse">
<div class="container fluid">
<!--logo-->
<div class="navbar-header">
<a href="http://technocracynitrr.org" class="navbar-brand">TECHNOCRACY</a>
</div>
<!--menu items-->
<div>
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">Home</a></li>
<li><a href="aboutus.html">About</a></li>
<li><a href="contactus.html">Contact</a></li>
<li><div class="container" style="width:70%; margin-left:50px;" id="autocolor">
<marquee style="font-family:algerian;behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><h1> USER  &nbsp &nbsp   -&nbsp &nbsp    PROFILE </h1>
</marquee>
</div> 
<script type="text/javascript">
(function(){
	var hexacode = ['#ffff00', '#ff0000', '#00ff00', '#0000ff', '#ffffff'],
	el = document.getElementById('autocolor').style,
	counter = -1,
	hexalen = hexacode.length;
	function auto(){
		el.backgroundColor = hexacode[counter = ++counter % hexalen];
	}
	setInterval(auto, 1000);
})();
</script>
</li>
<li><div style="margin-left:50px;">
<a href="instructions.php"><form action="instructions.php" >
<input type="button" value="CLICK here to PROCEED for QUIZ">
</form></a>
</li>
</ul>
</div>
</div></nav>
<script language="javascript" type="text/javascript">
 $(document).ready(function(){
$('#message')fadeIn('5000');
});
</script>
<body>
<div class="container" style="width:70%; margin-left:200px;">
<?php

	mysql_connect("localhost","root","");
	mysql_select_db("project_db");
	$res=mysql_query("select  * from uploading_tb");
	while($row=mysql_fetch_array($res))
	{
		echo "<img src='ret.php?fn=$row[filename]' width=100 height=100></img><br>";
	}

?>
<div class="col-xs-12 col-md-10" style="background:lightgreen;"><li>ROLL NO:  <?php echo($_SESSION["roll_no"]); ?></li></div>
<div class="col-xs-12 col-md-10" style="background:lightsalmon;"><li>NAME: <?php echo($_SESSION["firstname"]." ".$_SESSION["lastname"]); ?></li></div>
<div class="col-xs-12 col-md-10" style="background:lightgreen;"><li>EMAIL:  <?php echo($_SESSION["email"]); ?></li></div>
<div class="col-xs-12 col-md-10" style="background:lightsalmon;"><li>CONTACT NO:  <?php echo($_SESSION["mob"]); ?></li></div>
<div class="col-xs-12 col-md-10" style="background:lightgreen;"><li>COLLEGE:  <?php echo($_SESSION["college"]); ?></li></div>
<div class="col-xs-12 col-md-10" style="background:lightsalmon;"><li>SEMESTER:  <?php echo($_SESSION["semester"]); ?></li></div>
<div class="col-xs-12 col-md-10" style="background:lightgreen;"><li>LEVEL:  <?php echo($_SESSION["level"]); ?></li></div>
<div class="col-xs-12 col-md-10" style="background:lightsalmon;"><li>ADDRESS:  <?php echo($_SESSION["address"]); ?></li></div>
</div>
</body>
</html>