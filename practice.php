<?php

function add ($a, $b){
    return $a+$b;
}

function substract ($a, $b){
    return $a-$b;
}

function multiplication ($a, $b){
    return $a * $b;
}

function divided ($a, $b){
    if($b!=0){
        return $a/$b;
    }
    else
    
        return "divided is not possible" ;
        
    
}
