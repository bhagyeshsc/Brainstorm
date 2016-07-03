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


	</style>
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
    
   <?php include('cone.inc');
		session_start();?>
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
  <div style="position: absolute; left: 210px; top: 16px; width: 631px; height: 446px;">
  <div style="position: absolute; left: 73px; top: 21px; width: 489px; height: 102px;"><h1>You are the Creater Of Your Story</h1>
  <div style="position: absolute; left: 36px; top: 63px; width: 393px; height: 36px;" class="phpdiv">
  <?php
  
		if(empty($_SESSION['user']))
{
	header("location:index.php");
}
		if(isset($_POST['addstory']))
		{
			$title=$_POST['title'];
			$subtitle=$_POST['subtitle'];
			$story=$_POST['story'];
			$user=$_SESSION['user'];
			$count=str_word_count($story);
			if ($count < 200) {
				echo "<font color='#FF0000'>cannot proceed, atlst 200</font>";
				$_SESSION['sty']=$story;
				          }
			elseif ($count > 400) {
				echo "<font color='#FF0000'>Less than 400</font>";
				$_SESSION['sty']=$story;
			}
			else{
			$sq=mysql_query("insert into artical set username='$user',storydata='$story',titte='$title',subtitle ='$subtitle'");
			if(empty($sq))	
		{
			echo "<font color='#FF0000'>Unable to enter the data</font>";
			?>
			<style type="text/css">
		.phpdiv
		{
			background-color:#B0DFF9;
			}
        </style>
        <?php
		}
		
		else
		{
			 header("location:displaystory.php");
		}
		}
		}
		?>
  
  </div>
  </div>
  <div style="position: absolute; left: 130px; top: 118px; width: 361px; height: 304px;">
  <table>
  <form method="post">
  <tr>
  <td height="57" align="center"><input type="text" name="title" placeholder="Your title goes here" required class="text1"></td>
  </tr> 
  <tr><td height="57" align="center"><input type="text" name="subtitle" placeholder="Your subtitle goes here" required class="text1"></td></tr>
  <tr><td height="57" align="center"><textarea name="story" placeholder="Write your story in 200 - 400 words" required class="text2" onKeyUp="wordcount(this.value)"></textarea>
  
  <div style="position: absolute; left: 364px; top: 296px; width: 143px;"><input type="text" disabled="disabled" id="w_count" size="5" readonly> <font size="2">Word Count</font></div>
  
  </td></tr>
  <tr><td align="center"><input type="submit" name="addstory" value="ADD STORY" class="button"></td></tr>
  </form>
  </table>
  </div>
  
  </div>
  <div style="position: absolute; width: 553px; height: 482px; left: -432px;"><img src="images/imgwritei.png"></div>
  
</div>
</div>
</div>
</body>
</html>