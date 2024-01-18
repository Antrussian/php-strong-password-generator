

<?php
function generaPassword() {
    $passInput = $_GET['passInput'] ?? '0';

    if ($passInput == 0) {
        return 'Nessun parametro valido inserito';
    } else {
        $bytes = openssl_random_pseudo_bytes($passInput);
        $pass = bin2hex($bytes);
        header('Location: passwordoutput.php');
        return $pass;
             
             $_SESSION['passOutput'] = $pass;
   
          
         
    }
}
?>