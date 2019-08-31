<?php
include("send.php");
function comment()
{?>

<table>
<form action="comment.php?<?php alllink(); ?>" method="post">
<tr><font size=4>write something below...</font></tr>
<tr><td bgcolor=white colspan=2><font size=4><textarea name="comment" cols="65" rows="4" >comments </textarea></font> </td></tr></table>
<table cellspacing=15 >
<tr><td ><input type=submit name=submit value=comment></form></td>
<form action="photo.php?<?php photolink(); ?>" method="post">
<td><input type=submit name=submit value=photo ></form></td>
</tr>
</table>
<?php
}
 ?>