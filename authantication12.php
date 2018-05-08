<?Php
mysql_connect("localhost","root","");
mysql_select_db("auction1");
$USERNAME=$_REQUEST["u2"];
$PASSWORD=$_REQUEST["p2"];
$r=mysql_query("select * from bidder where USERNAME='".$USERNAME."'and PASSWORD='".$PASSWORD."'");
$n=mysql_num_rows($r);
if($n==1)
{
echo "welcome";
header("Location:f45.html");


}
else
{
echo "sorry wrong id or pwd";
header("Location:f55.html");
echo mysql_error();

}
?>
