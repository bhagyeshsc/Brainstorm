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
	width:230px;
	box-shadow:0px 0px 5px #003399;
	border-radius:5px;
	color:#03C;
	border:0px;
	font-size:24px;
	font-family:"Courier New", Courier, monospace;
	text-align:justify;
}
.text2
{
	height:35px;
	width:520px;
	box-shadow:0px 0px 5px #003399;
	border-radius:5px;
	color:#03C;
	border:0px;
	font-size:24px;
	font-family:"Courier New", Courier, monospace;
	text-align:justify;
}
.text3
{
	
	box-shadow:0px 0px 5px #003399;
	border-radius:5px;
	color:#03C;
	border:0px;
	font-size:24px;
	font-family:"Courier New", Courier, monospace;
	text-align:justify;
}

	</style>
</head>

<body style="background-image:url(images/bc.jpg); background-repeat:repeat-x;" bgcolor="#F3F3F3">
<div style="position:relative" class="wrapper">
<div style="position:absolute" class="wrapper">
<div style="position: absolute; left: 0px; top: 5px; width: 1101px; height: 110px;">
<div style="position: absolute; left: 632px; top: 26px; height: 80px; width: 499px;">
<font color="#FFFFFF"><b>

&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</b><br></font>
<form method="post"> <input type="text" name="username" class="text">&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" class="text">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="Login" class="button"></form>

<div style="position: absolute; width: 242px; left: 7px; height: 27px; top: -24px;">
<?php
include('cone.inc');
session_start();
if(!empty($_SESSION['user']))
{
	header("location:disren.php");
}
if(isset($_POST['login']))
 {
	 $user=$_POST['username'];
	 $password=$_POST['password'];
	 $mdd=md5($password);
	 $sqple=mysql_query("select * from login where username='$user' and password='$mdd'");
	 $qw=mysql_num_rows($sqple);
	  if(!$sqple)
	 {
		 echo "<center><font color='#FF0000'>Error</font></center>";
		 }
	 if(empty($qw))
	 {
		 echo "<center><font color='#FF0000'>Invalid Credencials</font></center>";
		 }
		 if(!empty($qw))
		 {
			 $_SESSION['user']=$user;
		 header("location:disren.php");
		 }
	 }
?>
</div>
</div>
<div style="position: absolute; left: 4px; top: 1px; width: 346px; height: 100px;"><img src="images/top.png" width="465" height="96"></div>

</div>
<div style="position: absolute; left: 1px; top: 116px; width: 1101px; height: 466px;">
<div style="position: absolute; width: 558px; height: 465px; left: -33px; top: 46px;">
<div style="position: absolute; width: 453px; height: 56px; left: -34px; top: -58px;"><img src="images/create.png" width="454" height="65"></div>
<div style="position: absolute; left: -62px; top: 26px; width: 666px; height: 441px;">
<table width="754">
<td width="286"><form method="post">
<tr><td height="50" colspan="1"><input type="text" name="name" placeholder="First name" class="text1" required></td><td width="456" colspan="2"><input type="text" name="lastname" placeholder="Surname" class="text1" required></td></tr>
<tr><td colspan="3" height="50"><input type="text" name="username" placeholder="select unique username" class="text2" required></td></tr>
<tr><td height="50" colspan="3"><input type="email" name="email" placeholder="Your Email ID" class="text2" required></td></tr>
<tr><td height="50" colspan="3"><input type="password" name="password" class="text2" placeholder="Enter your password" required></td></tr>
<tr><td height="50" colspan="3"><input type="password" name="cpassword" class="text2" placeholder="Re-enter your password" required></td></tr>
<tr><td colspan="3" height="50"><font color="#000000" face="Arial, Helvetica, sans-serif" size="+1">Birthday</font></td></tr>
<tr>
<td colspan="3" ><select name="month" class="text">
       <option value="mm">Month</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>       
       <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
     </select>&nbsp;&nbsp;&nbsp;
     <select name="day" class="text">
        <option value="dd">Day</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
       <option value="13">13</option>
       <option value="14">14</option>
       <option value="15">15</option>       
       <option value="16">16</option>
       <option value="17">17</option>
       <option value="18">18</option>
       <option value="19">19</option>
       <option value="20">20</option>
       <option value="21">21</option>
       <option value="22">22</option>
       <option value="23">23</option>
       <option value="24">24</option>
       <option value="25">25</option>
       <option value="26">26</option>       
       <option value="27">27</option>
       <option value="28">28</option>
       <option value="29">29</option>
       <option value="30">30</option>
       <option value="31">31</option>
       </select>&nbsp;&nbsp;&nbsp;
     <select name="year" class="text">
     <option value="yy">Year</option>
     <option value="1977">1974</option>
     <option value="1977">1975</option>
     <option value="1977">1976</option>
      <option value="1977">1977</option>
      <option value="1978">1978</option>
      <option value="1979">1979</option>
      <option value="1980">1980</option>
      <option value="1981">1981</option>
      <option value="1982">1982</option>
      <option value="1983">1983</option>
      <option value="1984">1984</option>
      <option value="1985">1985</option>
      <option value="1986">1986</option>
      <option value="1987">1987</option>
      <option value="1988">1988</option>
      <option value="1989">1989</option>
      <option value="1990">1990</option>
      <option value="1991">1991</option>
      <option value="1992">1992</option>
      <option value="1993">1993</option>
      <option value="1994">1994</option>
      <option value="1995">1995</option>
      <option value="1996">1996</option>
      <option value="1997">1997</option>
      <option value="1998">1998</option>
      <option value="1999">1999</option>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
      <option value="2026">2026</option>
      <option value="2027">2027</option>
      <option value="2028">2028</option>
      <option value="2029">2029</option>
      <option value="2030">2030</option>
      <option value="2031">2031</option>
      <option value="2032">2032</option>
      <option value="2033">2033</option>
      <option value="2034">2034</option>
      <option value="2035">2035</option>
      <option value="2036">2036</option>
      <option value="2037">2037</option>
      <option value="2038">2038</option>
      <option value="2039">2039</option>
      <option value="2040">2040</option>
      <option value="2041">2041</option>
      <option value="2042">2042</option>
      <option value="2043">2043</option>
      <option value="2044">2044</option>
      <option value="2045">2045</option>
      <option value="2046">2046</option>
      <option value="2047">2047</option>
      <option value="2048">2048</option>
      <option value="2049">2049</option>
      <option value="2050">2050</option>
      <option value="2051">2051</option>
      <option value="2052">2052</option>
      <option value="2053">2053</option>
      <option value="2054">2054</option>
      <option value="2055">2055</option>
      <option value="2056">2056</option>
      <option value="2057">2057</option>
      <option value="2058">2058</option>
      <option value="2059">2059</option>
      <option value="2060">2060</option>
      <option value="2061">2061</option>
      <option value="2062">2062</option>
      <option value="2063">2063</option>
      <option value="2064">2064</option>
      <option value="2065">2065</option>
      <option value="2066">2066</option>
      <option value="2067">2067</option>
      <option value="2068">2068</option>
      <option value="2069">2069</option>
      <option value="2070">2070</option>



     </select> </td>
    </tr>
    
 <tr><td colspan="4" height="50"><input type="radio" name="gender" value="Male" class="text3" required>&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="radio" name="gender" value="Female" class="text3" required>&nbsp;Female</td></tr> 

