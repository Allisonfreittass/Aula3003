<?php
    class fabricante {
        public $nome;
        public $endereco;
        public $documento;

        public function __contruct($nome, $endereco, $documentos) {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->documento = $documento;
       }

       public function getNome(){
           return $this->nome;
       }
       public function setNome($nome){
           $this->nome
       }

       public function getEndereco() {
           return $this->endereco;
       } 
       public function setEndereco($endereco) {
           $this->endereco;
       }

       public function getDocumento() {
           return $this->documento;
       }
       public function setDocumento($documento){
           $this->documento;
       }
    }

     $fabricante = new fabricante;

     $fabricante->nome = "Lamborghini";
     $fabricante->endereco = "Itália";
     $fabricante->documento = 94.626.710/0001;

     echo ' A ' . $fabricante->nome . 'é umas das maiores criadoras de Hypercars' "<br>"; 
     echo ' Localizada na ' . $fabricante->endereco. ' seu cnpj para consulta é ' . $fabricante->documento;