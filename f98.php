
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
<p align="right">WELCOME BIDDER</p>

<div align="right">
<a ALIGN="RIGHT" href="f45.html">Home</a>
<a ALIGN="RIGHT" href="f32.html">ABOUT US</a>
<a ALIGN="RIGHT" href="f79.php">MAKE A BID</a>
<a ALIGN="RIGHT" href="">YOUR BID</a>
<a ALIGN="RIGHT" href="f69.php">ALL LISTINGS</a>
<a ALIGN="RIGHT" href="f39.html">CONTACT US</a>
<a ALIGN="RIGHT" href="f40.html">SIGN OUT</a>
<marquee  direction="right"">Welcome To Live Auction</marquee>
</div>
</header>
</div>
<br/>
<div align="center">

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("auction1",$con);
$sqlcmd="select PRODUCT_NAME,PRODUCT_DESCRIPTION,PRODUCT_IMAGE,EXPECTED_PRICE from aditems";
$a=mysql_query($sqlcmd,$con);
echo "<table border=1 align='center'>";
echo "<tr><th>PRODUCT NAME</th><th>PRODUCT DESCRIPTION</th><th>EXPECTED PRICE</th></tr>";
 echo"<h1>PRODUCTS UP FOR AUCTION</h1>";
while($r=mysql_fetch_array($a))
{
	
	 echo "<tr><td>",$r["PRODUCT_NAME"]."</td><td>",$r["PRODUCT_DESCRIPTION"]."</td><td>",$r["EXPECTED_PRICE"]."</td></tr>";
}
echo"</table>";
?>
<div align="center">
<h3><b>SUCCESFULL</b></h3>
<h2><b>WHY WAIT....LETS MAKE A NEW BID</b></h2>
<h1><b>MAKE DESIRED BID</b></h1>
<div style="font-family:verdana;font-size:20; ">
<form action="f99.php" method="get">
<b>USERNAME </b><input type="text" name="u2" placeholder="ENTER....">
<br/>
<br/>
<br/>
<b>Product Name </b><input type="text"  name="pn"  placeholder="ENTER....">
<br/>
<br/>
<br/>
<b>YOUR BID </b><input type="integer" name="yd"  placeholder="ENTER....">
<br/>
<br/>
<br/>
<input type="submit" value="SUBMIT">
</div>
</form>
<footer>
</b>2016 Copyright YourBid All Rights Reserved &copy</b>
</footer>
</body>
</html>