<?php
$SECURITY_QUESTION=$_REQUEST["sq"];
$con=mysql_connect("localhost","root","");
mysql_select_db("try",$con);
$sqlcmd=("select USERNAME,SECURITY_QUESTION from catch where SECURITY_QUESTION="WHAT IS THE NAME OF YOUR PET?" );
$a=mysql_query($sqlcmd,$con);
echo "<table border=1 align='center'>";
echo "<tr><th>SECURITY QUESTION</th><th>USERNAME</th></tr>";
while($r=mysql_fetch_array($a))
{
	 echo "<tr><td>",$r["SECURITY_QUESTION"]."</td><td>",$r["USERNAME"]."</td></tr>";
}
echo"</table>";
?>