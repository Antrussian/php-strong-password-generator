<?php
function generaPassword() {
    $passInput = $_GET['passInput'] ?? '0';

    if ($passInput == 0) {
        return 'Nessun parametro valido inserito';
    } else {
        $bytes = openssl_random_pseudo_bytes($passInput);
        $pass = substr(bin2hex($bytes), 0, $passInput);
        $_SESSION['passOutput'] = $pass;
        header('Location: passwordoutput.php');
        return $pass;
    }
}
?>
