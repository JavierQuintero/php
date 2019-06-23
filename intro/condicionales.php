<?php

    #Condiciones

    $a = 5;
    $b = 10;

    if($a > $b){
        echo "a es mayor que b";
    }
    else if($a == $b){
        echo "a es igual que b";
    }
    else{
        echo "a es menor que b";
    } 

        #objeto date()
        $diaSemana = date('l');
            echo  "<h2>$diaSemana</h2>";
    
    
    #Switch

    $dia = $diaSemana;
    switch($dia){
        case 'Friday':
            echo "<p>Voy a estudiar PHP!</p>";
        break;

        case 'Saturday':
            echo "<p>Voy a farriar!</p>";
        break;

        case 'Sunday':
            echo "<p>Voy a Descanzar!</p>";
        break;

        default:
            echo "<p>Voy a camellar</p>";
    }


        #Ciclo While
        echo "<h5>Ciclo While</h5>";
    $n = 1;
    while($n <= 5){
        
        echo $n." "; 
        $n++;
    }

        #Ciclo doWhile
        echo "<h5>Ciclo doWhile</h5>";
    $p = 1;

    do{
        echo "<p>$p</p>";
        $p++;
    }
    while($p <= 5);

        #Ciclo for
        echo "<h5>Ciclo For</h5>";
    for($i=0; $i<=5; $i++){
        
        echo $i;
    }
?>