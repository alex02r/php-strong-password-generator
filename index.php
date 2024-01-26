<?php
//funzione che genera password casuale
    function generatePassword($leng){
        $string1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number = '1234567890';
        $simbol = '!@-_?}{>]<[';
        $password = '';
        for ($i=0; $i < $leng; $i++) { 
            $num = rand(1,4);
            switch ($num) {
                case 1:
                    $password .= $string1[rand(0, strlen($string1))];
                    break;
                case 2:
                    $password .= $number[rand(0, strlen($number))];
                    break;
                case 3:
                    $password .= strtolower($string1[rand(0, strlen($string1))]);
                    break;
                
                case 4:
                    $password .= $simbol[rand(0, strlen($simbol))];
                    break;
                    
                default:
                    $password .= strtolower($string1[rand(1, strlen($string1))]);
                    break;
            }
        }
        return $password ;
    }
//controllo se il valore è stato inserito, se sia un numero e sia maggiore di 1 
    if(isset($_GET['length']) && is_numeric($_GET['length']) && $_GET['length'] > 1){
        $psw = generatePassword((int)$_GET['length']);
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
    <?php echo $psw ?? ''; ?>
    
</body>
</html>