<?php
header('Content-type: text/html; charset=utf-8');
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Шкафы </title>
</head>
<body>
<H1> Шкафы </H1>
<table border=2>
<tr> <td>Shurina</td><td>Dlina</td><td>Vusota</td> <td>Kol_cek</td></tr>
<?php
$fp=fopen("shkaf.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t%s\t%s\t%s\t%d\t%s\n");
       list($Shurina,$Dlina,$Vusota,$Kol_cek)=$stroka;
        //$Horoda=fscanf($fp,"%s\t");
        //$Dlina=fscanf($fp,"%d\t");
        //$Vusota=fscanf($fp,"%d\n");
echo "<TR><td>$name</td> <td>$Dlina</td><td>$Vusota</td><td> $Kol_cek</td></TR>";
}
fclose($fp);

}
?>
</body>
</html>

