<!DOCTYPE html>
<html lang="cz">
<head>
    <title>Návštěvní kniha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

<form method="post" action="/php-lekce-4/domaci_ukol/vlozit.php">
 
  <div class="form-group">
    <label>Jméno:</label>
    <input type="text" name="p_name" class="form-control" >
  </div>
  
  <div class="form-group">
    <label>Vzkaz:</label>
    <input type="text" name="p_text" class="form-control" >
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Zapsat do návštěvní knihy</button>
  
</form>
<br>

<?php

// Atributy funkce seradPrispevky()

$oddelovac = ":";
$prispevky = "prispevky.txt";


//Zobrazení příspěvků návštěvní knihy na úvodní stránce

$handle = @fopen('prispevky.txt', 'r');

    if ($handle == true && filesize($prispevky) > 0) {
    
    $content = fread($handle, filesize($prispevky));
    echo $content;
    seradPrispevky($prispevky, $oddelovac);
    
    } else {
        echo "Žádné příspěvky";
        }
        
@fclose($handle);        
  


//Funkce, která seřadí příspěvky od nejnovějšího po nejstarší 

function seradPrispevky($prispevky, $oddelovac) {
        
    $handle = fopen($prispevky, 'r');
    
if ($handle) {
    
    // Vezme soubor řádek po řádku a rozdělí ho, následně převrátí string
    // Přehození zatím nefunguje !!!
    
    while (($line = fgets($handle, 4096)) !== false) {
        
        $row = explode($oddelovac, $line);

        $row = (array_reverse($row));
        
        return $row;
        
        
        }
        file_put_contents($prispevky, $row);
    }
    
  }  



?>


</div>
</body>
</html>