<html>
<head>
<title>Brainstorm</title>
<link rel="shortcut icon" href="images/favicon.ico">
<style type="text/css">
.wrapper
{
	height: 581px;
	width: 1100px;
	margin: -5 auto;
	}
	
	.button {
	display:inline-block;
	color:#fff;
	background:url(images/button1_bg.png) 0 0 repeat-x;
	line-height:42px;
	width:110px;
	text-decoration:none;
	cursor:pointer;
	border:hidden;
}
.button span {
	display:block;
	background:url(images/button1_left.png) 0 0 no-repeat
}
.button span span {
	background:url(images/button1_right.png) top right no-repeat;
	padding:0 25px;
	height:42px
}
.button:hover {
	background-position:bottom
}
.button:hover span {
	background-position:bottom left
}
.button:hover span span {
	background-position:bottom right
}

	.button1 {
	display:inline-block;
	color:#fff;
	background:url(images/button1_bg.png) 0 0 repeat-x;
	line-height:42px;
	width:400px;
	text-decoration:none;
	cursor:pointer;
	border:hidden;
}
.button1 span {
	display:block;
	background:url(images/button1_left.png) 0 0 no-repeat
}
.button1 span span {
	background:url(images/button1_right.png) top right no-repeat;
	padding:0 25px;
	height:42px
}
.button1:hover {
	background-position:bottom
}
.button1:hover span {
	background-position:bottom left
}
.button1:hover span span {
	background-position:bottom right
}

.text
{
	height:25px;
	width:150px;
	box-shadow:0px 0px 5px #003399;
	border-radius:5px;
	color:#03C;
	border:0px;
}	
.text1
{
	height:35px;
	width:350px;
	box-shadow:0px 0px 5px #003399;
	border-radius:5px;
	color:#03C;
	border:0px;
	font-size:20px;
	font-family:"Times New Roman", Times, serif;
}	
.text2
{
	height:200px;
	width:350px;
	box-shadow:0px 0px 5px #003399;
	border-radius:5px;
	color:#03C;
	border:0px;
	font-size:20px;
	font-family:"Times New Roman", Times, serif;
}
a {
	display:block;
	font-size:15px;
	color:#fff;
	text-decoration:none;
	height:40px
}
.upper
{
text-transform:uppercase;
}

	</style>
   <?php include('cone.inc');
		session_start();
?>
</head>

<body style="background-image:url(images/bc.jpg); background-repeat:repeat-x;" bgcolor="#F3F3F3">


<div style="position:relative" class="wrapper">
<div style="position:absolute" class="wrapper">
<div style="position: absolute; left: 0px; top: 5px; width: 1101px; height: 110px;">
<div style="position: absolute; left: 632px; top: 26px; height: 80px; width: 499px;">
<div style="position: absolute; left: 419px; top: 40px; width: 95px; height: 31px;" align="center"><a href="logout.php"><img src="images/sing_out.png" width="103" height="34" /></a></div>
<div style="position: absolute; width: 269px; height: 50px; left: 127px; top: 7px;"><h1><font color="#FFFFFF">Welcome 
<?php echo $_SESSION['user'];?></font></h1></div>

</div>
<div style="position: absolute; left: 4px; top: 1px; width: 346px; height: 100px;"><a href="disren.php"><img src="images/top.png" width="465" height="96"></a></div>

</div>
<div style="position: absolute; left: 1px; top: 116px; width: 1101px; height: 466px;">
  <div style="position: absolute; left: 77px; top: 16px; width: 791px; height: 446px;">
  
  <?php

		$user=$_SESSION['user'];
		$sql=mysql_query("select * from artical");
		if(empty($sql))
		{
			echo "<font color='#FF0000'>Unable to retrived the data</font>";
		}?>
		<table width="790" bgcolor="#FFFFFF">
		
		<?php
		while($da=mysql_fetch_array($sql))
				{
					
				
		?>
      
<tr>
	
   <td align="center"><font color="#000099"> <h1 class="upper"><?php echo $da['titte'];?></h1></font></td></tr>
    <tr> <td align="center">  <font color="#0033CC"><h3><?php echo $da['subtitle'];?></h3></font><h4 align="left"><font color="#666666">Started By:- <span class="upper"><?php echo $da['username'];?></span>
      <p class="upper">&nbsp;</p></h4></font></td></tr>
    
     <tr> <td> <font color="#0000CC"><?php echo $da['storydata'];?></font><br><br></P></td>
		</tr>
        <tr><td align="right"><a href="story.php?st=<?php echo $da['id'];?>"><font color="#666666" size="+2">Continue......</font></a></td></tr>
        
     
        <tr bgcolor="#F3F3F3" height="60"><td>&nbsp;</td></tr><?php } ?>
	
    </table>
  
  
  </div>
</div>
</div>
</div>
</body>
</html>