<?php
// 1. vypsání historie přístupů

if (!file_exists('pristupy.txt')) {
    
    echo 'Vítejte, na této stránce jste prvně!';
} else {
    
    $handle = fopen('pristupy.txt', 'r');
    
    if ($handle === false) {
        echo 'Chyba při otevírání souboru!';
        exit;
    }
    
    echo 'Historie přístupů:<br>';
    $text = fread($handle, 1000);
    echo $text;
    
    fclose($handle);
}

// 2. přidání data aktuálního přístupu na konec souboru

$handle = fopen('pristupy.txt', 'a');
fwrite($handle, date('Y-m-d H:i:s') . '<br>');
fclose($handle);



