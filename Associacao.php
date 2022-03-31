<?php 
    require_once("Produto.php");
    require_once("Fabricante.php");

    $Carro = new produto;
    $Carro->setFabricante = "Lamborghini";
    $fabricante = new fabricante;

    echo "A descricao do produto é {$Carro->getDescricao()} e seu fabricante é {$fabricante-getNome()}";
