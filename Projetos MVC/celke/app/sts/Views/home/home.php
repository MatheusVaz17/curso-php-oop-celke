<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /");
}

echo "<h1> Página Inicial </h1>";

extract($this->data);

echo "ID: {$id} <br>";
echo "Título: {$title_top} <br>";
echo "Descrição: {$description_top} <br>";
echo "Link do botão: {$link_btn_top} <br>";
echo "Texto do botão: {$txt_btn_top} <br>";
echo "Nome da imagem: {$image} <br>";

?>