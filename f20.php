
<?Php
$USERNAME=$_REQUEST["u2"];
$PRODUCT_NAME=$_REQUEST["pn"];
$PRODUCT_DESCRIPTION=$_REQUEST["pd"];
$EXPECTED_PRICE=$_REQUEST["ep"];
$con=mysql_connect("localhost","root","");
mysql_select_db("auction1",$con);
$sqlcmd="insert into aditems values('$USERNAME','$PRODUCT_NAME','$PRODUCT_DESCRIPTION','$EXPECTED_PRICE')";
$res=mysql_query($sqlcmd,$con);
if($res)
{
header("Location:f23.html");
}
else
{
echo "TRY AGAIN";
echo mysql_error();
}
mysql_close();
?>
