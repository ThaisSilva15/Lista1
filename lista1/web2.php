<?php
echo"Exercício 1<br>";
    $i1=10;
    $i2=4;
    $i3=8;
    $i4=6;
    
    $media= ($i1+$i2+$i3+$i4)/4;
    if ($media >= 6) {
    echo" Aprovado" ;
} else {
 echo"Reprovado";
}
    echo "<br>";
    
    
echo "<br>Exercício 2<br>";

 $salario=1500;
 
 if($salario<=1000){
     $bonus=$salario*0.4;
     }else {
         $bonus=$salario*0.3;
     } 
     echo "Salario<br>" .$salario ."<br>";
     echo "Bonus<br>" .$bonus ."<br>";
     echo "Novo salario<br>" .($bonus+$salario);
     
        echo "<br>";
        
        
     echo "<br>Exercício 3<br>";
     $med=7.5;
     $frequencia=0.75;
     
     if(($med>=6)&&($frequencia>=0.75)){
         echo "Aprovado";
     }else{
         echo"Reprovado";
     }
     
     echo "<br>";
     
     echo "<br>Exercício 4<br>";
     
     for($i=0; $i<=100;$i++){
         if($i %2==0){
             echo $i ."<br>";
         }
     }
        echo "<br>";
     echo "<br>Exercício 5<br>";
     
     $numero1=16;
     $numero2=54;
     
     if($numero1>$numero2){
         echo $numero1 ." É maior";
     }else{
         echo $numero2 ." É maior";
     }
        echo "<br>";
     
     echo "<br>Exercício 6<br>";
     
     $num1=58;
     $num2=7;
     $num3=33;
     
      if(($num1>$num2) &&($num1>$num3)){
         echo $num1 ." É maior";
     }else{ 
         if(($num2>$num1) &&($num2>$num3)){
         echo $num2 ." É maior";
     }else{
         echo $num3 ." É maior";
     }  
     
     } 
         echo "<br>";    
             
     echo "<br>Exercício 7<br>";
        
     $nume1=25;
     $nume2=40;
    
      if($nume1 == $nume2){
         echo $nume1 ." É igual". $nume2;
     }else{ 
         if($nume1>$nume2){
         echo $nume1 ." É maior";
     }else{
         echo $nume2 ." É maior";
     }  
     
     } 
     echo "<br>";
     
     echo "<br>Exercício 8<br>";
     
        $idade=19;
     
     if (($idade<18) or ($idade>60)){
         echo "Pagar: Meia";
     }else{
         echo "Pagar: Inteira"; 
     }
     
     echo "<br>";

     
     echo "<br>Exercício 9<br>";
     
         for($j=1;$j<=10;$j++){
      echo "Tabuada do ".$j."<br>";
    for($i=1;$i<=10;$i++){
       print $j." x ".$i." = ".($j*$i)."<br>";
    }
    echo "<br>";
    } 
