
<html>
<title>
YourBid.com WHERE BUYERS AND SELLERS MEET!
</title>

<style>

body
{
background-image:f2.jpg;
}
a
{
padding:5px;
text-decoration:none;
background-color:red;
color:white;
border-radius:5px;
}

marquee
{
color:white;
}
footer
{
background-color:#ADD8E6;
height:50px;
text-align:center;
}
button
{
border-radius:5px;
}
</style>
<body  bgcolor="#d3f0eb">

<div style=" background-color: #ADD8E6;height:170px;">
<header>

<h1><b>YourBid.Com</b></h1>
<p><b>Sell And Buy Your Products </b></p>
<p align="right">WELCOME SELLER</p>

<div align="right">
<a ALIGN="RIGHT" href="f12.html">Home</a>
<a ALIGN="RIGHT" href="f31.html">ABOUT US</a>
<a ALIGN="RIGHT" href="f22.html">ADD ITEMS</a>
<a ALIGN="RIGHT" href="f16.php">YOUR CURRENT LISTING</a>
<a ALIGN="RIGHT" href="f30.html">CONTACT US</a>
<a ALIGN="RIGHT" href="file1.html">SIGN OUT</a>
<marquee  direction="right"">Welcome To Live Auction</marquee>
</div>
</header>
</div>
<br/>
<div align="center">

<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("auction1",$con);
$sqlcmd=("select PRODUCT_NAME,PRODUCT_DESCRIPTION,EXPECTED_PRICE from aditems");
$a=mysql_query($sqlcmd,$con);
echo "<table border=1 align='center'>";
echo "<tr><th>PRODUCT NAME</th><th>PRODUCT DESCRIPTION</th><th>EXPECTED PRICE</th></tr>";
while($r=mysql_fetch_array($a))
{
	 echo "<tr><td>",$r["PRODUCT_NAME"]."</td><td>",$r["PRODUCT_DESCRIPTION"]."</td><td>",$r["EXPECTED_PRICE"]."</td></tr>";
}
echo"</table>";
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<footer>
</b>2016 Copyright YourBid All Rights Reserved &copy</b>
</footer>
</body>
</html>