
<?Php
mysql_connect("localhost","root","");
mysql_select_db("auction1");
$username=;

$SECURITY_QUESTION=$_REQUEST["sq"];
$SECURITY_ANSWER=$_REQUEST["sa"];
$r=mysql_query("select * from seller where SECURITY_QUESTION='".$SECURITY_QUESTION."'and SECURITY_ANSWER='".$SECURITY_ANSWER."'");
$n=mysql_num_rows($r);
if($n==1)
{
echo "welcome";



}
else
{
echo "sorry";

}
?>
