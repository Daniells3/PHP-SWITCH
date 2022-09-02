<?php
$texto = $_POST ['texto'];
switch ($texto){

case 'a'||'A':
case 'e'||'E':
case 'i'||'I':
case 'o'||'O':
case 'u'||'U':
echo "⚠ COM CERTEZA É UMA VOGAL ⚠";
break;

default:
     echo "⚠ DEFINITIVAMENTE NÃO É UMA VOGAL ⚠";
break;

}                   
?>
