<?php

//die(var_dump($_POST));

if(!empty($_POST['chk-dia'])){
    
    $horarios = $_POST['chk-dia'];
    
    foreach($horarios as $horario){
        echo "<p>ID Horario: ".key($horarios)."</p>";
        for($i = 0; $i < 7; $i++){
            if(isset($horario[$i])){
                $dias[$i] = $horario[$i];
            } else{
                $dias[$i] = 0;
            }
        }
        next($horario);
        next($horarios);

        for($i = 0; $i < 7; $i++){
            echo $dias[$i];
        }

    }
}