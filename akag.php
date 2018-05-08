<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("auction1",$con);
$sqlcmd="select PRODUCT_NAME,PRODUCT_DESCRIPTION from seller where username='akshay'";
$a=mysql_query($sqlcmd,$con);
echo "<table border=1 align='center'>";
echo "<tr><th>PRODUCT NAME</th><th>PRODUCT DESCRIPTION</tr>";
$r=mysql_fetch_array($a);

	 echo "<tr><td>".$r["PRODUCT_NAME"]."</td><td>".$r["PRODUCT_DESCRIPTION"]."</td></tr>";

echo"</table>";
?>