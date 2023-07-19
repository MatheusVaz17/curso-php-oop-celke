<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Classe Abstrata</title>
</head>

<body>
    <?php
        //Inclui o arquivo
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';
        
        //A classe abstrata não pode ser instanciada
        // $cheque = new Cheque(207.27, "comum");
        // $msg = $cheque->verValor();
        // echo $msg;

        $chequeComum = new ChequeComum(307.37, "comum");
        $msgChequeComum = $chequeComum->calcularJuro();
        echo $msgChequeComum;

        $chequeEspecial = new ChequeEspecial(407.47, "Especial");
        $msgchequeEspecial = $chequeEspecial->calcularJuro();
        echo $msgchequeEspecial;
    ?>
</body>

</html>