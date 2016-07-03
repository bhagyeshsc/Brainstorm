<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://cognistreamer.github.io/tinyMCE-mention/stylesheets/autocomplete.css"> <!-- filename is autocomplete.css -->
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script> <!-- filename is tinymce.min.js --> 
<style>
* {
	margin: 0;
	padding: 0;
}

html, body {
	height: 100%;
}

#rte-container {
	width: 800px;
	height: 364px;
	position: absolute;
	left: 50%;
	top: 50%;
	margin: -182px 0 0 -400px;
}
</style>

</head>
<body> <?php 
		include('cone.inc');
		session_start();
			if(empty($_SESSION['user']))
{
	header("location:index.php");
}
		$user=$_SESSION['user'];
		$sql=mysql_query("select * from artical where username='$user'");
		if(empty($sql))
		{
			echo "<font color='#FF0000'>Unable to retrived the data</font>";
		}?>
		<table width="117">
		
		<?php
		while($da=mysql_fetch_array($sql))
				{
		 	?>
<tr>
	
   <td> <h1><?php echo $da['titte'];?></h1></td></tr>
    <tr> <td>  <h2><?php echo $da['subtitle'];?></h2></td></tr>
    <tr> <td width="90px"><font color="#666666"> <h5>Started By:- <?php echo $da['username'];?></h5></font></td></tr>
     <tr> <td width="70px"> <P><?php echo $da['storydata'];?></P></td>
		</tr><tr><td>&nbsp;</td></tr><?php } ?>
	
    </table>
<div style="position: absolute; left: 386px; top: 16px;"><a href="allstorys.php">display all storys</a></div>
</body>
</html>
