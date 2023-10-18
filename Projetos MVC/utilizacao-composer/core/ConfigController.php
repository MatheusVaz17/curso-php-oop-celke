<?php

    namespace Core;

    class ConfigController{

        private string|null $url;
        private array $urlArray;
        private string $urlController;
        private string $urlMethod;

        public function __construct(){

            if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
                $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
                $this->urlArray = explode("/", $this->url);

                if(isset($this->urlArray[0]) && isset($this->urlArray[1])){
                    $this->urlController = $this->urlArray[0];
                    $this->urlMethod = $this->urlArray[1];
                }else{
                    $this->urlController = 'erro';
                    $this->urlMethod = 'index';
                }
                
            }else{
                $this->urlController = 'home';
                $this->urlMethod = 'index';
            }

        }

        public function loadPage(){
            $urlController = ucwords($this->urlController);

            $classLoad = "\\Sts\Controllers\\".$urlController;
            $classPage = new $classLoad();
            $classPage->index();
        }

    }

?>