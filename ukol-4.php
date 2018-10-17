<?php

function maximum($a, $b) {
    
    if(is_numeric($a) && is_numeric($b)) {
        
         if($a>=$b) {
            
            echo "$a";
            
            }
            
        elseif($b>$a) {
            
            echo "$b";
            
            }
            
           } 
        
            
        else {
            
            echo "Chyba!";
            
            }

      echo "<br>";    } 
            
    maximum(304,560);
    maximum(7.2,7.1);
    maximum(23,23);
    maximum(253,"x");
    
  
            
            