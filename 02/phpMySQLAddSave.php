<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("ecp");
$strSQL = "INSERT INTO customer ";
$strSQL .="(CustomerID,Name,Email,CountryCode,Budget,Used) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["txtCustomerID"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."' ";
$strSQL .=",'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."') ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
echo "Save Done.";
}
else
{
echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>