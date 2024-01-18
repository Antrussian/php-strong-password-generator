<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
</head>
<body class="bg-dark text-white p-5">




<div style="background-image: url('https://www.ricettasprint.it/wp-content/uploads/2021/01/Schiuma-per-caff%C3%A8-fatta-in-casa-ricettasprint.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 400px; display: flex; align-items: center; justify-content: center; text-align: center;" class="mt-3">
    <strong style="color: black; font-size: 30px;">Password generata: <br> <?= $_SESSION['passOutput'] ?></strong>
</div>
</body>
</html>
