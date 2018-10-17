<?php
  
// Formát příchozícho příspěvku 
  
if(isset($_POST['submit'])) {
    
    $name = $_POST['p_name'];
    $note = $_POST['p_text'];
    
    
$name = "<strong>" . $name . "</strong>" . "<br>";
$note = $note . "<br>" . "<hr>" . "";

$vzkaz = $name . $note;

        }   
                   
// Zapíše příspěvek do návštěvní knihy

    $handle = fopen('prispevky.txt', 'a');

     if ($handle == true) {
        
        fwrite($handle, $vzkaz);
        echo "Příspěvek byl uložen" . "<br>" . "<br>";
        
        } else {
            
        echo "Příspěvek se nepodařilo uložit" . "<br>" . "<br>";
        }
     
        
fclose($handle);    

// Odkaz zpět na návštěvní knihu    
    
echo '<a href="/php-lekce-4/domaci_ukol/navstevni_kniha.php">Zpět na návštěvní knihu</a>';

// Odebere proměnné z formuláře - kvůli duplikaci

unset($_POST['p_name']);
unset($_POST['p_text']);
    
    ?>
    
    