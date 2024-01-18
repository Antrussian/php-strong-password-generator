

<?php
function generaPassword() {
    $passInput = $_GET['passInput'] ?? '0';

    if ($passInput == 0) {
        echo 'Inserisci un numero';
    } else {
        $bytes = openssl_random_pseudo_bytes($passInput);
        $pass = bin2hex($bytes);
        echo $pass;

header('Location: passwordoutput.php');
    }
}
?>