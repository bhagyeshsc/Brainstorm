<html>
<head>
<title>Brainstorm</title>
<link rel="shortcut icon" href="images/favicon.ico">
<style type="text/css">
body
{
font-family:'Georgia', Times New Roman, Times, serif;
}
#main
{
height:80px; border:1px dashed #29ABE2;margin-bottom:7px;
width:500px;
}
a
{
color:#DF3D82;
text-decoration:none;

}
a:hover
{
color:#DF3D82;
text-decoration:underline;

}
.up
{
height:40px; font-size:24px; text-align:center; background-color:#009900; margin-bottom:2px;
-moz-border-radius: 6px;-webkit-border-radius: 6px;
}
.up a
{
color:#FFFFFF;
text-decoration:none;

}
.up a:hover
{
color:#FFFFFF;
text-decoration:none;

}
.down
{
height:40px; font-size:24px; text-align:center; background-color:#cc0000; margin-top:2px;
-moz-border-radius: 6px;-webkit-border-radius: 6px;
}

.down a
{
color:#FFFFFF;
text-decoration:none;

}
.down a:hover
{
color:#FFFFFF;
text-decoration:none;

}
.box1
{
float:left; height:80px; width:50px;
}

.box2
{
float:left; width:440px; text-align:left;
margin-left:10px;height:60px;margin-top:10px;
font-weight:bold;

font-size:18px;
}
img
{
border:none;
padding-top:7px;

}
</style>
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
	width:700px;
	text-decoration:none;
	cursor:pointer;
	border:hidden;
	font-size:24px;
	font-family:Forte;
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
.text10
{
	height:50px;
	width:700px;
	box-shadow:0px 0px 5px #003399;
	border-radius:5px;
	color:#03C;
	border:0px;
	font-size:24px;
	text-align:center;
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

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(function() {

$(".vote").click(function() 
{

var id = $(this).attr("id");
var name = $(this).attr("name");
var dataString = 'id='+ id ;
var parent = $(this);


if(name=='up')
{

$(this).fadeIn(200).html('<img src="dot.gif" align="absmiddle">');
$.ajax({
   type: "POST",
   url: "up_vote.php",
   data: dataString,
   cache: false,

   success: function(html)
   {
    parent.html(html);
  
  }  });
  
}
else
{

$(this).fadeIn(200).html('<img src="dot.gif" align="absmiddle">');
$.ajax({
   type: "POST",
   url: "down_vote.php",
   data: dataString,
   cache: false,

   success: function(html)
   {
       parent.html(html);
  }
   
 });


}
  
  
   
 

return false;
	});

});
</script>

<style type="text/css">
body
{
font-family:'Georgia', Times New Roman, Times, serif;
}
#main
{
height:80px; border:1px dashed #29ABE2;margin-bottom:7px;
width:500px;
}
a
{
color:#009;
text-decoration:none;
font-size:16px;

}
a:hover
{
color:#06F;
font-size:16px;
text-decoration:none;
}
.up
{
height:40px; font-size:24px; text-align:center; background-color:#009900; margin-bottom:2px;
-moz-border-radius: 6px;-webkit-border-radius: 6px;
}
.up a
{
color:#FFFFFF;
text-decoration:none;

}
.up a:hover
{
color:#FFFFFF;
text-decoration:none;

}
.down
{
height:40px; font-size:24px; text-align:center; background-color:#cc0000; margin-top:2px;
-moz-border-radius: 6px;-webkit-border-radius: 6px;
}

.down a
{
color:#FFFFFF;
text-decoration:none;

}
.down a:hover
{
color:#FFFFFF;
text-decoration:none;

}
.box1
{
float:left; height:80px; width:50px;
}

.box2
{
float:left; width:440px; text-align:left;
margin-left:10px;height:60px;margin-top:10px;
font-weight:bold;

font-size:18px;
}
img
{
border:none;
padding-top:7px;

}
</style>

<?php include('cone.inc');
		session_start();?>
</head>

<body style="background-image:url(images/bc.jpg); background-repeat:repeat-x;" bgcolor="#F3F3F3">
<div style="position:relative" class="wrapper">
<div style="position:absolute" class="wrapper">
<div style="position: absolute; left: 0px; top: 5px; width: 1101px; height: 110px;">
<div style="position: absolute; left: 632px; top: 26px; height: 80px; width: 499px;">
<div style="position: absolute; left: 419px; top: 40px; width: 95px; height: 31px;" align="center"><a href="logout.php"><img src="images/sing_out.png" width="103" height="34" /></a></div>
<div style="position: absolute; width: 269px; height: 50px; left: 127px; top: 7px;"><h3><font color="#FFFFFF">Welcome 
<?php echo $_SESSION['user'];?></font></h3></div>

</div>
<div style="position: absolute; left: 4px; top: 1px; width: 346px; height: 100px;"><a href="disren.php"><img src="images/top.png" width="465" height="96"></a></div>

</div>
<div style="position: absolute; left: 1px; top: 116px; width: 1101px; height: 466px;">
  <div style="position: absolute; left: 89px; top: 89px; width: 1058px; height: 446px;">
  <div style="position: absolute; left: 78px; top: -99px; width: 118px; height: 87px;"><a href="writeit.php"><img src="images/minwrite.png" width="119" height="89"></a></div>
<div style="position: absolute; left: -42px; top: -100px; width: 118px; height: 87px;"><a href="index.php"><img src="images/homemain.png" width="119" height="89"></a></div>
<div style="position: absolute; left: 785px; top: -99px; width: 118px; height: 87px;"><a href="displaystory.php"><img src="images/maystory.png" width="119" height="89"></a></div>
  <div style="position: absolute; width: 811px; height: 94px; left: 95px; top: 1px;">
  
  <form method="post">
 <input type="text" name="ser" class="text10" required placeholder="Auther Name">&nbsp;<input type="submit" name="submit" value="Search" class="button1">
  </form>
  
  </div>
  <?php
  if(isset($_POST['submit']))
  {
  $ser=$_POST['ser'];
  $sole=mysql_query("select * from userdata where name like '%$ser%'");
  if(empty($sole))
  {
	 ?> <div style="position: absolute; left: 95px; top: 97px; width: 707px; height: 53px;" align="center"><font color="#FF0000"><?php echo "The Auther You are searching is not present";?></font></div><?php
  }
  else
  {?><div style="position: absolute; left: 96px; top: 163px; height: 58px; width: 706px;"><table height="100%"><?php
	  while($da=mysql_fetch_array($sole))
				{
					?>
					<tr bgcolor="#F3F3F3" height="10">
                    <td height="10"><a href="searchstory.php?udi=<?php echo $da['username'];?>">Auther Name:-</a> </td>
                    <td><a href="searchstory.php?udi=<?php echo $da['username'];?>"><?php echo $da['name']; ?></a></td>
                    
                    </tr>
					
					
					<?php
					}
					?></table></div><?php
	  }
  }
  ?>
</div>
</div>
</body>
</html>