<?php
    class produto {
        public $descricao;
        public $estoque;
        public $preco;
        public $fabricante;

        public function __contruct($descricao, $estoque, $preco, $fabricante) {
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco;
            $this->fabricante = $fabricante;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao;
        }

        public function getEstoque(){
            return $this->estoque;
        }
        public function setEstoque($estoque){
             $this->estoque;
        }

        public function getPreco() {
            return $this->preco;
        }
        public function setPreco($preco) {
             $this->preco;
        }

        public function getFabricante() {
            return $this->fabricante;
        }
        public function setFabricante($fabricante) {
           $this->fabricante;
        }
       
        public function aumentarEstoque ($valor){
            $this->estoque += $valor;
        }
        public function diminuirEstoque ($valor){
            $this->estoque -= $valor;
        }
        public function reajustarPreco ($percentual) {
            $this->preco += ($percentual*$this->preco)/100;
        } 
    }        

    $Carro = new produto;

    $Carro->descricao = "Lamborghini Aventador";
    $Carro->estoque = 50000;
    $Carro->preco = 95000; 
    $Carro->fabricante = "Lamborghini";

    echo 'O estoque do '. $Carro->descricao. ' é'. $Carro->estoque. ' fabricado pela'. $carro->fabrticante ' <br> ';
    echo 'O preço do '. $Carro->descricao. ' é'. $Carro->preco;
    echo '<br>';
 
    $Carro->aumentarEstoque(10);
    $Carro->diminuirEstoque(5);
    $Carro->reajustarPreco(50);

    echo 'O estoque do '. $Carro->descricao. ' é'. $Carro->estoque. '<br>';
    echo 'O preço do'. $Carro->descricao. ' é'. $Carro->preco;
