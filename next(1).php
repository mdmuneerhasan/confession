<?php session_start(); 
if(isset($_SESSION["name"]))
{ 

?><h1><font><?php
echo "welcome ".$_SESSION["name"];
?></font></h1>
</h1><a name="top"></a>
<form action="logout.php">
<table cellspacing=10 >
<tr><td><input type="submit" value="LOG OUT" ></td></form>
<?php 

 $name=$_SESSION["name"];}
else{ $name='none' ;}
//$ppg=photo per page
$ppg=10;   
?> <html>
<head><title>JMI-Faculty of Engineeringand technology confessions </title></head>
<body bgcolor="grey" >
<?php  function alllink(){
 echo "pg=1";} ?>
<form action="index.php">
<table cellspacing=10 >
<tr><td><input type="submit" value="HOME" ></td></form><form action="next.php" ></form></tr>
</table>
<table bgcolor="sky blue" cellpadding=8 style="width:40%">
<tr><td rowspan=2><img src="photo/confess.img" style="max-width:140px"></td><td>
<font colour=white size=5>JMI-Faculty of Engineering and <br> technology confessions</font></td></tr><tr>
<td valign=top >@JMI.FET.confessions</td></tr>

</table>

<hr align=left size=4 width=40% >
<?php       
include("dbcon.php");
$pg=$_REQUEST['pg'];
$llg=$pg;
$lk=$pg;//for like
//loops for page number creation
$query="SELECT * FROM `comment`ORDER BY `no` DESC";
$run=mysqli_query($con,$query);
$jj=mysqli_num_rows($run);
//maxmum number of page
$pm=$jj/$ppg-1;
//number on first cell
$nc=$pg-4;
if($nc<1)
$nc=1;
//number of cells
$c=1;?><table><?php
while($c<10)
{ $c++;
?><td style="width:50px "  bgcolor ="sky blue" ><a href="next.php?pg=<?php echo $nc ;?>"><?php
echo "page:".$nc;
?></a></td><?php
if($nc>=$pm)break;
$nc++;
}?></table>
<table style="margin-left:200px"><tr><td bgcolor = red ><font size=6><?php echo "page:".$pg; ?></font></tr></table><?php
if(isset($_REQUEST['like'])){ $ll=$_REQUEST['ll']+1; $nn=$_REQUEST['nn'];
$up="UPDATE `comment` SET `lik`='$ll' 
WHERE `no`= '$nn' "; 
$run=mysqli_query($con,$up); }
	global $con;
	global $name ;
$query="SELECT * FROM `comment`ORDER BY `no` DESC";
$run=mysqli_query($con,$query);
$im=0;
if($run==true)
{ while($data=mysqli_fetch_assoc($run))
	{ $im++;
if((($llg-1)*$ppg+10)<$im&&$im<=($llg*$ppg+10)) 
	{
if (isset ($data['images']))
{ 
?>

<table bgcolor=white>  <a name="t<?php echo $data['no']; ?>" ></a>
<tr><td style="color:blue ;font-size:25">JMI-Faculty of Engineering and<br> Technology Confessions</td></tr>
<tr><td style="color:black ;font-size:20">#<?php echo $data['no']; ?></td></tr>
<tr><td>
<?php 
if(($data['images'])==true ){ ?>
<a  href="ccomment.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?> ">
<img src="photo/<?php echo $data['images'];?>" style="max-width:250px;"/></td>
</a>
<?php } ?>
<tr><td style="color:black ;font-size:20"><pre><?php echo $data['comment']; ?></pre></td></tr>
<tr><td style="color:black ;font-size:20">~<?php if($data['nature']=='s')echo $data['uname'];else echo  $data['gender'];?></td></tr>
<tr><td>
<?php echo $data['lik']; ?>   <a style="text-decoration:none" href="next.php?nn=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?>&ll=<?php echo $data['lik']; ?>&like=lik#t<?php echo $data['no']; ?> ">
<b>&nbsp&nbsp&nbsp Like&nbsp </b></a>
<a style="text-decoration:none" href="ccomment.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?> " >
<b>&nbsp&nbsp Comment&nbsp </b></a>
<a style="text-decoration:none" href="https://developers.facebook.com/docs/plugins/" >
<b>&nbsp&nbsp Share&nbsp </b></a>
<?php  
if($data['uname']==$name)
{ ?> 
<a style="text-decoration:none" href="delete.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?>" >
<b>&nbsp&nbsp Delete&nbsp </b></a>
<?php } ?>
</td></tr>
</table>
<hr color=grey>
<?php
}}}}
 ?>
<table  >
<tr><th bgcolor="sky blue"><a href="#top">RETURN TO TOP</a></th></tr>
</table>

<table cellspacing=9 
<tr><th bgcolor="sky blue"><a href="next.php?pg=<?php if($pg<$pm)echo $pg+1;else echo $pg ; ?>">NEXT</a></th></tr>
<tr><th bgcolor="sky blue"><a href="contact.php?<?php alllink(); ?>">CONTACT US</a></th></tr>

</table>
</body>
</html>


