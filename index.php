<?php

$arr = array("IT", "Linio", "Linianos");
$arregloDatos = [];
$html = "";
for ($i = 1; $i <= 100; $i++){
  if(($i % 3 == 0 || $i % 5 == 0) && array_push($arregloDatos, $arr[(($i % 3 == 0 && $i % 5 >= 1) + ($i % 3 == 0 && $i % 5 == 0) * 2)]) || array_push($arregloDatos,$i)){
    $html .= $arregloDatos[$i-1]."\n";
  }
  
}
echo $html;
