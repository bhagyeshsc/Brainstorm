<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Voting Page</title>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	//####### on page load, retrive votes for each content
	$.each( $('.voting_wrapper'), function(){
		
		//retrive unique id from this voting_wrapper element
		var unique_id = $(this).attr("id");
		
		//prepare post content
		post_data = {'unique_id':unique_id, 'vote':'fetch'};
		
		//send our data to "vote_process.php" using jQuery $.post()
		$.post('vote_process.php', post_data,  function(response) {
		
				//retrive votes from server, replace each vote count text
				$('#'+unique_id+' .up_votes').text(response.vote_up); 
				$('#'+unique_id+' .down_votes').text(response.vote_down);
			},'json');
	});

	
	
	//####### on button click, get user vote and send it to vote_process.php using jQuery $.post().
	$(".voting_wrapper .voting_btn").click(function (e) {
	 	
		//get class name (down_button / up_button) of clicked element
		var clicked_button = $(this).children().attr('class');
		
		//get unique ID from voted parent element
		var unique_id 	= $(this).parent().attr("id"); 
		
		if(clicked_button==='down_button') //user disliked the content
		{
			//prepare post content
			post_data = {'unique_id':unique_id, 'vote':'down'};
			
			//send our data to "vote_process.php" using jQuery $.post()
			$.post('vote_process.php', post_data, function(data) {
				
				//replace vote down count text with new values
				$('#'+unique_id+' .down_votes').text(data);
				
				//thank user for the dislike
				alert("Thanks! Each Vote Counts, Even Dislikes!");
				
			}).fail(function(err) { 
			
			//alert user about the HTTP server error
			alert(err.statusText); 
			});
		}
		else if(clicked_button==='up_button') //user liked the content
		{
			//prepare post content
			post_data = {'unique_id':unique_id, 'vote':'up'};
			
			//send our data to "vote_process.php" using jQuery $.post()
			$.post('vote_process.php', post_data, function(data) {
			
				//replace vote up count text with new values
				$('#'+unique_id+' .up_votes').text(data);
				
				//thank user for liking the content
				alert("Thanks! For Liking This Content.");
			}).fail(function(err) { 
			
			//alert user about the HTTP server error
			alert(err.statusText); 
			});
		}
		
	});
	//end 
	
	
	
});


</script>
<style type="text/css">
<!--
.content_wrapper{width:500px;margin-right:auto;margin-left:auto;}
h3{color: #979797;border-bottom: 1px dotted #DDD;font-family: "Trebuchet MS";}

/*voting style */
.voting_wrapper {display:inline-block;margin-left: 20px;}
.voting_wrapper .down_button {background: url(images/thumbs.png) no-repeat;float: left;height: 14px;width: 16px;cursor:pointer;margin-top: 3px;}
.voting_wrapper .down_button:hover {background: url(images/thumbs.png) no-repeat 0px -16px;}
.voting_wrapper .up_button {background: url(images/thumbs.png) no-repeat -16px 0px;float: left;height: 14px;width: 16px;cursor:pointer;}
.voting_wrapper .up_button:hover{background: url(images/thumbs.png) no-repeat -16px -16px;;}
.voting_btn{float:left;margin-right:5px;}
.voting_btn span{font-size: 11px;float: left;margin-left: 3px;}

-->
</style>
</head>
<?php include('cone.inc');
		session_start();?>
		<center>
<body>
 <?php

		$user=$_SESSION['user'];
		$sql=mysql_query("select * from artical ORDER BY RAND() LIMIT 0,10");
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
	
   <td align="center" colspan = "2"><font color="#000099"> <h1 class="upper"><?php echo $da['titte'];?></h1></font></td></tr>
    <tr> <td align="center" colspan = "2">  <font color="#0033CC"><h3><?php echo $da['subtitle'];?></h3></font><h4 align="left"><font color="#666666">Started By:- <span class="upper"><?php echo $da['username'];?></span>
      <p class="upper">&nbsp;</p></h4></font></td></tr>
    
     <tr> <td colspan="2"> <font color="#0000CC"><?php echo $da['storydata'];?></font><br><br></P></td>
		</tr>
        <tr>
        <td align="left">
    
        </td>
        <td align="right"><a href="story.php?st=<?php echo $da['id'];?>"><font color="#666666" size="+2">Continue......</font></a></td>
        </tr>  
        <tr><td>
  //////////////////////////////////////////////////        
        </td></tr>   

        <tr bgcolor="#F3F3F3" height="60"><td colspan = "2">&nbsp;</td></tr><?php }?>
	
    
   </table>
   <?php
  if(isset($_POST['sub1']))
{
$st=$_POST['sub1'];
$user=$_SESSION['user'];
echo $st;

}  
?>
  </div>
</div>
</div>
</div>
</body>
</html>
