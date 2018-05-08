
<?Php
mysql_connect("localhost","root","");
mysql_select_db("auction1");
$LOGIN_ID=$_REQUEST["u1"];
$PASSWORD=$_REQUEST["p1"];
$r=mysql_query("select * from login where LOGIN_ID='".$LOGIN_ID."'and PASSWORD='".$PASSWORD."'");
$n=mysql_num_rows($r);
if($n==1)
{
echo "welcome";



}
else
{
echo "sorry wrong id or pwd";

}
?>
