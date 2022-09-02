<?php
$matricula = $_POST ['matricula'];
$aluna = $_POST ['aluno'];
$materia = $_POST ['materia'];
switch ($materia){

case 1:
    Echo "Matriculado em: Matemática.";
    break;
case 2:
    Echo "Matriculado em: Linguagem de Programação";
    break;
case 3:
    Echo "Matriculado em: Português";
        break;

 case 4:
    Echo "Matriculado em: Inglês";
     break;

     default:
     echo "⚠ ERRO ⚠: Número de Matéria Inválido";
break;
    
}
echo '<br> <br>';
echo "Aluno (A): $aluna";
echo '<br> <br>';
echo "Numero da matricula: $matricula"; 
echo '<br> <br>';

?>