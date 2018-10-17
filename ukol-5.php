<?php

function minimum($a, $b) {
    
    if(!(is_numeric($a) && is_numeric($b))) {
    
        return "Chyba";
        
        }
        
        if ($a>$b) {
            
            return $b;
            
            } else {
                
            return $a;
                
        }
        
    }
    
  
        
        
echo minimum("x",12.3);
