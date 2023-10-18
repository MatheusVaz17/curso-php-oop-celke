<?php

    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsListarBlog;

    class Blog{
        
        private $dados;

        public function index(){
            $listarArtigo = new StsListarBlog();
            $this->dados['artigos'] = $listarArtigo->listar();
            
            $carregarView = new ConfigView("sts/Views/blog/listarArtigo", $this->dados);
        }

    }

?>