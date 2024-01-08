<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

echo "<h1> Página Inicial </h1>";

if(!empty($this->data[0])){
    extract($this->data[0]);

    echo "ID: {$id} <br>";
    echo "Título: {$title_top} <br>";
    echo "Descrição: {$description_top} <br>";
    echo "Link do botão: {$link_btn_top} <br>";
    echo "Texto do botão: {$txt_btn_top} <br>";
    echo "Nome da imagem: {$image} <br>";
}else{
    echo "<p style='color: #f00;'>Erro: Nenhum registro encontrado</p>";
}

?>