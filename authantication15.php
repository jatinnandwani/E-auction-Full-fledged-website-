
<?Php
$NAME=$_REQUEST["nm"];
$EMAIL=$_REQUEST["em"];
$MOBILE=$_REQUEST["mb"];
$COMMENT=$_REQUEST["cm"];
$con=mysql_connect("localhost","root","");
mysql_select_db("auction1",$con);
$sqlcmd="insert into contact values('$NAME','$EMAIL','$MOBILE','$COMMENT')";
$res=mysql_query($sqlcmd,$con);
if($res)
{
header("Location:f19.html");
}
else
{
echo "TRY AGAIN";
echo mysql_error();
}
mysql_close();
?>
