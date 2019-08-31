<?php $pu=$_REQUEST['pu'];
include("header.php");
?>
<h3>page:<?php echo $pu; ?></h3>
<?php
if($pu==2){ ?>
<form action="index.php">
<input type=submit value="newer confession"  ></form>
<?php  }
else{ ?>
<form action="next.php">
<input type="hidden" name="pu" value="<?php echo $pu-1; ?>">
<input type=submit value="newer confession"  ></form>
<?php	 }
?> <a name="comment" ></a><?php
include("showcomment.php");
showcomment();

include("footer.php")
?>