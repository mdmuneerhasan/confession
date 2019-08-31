<?php 
include("dbcon.php");
 $cno=$_REQUEST['cno'];
 $no=$_REQUEST['no'];
  $pg=$_REQUEST['pg'];
session_start();
if(isset($_SESSION["name"]))
{ $query="SELECT * FROM `ccomment`WHERE `cno`='$cno' ";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);
$name=$_SESSION["name"]; 
if($data['uname']==$name)
{  echo 'enter';
$qry="DELETE FROM `ccomment` WHERE `cno`='$cno' ";
$run=mysqli_query($con,$qry);
if($run==true)
{?><script>	
alert('comment deleted successfully');
window.open('ccomment.php?pg=<?php echo $pg; ?>&no=<?php echo $no; ?>','_self');
</script>
<?php
}
}
}
 ?>