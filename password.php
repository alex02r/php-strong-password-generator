<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password</title>
</head>
<body>
    <header class="bg-dark text-white p-4">
        <h1>Your password</h1>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                <?php 
                    session_start();
                    if (isset($_SESSION['psw'])) {
                        ?>
                        <div class="my-3">
                            <h6>La tua password: <?php echo $_SESSION['psw']; ?></h6>
                        </div>
                        <?php
                    }else{
                        header('Location: ./index.php');
                    }
                ?>
                </div>  
            </div>
        </div>
    </main>
</body>
</html>