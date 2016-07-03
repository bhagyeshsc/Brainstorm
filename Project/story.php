<html>
<head>
<title>Brainstorm</title>
<link rel="shortcut icon" href="images/favicon.ico">
 <link type="text/css" rel="stylesheet" href="css/style.css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../jquery.serialScroll.js"></script>

	<script type="text/javascript">	
		
		jQuery.easing.easeOutQuart = function (x, t, b, c, d) {
			return -c * ((t=t/d-1)*t*t*t - 1) + b;
		};
		
		jQuery(function( $ ){
			
			$('#screen').serialScroll({
				target:'#sections',
				items:'li', // Selector to the items ( relative to the matched elements, '#sections' in this case )
				prev:'img.prev',// Selector to the 'prev' button (absolute!, meaning it's relative to the document)
				next:'img.next',// Selector to the 'next' button (absolute too)
				axis:'xy',// The default is 'y' scroll on both ways
				navigation:'#navigation li a',
				duration:700,// Length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
				force:true, // Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
				
				onBefore:function( e, elem, $pane, $items, pos ){
					e.preventDefault();
					if (this.blur) {
						this.blur();
					}
				},
				onAfter:function( elem ){
					//'this' is the element being scrolled ($pane) not jqueryfied
				}
			});
			
			/**
			 * No need to have only one element in view, you can use it for slideshows or similar.
			 * In this case, clicking the images, scrolls to them.
			 * No target in this case, so the selectors are absolute.
			 */
			
			$('#slideshow').serialScroll({
				items:'li',
				prev:'#screen2 a.prev',
				next:'#screen2 a.next',
				offset:-230, //when scrolling to photo, stop 230 before reaching it (from the left)
				start:1, //as we are centering it, start at the 2nd
				duration:1200,
				force:true,
				stop:true,
				lock:false,
				cycle:false, //don't pull back once you reach the end
				easing:'easeOutQuart', //use this easing equation for a funny effect
				jump: true //click on the images to scroll to them
			});
			var $news = $('#news-ticker');//we'll re use it a lot, so better save it to a var.
			$news.serialScroll({
				items:'div',
				duration:2000,
				force:true,
				axis:'y',
				easing:'linear',
				lazy:true,// NOTE: it's set to true, meaning you can add/remove/reorder items and the changes are taken into account.
				interval:1, // yeah! I now added auto-scrolling
				step:2 // scroll 2 news each time
			});	
			
			$('#add-news').click(function(){
				var 
					$items = $news.find('div'),
					num = $items.length + 1;
					
				$items.slice(-2).clone().find('h4').each(function(i){
					$(this).text( 'News ' + (num + i) );
				}).end().appendTo($news);
			});
			$('#shuffle-news').click(function(){//don't shuffle the first, don't wanna deal with css
				var shuffled = $news.find('div').get().slice(1).sort(function(){
					return Math.round(Math.random())-0.5;//just a random number between -0.5 and 0.5
				});
				$(shuffled).appendTo($news);//add them all reordered
			});
		});
	</script>
<script type=""text/javascript"">
var cnt;
function wordcount(count) {
var words = count.split(/\s/);
cnt = words.length;
var ele = document.getElementById('w_count');
ele.value = cnt;
}
</script>

<script type=""text/javascript"">
var proceed=0;
function enoughwordcheck(count) {

var ele = document.getElementById('w_count');
if(ele < 200){
alert("not enough words");
proceed=0;
}
else
{proceed=1;}
}
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


</head>

<body>
<div style="position:relative">
<div style="position: absolute; width: 892px; height: 556px; left: 194px;">
<div style="position: absolute; width: 90px; height: 43px; left: -144px; top: -7px;"><a href="index.php"><img src="images/hm.png"></a></div>
<?php
include('cone.inc');

		session_start();
		$user=$_SESSION['user'];
		$das=$_GET['st'];
		$sql=mysql_query("select * from artical where id='$das'");
		if(empty($sql))
		{
			echo "<font color='#FF0000'>Unable to retrived the data</font>";
		}?>
        
		<table width="800px" height="100%">
		
		<?php
		while($da=mysql_fetch_array($sql))
				{
					
				
		?>
<tr>
	
   <td align="center"> <h1><?php echo $da['titte'];?></h1></td></tr>
    <tr> <td align="center">  <h2><?php echo $da['subtitle'];?></h2></td></tr>
    <tr> <td align="left"><font color="#666666"> <h5>Started By:- <?php echo $da['username'];?></h5></font></td></tr>
     <tr> <td align="left"> <P><?php echo $da['storydata'];?></P></td>
		</tr>
        <tr><td>&nbsp;</td></tr><?php } ?>
        
        <tr> <td align="center">
        
        
      <form method="post">
    <textarea name="story" placeholder="Your story goes here" onKeyUp="wordcount(this.value)" rows="9" cols="50" spellcheck="true"><?php 
	if(!empty ($_SESSION['sty']))
	{echo $_SESSION['sty'];}?></textarea>
     <input type="text" disabled="disabled" id="w_count" size="4" readonly> <font size="-1">word Count</font><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit" value="Add Story" id="myid"></center>
        
  </form>
  <?php 
		unset($_SESSION['sty']);
		if(isset($_POST['submit']))
		{    
		
			$story=$_POST['story'];
			$user=$_SESSION['user'];
			$sid=$das;
			$count=str_word_count($story);
			if ($count < 200) {
				echo "cannot proceed, atlst 200";
				$_SESSION['sty']=$story;
				          }
			elseif ($count > 400) {
				echo "Less than 400";
				$_SESSION['sty']=$story;
			}
			else{
			$sq=mysql_query("insert into substory set username='$user',story='$story',stroyid='$sid'");
			if(empty($sq))	
		{
			echo "<font color='#FF0000'>Unable to enter the data</font>";
		}
		}}
		?>
</td></tr>
<tr><td>

<div id="screen">

		<img class="prev" src="img/prev.gif" alt="prev" width="42" height="53" />
		
		<div id="sections">
			<ul>
            <?php 
		$user=$_SESSION['user'];
		$das=$_GET['st'];
		$sql=mysql_query("select * from artical where id='$das'");
		if(empty($sql))
		{
			echo "<font color='#FF0000'>Unable to retrived the data</font>";
		}?>
		
		
		<?php
		while($da=mysql_fetch_array($sql))
				{
					
				
	 
$saql=mysql_query("select * from substory where stroyid='$das'");
	if(empty($saql))	
		{
			echo "<font color='#FF0000'>Unable to retrive the data</font>";
		}
		$var=0;
		while($dals=mysql_fetch_array($saql))
				{
		if($var==0)
		{
		?>
				<li>
					<h2><?php echo $dals['username'];?></h2>
					<a href="substory.php?stid=<?php echo $_GET['st'];?> & subid=<?php echo $dals['id'];?>">Select</a>
					
					<p><?php echo $dals['storytext'];?></p>

				</li>
				<?php }}}?>
				
			</ul>
		</div>
       
		<img class="next" src="img/next.gif" alt="next" width="42" height="53" />
        
       </div>

</td></tr>
	
    </table>



</div>

</body>

</html>