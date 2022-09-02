<?php
$texto = $_POST ['Texto'];
switch ($texto){


case a:
    Echo "Inclusão";
    break;
case e:
    Echo "Exclusão";
    break;
case i:
    Echo "Alteração";
        break;

 case o:
    Echo "Consulta";
     break;
        
 case u:
   Echo "Relatório";
      break;
        
     default:
     echo "⚠ ERRO ⚠: Opção Inválida";
break;
    
}                   
?>