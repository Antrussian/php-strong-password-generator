<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
</head>
<body class="bg-dark text-white p-5">

<?php
session_start(); 
include_once 'functions.php';
?>

<?php
 $passInput = $_GET['passInput'] ?? '0';
?>

<?php
$passOutput = generaPassword($passInput);
?>

<?php
    $_SESSION['passInput'] = $passInput;
    $_SESSION['passOutput'] = $passOutput;
?>

<div class="text-center">
    <h1 class="mb-4">Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
</div>

<div class="text-center bg-white p-4 text-dark">
<form action="index.php" method="GET" class="text-center">
<?php
    echo $passOutput;
    ?>
    <div class="mb-3 p-5">
  
        <label for="passInput" class="form-label">Lunghezza Password</label>
        <input type="number" class="form-control" name="passInput" id="passInput">
    </div>
    
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
    <button type="reset" class="btn btn-secondary text-light">Annulla</button>
</form>
</div>
</body>
</html>

