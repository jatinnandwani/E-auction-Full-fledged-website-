
<?Php
$USERNAME=$_REQUEST["u2"];
$PRODUCT_NAME=$_REQUEST["pn"];
$YOUR_BID=$_REQUEST["yd"];
$con=mysql_connect("localhost","root","");
mysql_select_db("auction1",$con);
$sqlcmd="insert into mkbid values('$USERNAME','$PRODUCT_NAME','$YOUR_BID')";
$res=mysql_query($sqlcmd,$con);
if($res)
{
header("Location:f98.php");
}
else
{
echo "TRY AGAIN";
echo mysql_error();
}
mysql_close();
?>
