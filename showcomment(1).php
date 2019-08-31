<?php
include("dbcon.php");
$i=0;
function showcomment()
{
include("dbcon.php");	
 if(isset($_REQUEST['like'])){ $ll=$_REQUEST['ll']+1; $nn=$_REQUEST['nn'];
$up="UPDATE `comment` SET `lik`='$ll' 
WHERE `no`= '$nn' "; 
$run=mysqli_query($con,$up); }
	global $con;
	global $name ;
$query="SELECT * FROM `comment`ORDER BY `no` DESC";
$run=mysqli_query($con,$query);
$i=0;$k=0; global $pu;
if($run==true){ while($data=mysqli_fetch_assoc($run))
	{ $k++;	if($k>($pu*10-10))
{ $i++;

if($i==11) break;
if (isset ($data['images']))
{ $pg=0; 
?>
<table style="width:95%" align="center">
 <a name="<?php echo $data['no']; ?>" ></a>
<tr><td style="color:blue ;font-size:25 ">JAMIA MILLIA ISLAMIA<br> confession space</td></tr>
<tr><td style="color:black ;font-size:20">#<?php echo $data['no']; ?></td></tr>
<tr><td>
<?php 
if(($data['images'])==true ){ ?>
<a  href="ccomment.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?> ">
<img src="photo/<?php echo $data['images'];?>" style="max-width:250px;"/></td>
</a>
<?php } ?>
<tr><td style="color:black ;font-size:20 ;"><?php echo $data['comment']; ?></pre></td></tr>
<tr><td style="color:black ;font-size:20">~<?php if($data['nature']=='s')echo $data['uname'];else echo  $data['gender'];?></td></tr>
<tr><td>
<?php echo $data['lik']; ?>   <a style="text-decoration:none" href="index.php?nn=<?php echo $data['no']; ?>&ll=<?php echo $data['lik']; ?>&like=lik#<?php echo $data['no']; ?> ">
<b>&nbsp&nbsp&nbsp Like&nbsp </b></a>
<a style="text-decoration:none" href="ccomment.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?> " >
<b>&nbsp&nbsp Comment&nbsp </b></a>
<a style="text-decoration:none" href="https://www.facebook.com" >
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

}
	}}
}}

 ?>