<html>
<head>
<title>profile</title>
<link rel="shortcut icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style type="text/css"> 
.div1 {
      width: 400px;
    padding: 10px;
    border: 0px solid gray;
    margin-left: 210px;
	margin-top:110px;
	background-color: #F7EBEB;
    
}

.div2 {
      width: 400px;
    padding: 10px;
    border: 0px solid gray;
    margin-left: 10px;
	margin-top:110px;
	background-color: #F7EBEB;
    position:relative;
}


</style>
</head>


<?php include('cone.inc');
		session_start();?>
		<center>
<body>
<body class="w3-container">
<body style="background-image:url(images/bc.jpg); background-repeat:repeat-x;" bgcolor="#F3F3F3">
<center><b><font face="Britannic Bold" color="white" size="04"><h1>BRAINSTORM</h1></font></b>
</center>
<!-- <div align="right"><button onclick="document.getElementById('id01').style.display='block'" class="w3-btn">About us</button></div> -->

<!-- <div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-closebtn">&times;</span>
      <h2>Brainstrom</h2>
    </header>
    <div class="w3-container">
      <p>
	  The website will list all the stories in a random fashion where in users who have loged in get an oppurtunityto staart a new story
	  of its choice and let some more user gives a complete different path to it or user can continue any other existing story by giving it in a diffferent path.
	  </p>
	  <p>
	  The website will also provide the user to give a thoughts about its idea towards a story that that started by some lead author.Here any user can contribute towards the storyor just read it. choice is given to user.
	  </p>
	  <p>Search option iis also provided if any users wants to get quickely to a story writtens by the author of its choice then it can get access to it by placing name of the authorin search box.</p>
	  </div>
    <footer class="w3-container w3-teal">
      <p>About the website</p>
    </footer>
  </div>
</div> -->

<?php
$user=$_SESSION['user'];
		$sql1=mysql_query("select * from userdata WHERE username='$user'");
		if(empty($sql1))
		{
			echo "<font color='#FF0000'>Unable to retrived the data</font>";
		}?>
		
		</center><div class="div1">
	
		<?php
		while($da=mysql_fetch_array($sql1))
				{
				
				
		?>
			<h5><font color="blue">Hello 
<?php echo $_SESSION['user'];?></font></h5>
		
		<table width="400" bgcolor="#F7EBEB" >
		<tr>
		<td><font color="black" size="05" face="AR BLANCA" >Reg Id:</font></td>
		<td><font color="#291BF2" face="Lucida Calligraphy" ><?php echo $da['id'];?></font></td>
		</tr>
		<tr>
		<td><font color="black" face="AR BLANCA" size="05">Username</font></td>
		<td><font color="#291BF2" face="Lucida Calligraphy"><?php echo $da['username'];?></font></td>
		</tr>
		<tr>
		<td><font color="black" face="AR BLANCA" size="05">Name</font></td>
		<td><font color="#291BF2" face="Lucida Calligraphy"><?php echo $da['name'];?></font></td>
		</tr>
		<tr>
		<td><font color="black"  face="AR BLANCA" size="05">Email</font></td>
		<td><font color="#291BF2" face="Lucida Calligraphy"><?php echo $da['email'];?></font></td>
		</tr>
		<tr>
		<td><font color="black" face="AR BLANCA" size="05">Lastname</font></td>
		<td><font color="#291BF2" face="Lucida Calligraphy"><?php echo $da['lastname'];?></font></td>
		</tr>
		<tr>
		<td><font color="black" face="AR BLANCA" size="05">Gender</font></td>
		<td><font color="#291BF2" face="Lucida Calligraphy"><?php echo $da['gender'];?></font></td>
		</tr>
		<tr>
		<td><font color="black" face="AR BLANCA" size="05">Age</font></td>
		<td><font color="#291BF2" face="Lucida Calligraphy"><?php echo $da['age'];?></font></td>
		</tr>
		
		<?php }?>
		</table>
		</div>
		<div class="div2">
		
		
		<?php
		$user=$_SESSION['user'];
		$sql=mysql_query("select * from artical where username='$user'");
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
    
     <tr> <td colspan="2"> <font color="#0000CC"><?php echo $da['storydata'];?></font></P></td>
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
		</div>
</body>
</html>