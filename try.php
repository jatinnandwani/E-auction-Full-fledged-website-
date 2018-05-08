<?php
$SECURITY_QUESTION=$_REQUEST["sq"];
$USERNAME=$_REQUEST["u2"];
$con=mysql_connect("localhost","root","");
mysql_select_db("try",$con);
$sqlcmd="insert into catch values('$SECURITY_QUESTION','$USERNAME')";
$res=mysql_query($sqlcmd,$con);
if($res)
{
header("Location:try1.php");
}
else
{
echo "TRY AGAIN";
echo mysql_error();
}
mysql_close();
?>
