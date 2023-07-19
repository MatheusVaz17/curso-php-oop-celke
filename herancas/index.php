<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Heranças</title>
</head>

<body>
    <?php
        //Inclui o arquivo
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';
        
        $cliente = new Cliente();
        $cliente->logradouro = "Avenida Winston Churchill - A";
        $cliente->bairro = "Capão Raso";
        $msg = $cliente->verEndereco();

        echo $msg;
        echo "<hr>";

        $clientePf = new ClientePessoaFisica();
        $clientePf->logradouro = "Avenida Winston Churchill - B";
        $clientePf->bairro = "Capão Raso";
        $clientePf->nome = "Matheus";
        $clientePf->cpf = 12345678912;
        $msgPf = $clientePf->verInformacaoUsuario();

        echo $msgPf;
        echo "<hr>";

        $clientePj = new ClientePessoaJuridica();
        $clientePj->logradouro = "Avenida Winston Churchill - C";
        $clientePj->bairro = "Capão Raso";
        $clientePj->nomeFantasia = "Matheus Empresa";
        $clientePj->cnpj = 12345678912345;
        $msgPj = $clientePj->verInformacaoEmpresa();

        echo $msgPj;
        echo "<hr>";
    ?>
</body>

</html>