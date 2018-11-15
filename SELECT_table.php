<html>
<head>
<title>ThaiCreate.Com</title>
<?php
$host = "localhost";
$user = "root";
$pass = "12345678";
$dbname = "myDB";
$conn=mysql_connect($host,$user,$pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
    mysql_select_db($dbname,$conn); // เลือกฐานข้อมูล
    mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย
?> 
</head>
<body>
<table border="0" width="500">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
        </tr>
        <?php
            $sql="Select * From myguests"; // คำสั่ง sql อ่านข้อมูลจากตาราง tbl_name
            $result=mysql_query($sql); // คิวรี่คำสั่ง sql
            $num=mysql_num_rows($result); // ตรวจสอบจำนวน record ที่คิวรี่ออกมา
            if($num>0){ // ถ้าจำนวน record มากกว่า 0
                $count=1; // กำหนดตัวแปร count เพื่อระบุตำแหน่ง record
                while($recordset=mysql_fetch_assoc($result)){ // วน loop ดึงข้อมูลออกมา ทีละ record
        ?>
        <tr>
            <td align="center"><?php echo $count; ?></td>
            <td align="center"><?php echo $recordset['firstname']; ?></td>
            <td align="center"><?php echo $recordset['lastname']; ?></td>
        </tr>
        <?
                    $count+=1; // เพิ่ม count ทีละ 1
                }
            }
        ?>
    </tbody>
</table>
</body>
</html>
