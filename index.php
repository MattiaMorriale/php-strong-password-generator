<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$number = $_GET['number'];

function passGenerate($number) {

    $pass = '';
    
    for($i = 0; $i < $number; $i++){

        $pass .= chr(rand(33,126));

    };

    return $pass;

}

?>

<!-- _______________________________________________________ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generetor</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-bs-theme='dark'>

    <div class="container p-5">
        <h1 class='mb-5'>Generatore di Password</h1>
        <hr>
        <form>
            <div class="my-5">
                <label for="examplepass" class="form-label">Numero dei Caratteri</label>
                <input type="number" class="form-control" id="examplepass" name='number' aria-describedby="emailHelp">
                <div id="passHelp" class="form-text">Inserisci il numero di caratteri, con cui la tua password verrà generata.</div>
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
        <hr>
        <label for="examplepass" class="form-label">Password Generata</label>
        <div class='form-control my-pass d-flex justify-content-center align-items-center'>
            <p class='m-0'><?php
            
            echo passGenerate($number);
            
            ?></p>
        </div>
    </div>





    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
    <!-- script -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>