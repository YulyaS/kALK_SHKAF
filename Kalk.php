<?php
header('Content-type: text/html; charset=utf-8');
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Шкафы</title>
<script language="JavaScript">
function touch()
{
alert("I was touched!");
}
function RadioColor(i)
{
if (i==3) document.bgColor="Blue";
if (i==4) document.bgColor="Yellow";

}
function calculate()
{

//document.forms[0].Shurina.value;
var Shurina=parseFloat(document.myform.size_width.value);
var Dlina=parseFloat(document.myform.size_deep.value);
var Vusota=parseFloat(document.myform.size_height.value);
document.myform.result.value=(Shurina*Dlina*Vusota);


}
</script>

</head>
<body>
<form name=myform action="php.php">
<div class="logo">
        <h1><a href="index.html">Шкафы</span></a></h1>
      </div>
 
          <h2>Расчет стоимости шкафа</h2>
          <div class="clr"></div>

<label for="width">Shurina&nbsp;&nbsp;<span class="err">
<input type="text" name="size_width" id="size_width" class="err-inner">
  		  <div class="deep"><label for="deep">Dlina&nbsp;&nbsp;<span class="err"><input type="text" name="size_deep" id="size_deep" class="err-inner">
								
         <div class="height"><label for="height">Vusota&nbsp;&nbsp;<span class="err"><input type="text" name="size_height" id="size_height"  class="err-inner">
								
        <div class="pad1">
						<div class="qnt1">
<label for="qnt1">Kol_cek&nbsp;&nbsp;

<span class="err"><select name="list_sections" id="list_sections" class="small"><option value="1">1</option><option value="2" selected="">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>

<span class="err-mess"><i></i>
<span class="err-inner">
									</label></div>
					

</div>Оберіть улюблений колір
<br>
<INPUT TYPE="RADIO" ONCLICK="RadioColor(3);"NAME="RBut"><FONT SIZE="4">Дуже дуже дуже синій</FONT><br>
<INPUT TYPE="RADIO" ONCLICK="RadioColor(4);"NAME="RBut"><FONT SIZE="4">Желтые</FONT><br>

<!-- 
						<input type="submit" value="Посчитать" class="input-submit"/>
						 -->
<input type="text" name="result">
<div class="total"><br>
</div>

<br>
<input type=button value="Стоимость" onClick="calculate();"><br>
<input type=submit value="Проверте данные"><br>

</form>

					</div>
</body>
</html>

