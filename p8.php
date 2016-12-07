<?php 
echo "<br/>数值强制转换："; 
$string="2a大点的过过过过过过"; 
$string1=intval($string); 
echo '$string1的值：'.$string1.'$string2的值：';//单引号不会输出变量，将原样输出 
$string2=(int)($string); 
echo $string2 ;echo $string2 ;echo $string2 ;echo $string2 ;echo $string2 ;
?>
