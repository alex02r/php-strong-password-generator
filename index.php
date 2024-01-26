<?php
    include __DIR__.'/partials/functions.php';

    session_start();
    //controllo se il valore è stato inserito, se sia un numero e sia maggiore di 1 
    if(isset($_GET['length'])){
        if (is_numeric($_GET['length']) && $_GET['length'] >= 4) {
            $_SESSION['psw'] = generatePassword((int)$_GET['length']);
            header('Location: ./password.php');
        }else{
            $result = 'Il valore vede essere superiore a 4';
        }
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
    <header class="bg-dark text-white p-4">
        <h1>Generate password</h1>
    </header>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="./index.php" method="GET">
                    <div class="my-3">
                        <label class="form-label" for="num">Inserisci la lunghezza della password:</label>
                        <input class="form-control" type="number" name="length" id="num" min="4" style="width: 4rem">
                        <?php  echo $result ?? ''; ?>
                    </div>
                    <div class="">
                        Scegli il formato della password:
                        <div class="form-cehck">
                            <input class="form-ceck-input" type="checkbox" name="number" id="check1">
                            <label class="form-ceck-label" for="check1">Numeri</label>
                        </div>
                        <div class="form-cehck">
                            <input class="form-ceck-input" type="checkbox" name="letters" id="check2">
                            <label class="form-ceck-label" for="check1">Lettere</label>
                        </div>
                        <div class="form-cehck">
                            <input class="form-ceck-input" type="checkbox" name="symbol" id="check3">
                            <label class="form-ceck-label" for="check1">Simboli</label>
                        </div>
                    </div>
                    <button class="btn btn-dark" type="submit">Genera</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>