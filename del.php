<?php 
include("dbcon.php");
 $no=$_REQUEST['no'];
  $pg=$_REQUEST['pg'];
session_start();
if(isset($_SESSION["name"]))
{ $query="SELECT * FROM `comment`WHERE `no`='$no' ";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);
$name=$_SESSION["name"]; 
if($data['uname']==$name)
{  echo 'enter';
$qry="DELETE FROM `comment` WHERE `no`='$no' ";
$run=mysqli_query($con,$qry);
$qry="DELETE FROM `ccomment` WHERE `no`='$no' ";
$run=mysqli_query($con,$qry);
if($run==true)
{?><script>	
alert('comment deleted successfully');
window.open('next.php?pg=<?php echo $pg; ?>','_self');
</script>
<?php
}
}
}
 ?>