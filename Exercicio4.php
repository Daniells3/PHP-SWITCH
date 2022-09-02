<?php
$num = $_POST ['Numero'];
switch ($num){


case 1:
    Echo "Inclusão";
    break;
case 2:
    Echo "Exclusão";
    break;
case 3:
    Echo "Alteração";
        break;

 case 4:
    Echo "Consulta";
     break;
        
 case 5:
   Echo "Relatório";
      break;
        
     default:
     echo "⚠ ERRO ⚠: Opção Inválida";
break;
    
}                   
?>