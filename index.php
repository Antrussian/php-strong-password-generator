<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
</head>
<body>



<form action="index.php" method="GET">
    <label for="passInput">Lunghezza Password</label>
    <input type="number" name="passInput" id="passInput">
    <button type="submit"> Invia </button>

</form>

<?php
$passInput = $_GET['passInput'] ?? '0';

if ($passInput == 0) {
    echo 'Inserisci un numero';
} else {
    $bytes = openssl_random_pseudo_bytes($passInput);
    $pass = bin2hex($bytes);
    echo $pass;
}
?>

    
</body>
</html>

