<?php

foreach($this->dados['artigos'] as $artigo){
    extract($artigo);
    echo "ID: $id <br>";
    echo "Título: $titulo <br>";
    echo "Conteúdo: $conteudo <br>";
    echo "<hr>";
}

?>