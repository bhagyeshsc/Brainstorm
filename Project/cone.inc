<?php
	$conn_server=mysql_connect("localhost","root","")or die("could not connect to the mysql server");
	//if($conn_server){echo "<font color='#fffff'>connection to server was successfull</font>";}
	$db="brainstorm";
	$seldb=mysql_select_db($db)or die("could not connect to the database !<br> please try again later or if this error appear , please contact your website developer");
	//if($seldb){echo "<font color='#fffff'>database selected successfully</font>";}
?>
