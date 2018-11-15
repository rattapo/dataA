<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("ecp");
$strSQL = "DELETE FROM customer ";
$strSQL .="WHERE CustomerID = '".$_GET["CusID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
echo "Record Deleted.";
}
else
{
echo "Error Delete [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>