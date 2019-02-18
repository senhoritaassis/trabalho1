<?php
    $n1=10;
    $n2=4;
    $n3=8;
    $n4=6;
    
    $nota = ($n1+$n2+$n3+$n4)/4;
    echo "media=" .$nota;
   
    
     if ($nota>=6) {
         print "<br>Aprovado";
     }else {
         print "<br>Reprovado";
     }
  

//ex2
 $salario=1000;
 echo "sálario:" .$salario;
 
 if ($salario <= 1000) {
    
     $bonus= $salario+$salario*40/100;
    
 }else {
    $bonus= $salario+$salario*30/100; 
 }
 
 echo "<br>Salário atual: ".$bonus;
 
 //ex3
 $media=7.5;
$frequencia=0.75;
 if(($media>=6)&&($frequencia>=0.75)){
     print "<br>Aprovado";
 }else {
     print "<br>Reprovado";
 }
 
 //4
 
for($i=0;$i<=100;$i++){
   if($i%2==0){
       print$i."\n";
   }
}

//ex5
$n1=18;
$n2=4;

if($n1.$n2){
    print$n1;
    
}else{
    print$n2;
}

//ex6

$n1=54;
$n2=9;
$n3=0;

if($n1 > $n2 && $n1 > $n3){
    echo "O maior número é n1: ". $n1;
    
}elseif ($n2 > $n1 && $n2 > $n3){
    echo "O maior número é n2: ". $n2;
}else {
    echo "O maior número é n3: ". $n3;
}

//ex7
$n1=20;
$n2=20;

if($n1 > $n2){
    echo 'o primeiro numero é maior que o segundo numero';

}
if($n2 > $n1){
    echo "o primeiro numero é menor que o segundo numero";
    
    
}else {
    echo 'os numeros sao iguais';
}

//ex8
$idade=30;
if($idade < 18 or $idade > 60){
    echo 'meia entrada';
}else{
    echo 'inteira';
}

//ex9

for ($i = 1; $i <= 10; $i++) {
    echo "<br>tabuada do $i<br>";
    for ($j = 1; $j <= 10; $j++){
        $resul = $i * $j;
    echo "[$i x $j = $resul]";
}
}