</table>
<div style="position: absolute; left: 59px; width: 401px; top: 397px; height: 40px;"><input type="submit" name="submit" value="Singup" class="button1" required></div> 
</form>
</div>
<div style="position: absolute; left: -13px; top: 9px; width: 440px; height: 40px;" class="phpdiv">
<?php
if(isset($_POST['submit']))
 {
	$fname=$_POST['name'];
	$lname=$_POST['lastname'];
	$uid=$_POST['username'];
	$email=$_POST['email'];
	$pa=$_POST['password'];
	$pa1=$_POST['cpassword'];
	$month=$_POST['month'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	$gender=$_POST['gender'];
	$bdate=$month."/".$day."/".$year;
	$pa5=md5($pa);
	$chk=0;
	if($pa!=$pa1)
	{
		echo "<center><font color='#FF0000'>Passwword Dont match</font></center>";
		?><style type="text/css">
		.phpdiv
		{
			background-color:#B0DFF9;
			}
        </style><?php
		$chk++;
		}
		
		$dap=0;		if($month=='mm')
		{
		$dap++;
		$chk++;
		}
		if($day=='dd')
		{
		$dap++;
		$chk++;
		}
		if($year=='yy')
		{
			$dap++;
		$chk++;
			}
			if($dap!=0)
			{
		echo "<center><font color='#FF0000'>Please enter the proper date</font></center>";
		?><style type="text/css">
		.phpdiv
		{
			background-color:#B0DFF9;
			}
        </style><?php
		$chk++;
		}
		$mysqli=mysql_query("select * from login where username='$uid'");
		$sip=mysql_query("select * from userdata where email='$email'");
		$aop=mysql_num_rows($mysqli);
		$aap=mysql_num_rows($sip);
		if(!empty($aop))
		{
			echo "<center><font color='#FF0000'>Usename already used</font></center>";
		?><style type="text/css">
		.phpdiv
		{
			background-color:#B0DFF9;
			}
        </style><?php
		$chk++;
			}
			//////
			if(!empty($aap))
		{
			echo "<center><font color='#FF0000'>Email already used</font></center>";
		?><style type="text/css">
		.phpdiv
		{
			background-color:#B0DFF9;
			}
        </style><?php
		$chk++;
			}
			/////
		if($chk==0)
		{
			$saql=mysql_query("insert into userdata set name='$fname',lastname='$lname',username='$uid',email='$email',age='$bdate',gender='$gender'");
			if(empty($saql))
			{
			echo "Data not sent";
			}
			$sqol=mysql_query("insert into login set username='$uid',password='$pa5'");
			if(empty($sqol))
			{
			echo "Data not sent";
			}
			if(!empty($saql) && ($sqol))
			{
					echo "<center><font color='#0C0'>Sucessfully Created</font></center>";
		?><style type="text/css">
		.phpdiv
		{
			background-color:#B0DFF9;
			}
        </style><?php
			}
		}
		
 }
?>

</div>
</div>
<div style="position: absolute; left: 470px; top: 25px; width: 631px; height: 446px;"><img src="images/the-story-logo.jpg" width="750" height="470"></div>
</div>
</div>
</div>
</body>
</html>