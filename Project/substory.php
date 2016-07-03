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

</head>

<body>
<div style="position:relative">
<div style="position: absolute; width: 892px; height: 556px; left: 194px;">
<div style="position: absolute; width: 90px; height: 43px; left: -144px; top: -7px;"><a href="index.php"><img src="images/hm.png"></a></div>

<?php
include('cone.inc');
		session_start();
	if(empty($_SESSION['user']))
{
	header("location:index.php");
}
		$user=$_SESSION['user'];
		$das=$_GET['stid'];
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
        <tr><td height="10" width="400"></td></tr>
        <tr><td background="images/brimg.png" height="2" width="400"></td></tr><?php } ?>
        <tr><td>
        <?php 
        $subid=$_GET['subid'];
	    $asql=mysql_query("select * from substory where id='$subid'");
		if(empty($sql))
		{
			echo "<font color='#FF0000'>Unable to retrived the data</font>";
		}
		while($daslo=mysql_fetch_array($asql))
				{
					?><tr>
	
   <td align="left" bgcolor="#EFEFEF"> <font color="#666666"><h5>Edited By:- <?php echo $daslo['username'];?></h5></font>

     <p><?php echo $daslo['story'];?></p><br><br>
   </td></tr>
				<?php }
		?>
        </td></tr>
        
        <tr> <td align="center">
        
      <form method="post">
    <textarea name="story" placeholder="Your story goes here" onKeyUp="wordcount(this.value)" rows="9" cols="50"></textarea>
     <input type="text" disabled="disabled" id="w_count" size="4" readonly> <font size="-1">word Count</font><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit" value="Add Story"></center>
        
  </form>
  <?php 
		
		if(isset($_POST['submit']))
		{
			
			$story=$_POST['story'];
			$user=$_SESSION['user'];
			$sid=$subid;
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
		}
		}
		?>
</td></tr>
<tr><td>

<div id="screen">

		<img class="prev" src="img/prev.gif" alt="prev" width="42" height="53" />
		
		<div id="sections">
			<ul>
            <?php 
			
		;
		$user=$_SESSION['user'];
		$das=$_GET['subid'];
		$sql=mysql_query("select * from substory where stroyid='$das'");
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
                    
                    <a href="substory1.php?stid=<?php echo $_GET['stid'];?> & subid=<?php echo $_GET['subid'];?> & subid1=<?php echo $dals['id'];?>">Select</a>
                    
					<p><?php echo $dals['story'];?></p>
				</li>
				<?php } }}?>
				
			</ul>
		</div>
       
		<img class="next" src="img/next.gif" alt="next" width="42" height="53" />
        
       </div>

</td></tr>
	
  </table>



</div>

</body>
</html>