
<?php
$USERNAME=$_REQUEST["u2"];
$PASSWORD=$_REQUEST["p2"];
$EMAIL=$_REQUEST["em"];
$MOBILE=$_REQUEST["mb"];
$SECURITY_QUESTION=$_REQUEST["sq"];
$SECURITY_ANSWER=$_REQUEST["sa"];
$con=mysql_connect("localhost","root","");
mysql_select_db("auction1",$con);
$sqlcmd="insert into seller values('$USERNAME','$PASSWORD','$EMAIL','$MOBILE','$SECURITY_QUESTION','$SECURITY_ANSWER')";
$res=mysql_query($sqlcmd,$con);
if($res)
{
header("Location:file1.html");
}
else
{
echo "TRY AGAIN";
echo mysql_error();
}
mysql_close();
?>

