<?php
//funzione che genera password casuale
    function generatePassword($leng){
        for ($i=0; $i < $leng; $i++) { 
            
        }
    }
//controllo se il valore è stato inserito, se sia un numero e sia maggiore di 1 
    if(isset($_GET['length']) && is_numeric($_GET['length']) && $_GET['length'] > 1){
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>
<body>
    <form action="./index.php" method="GET">
        Inserisci la lunghezza della password:
        <input type="number" name="length" id="num" min="1">
        <button type="submit">Genera</button>
    </form>
</body>
</html>