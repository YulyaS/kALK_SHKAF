<?php
$Shurina=$_REQUEST['Shurina'];
echo "Shurina=$Shurina <br>";
$Dlina=$_REQUEST['Dlina'];
echo "Dlina=$Dlina <br>";
$Vusota=$_REQUEST['Vusota'];
echo "Vusota=$Vusota <br>";
$result=$_REQUEST['result'];
echo "result=$result <br>";
$Kol_cek=$_REQUEST['Kol_cek'];
echo "Kol_cek=$Kol_cek <br>";
$fp=fopen("shkaf.txt","a");
fputs($fp,"$Shurina\t$Dlina\t$Vusota\t$Kol_cek\t$result\t");
fclose($fp);
?>
