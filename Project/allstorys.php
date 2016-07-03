<!DOCTYPE html>
<html>
<head>
<title>Brainstorm</title>
<link rel="shortcut icon" href="images/favicon.ico">
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
		$user=$_SESSION['user'];
		$sql=mysql_query("select * from artical");
		if(empty($sql))
		{
			echo "<font color='#FF0000'>Unable to retrived the data</font>";
		}?>
		<table>
		
		<?php
		while($da=mysql_fetch_array($sql))
				{
					
				
		?>
<tr>
	
   <td> <h1><?php echo $da['titte'];?></h1></td></tr>
    <tr> <td>  <h2><?php echo $da['subtitle'];?></h2></td></tr>
    <tr> <td><font color="#666666"> <h5>Started By:- <?php echo $da['username'];?></h5></font></td></tr>
     <tr> <td> <P><?php echo $da['storydata'];?></P></td>
		</tr>
        <tr><td><a href="story.php?st=<?php echo $da['id'];?>">Show All</a></td></tr>
        <tr><td>&nbsp;</td></tr><?php } ?>
	
    </table>

</body>
</html>
