<?php

    abstract class Automovel{
        protected $marca;
        protected $nome;
        protected $ano;
        protected $combustivel;
        protected $placa;
        protected $velocidade = 0;
        protected $numeroportas

        function __construct(string $marca, string $nome, float $ano, string $combustivel, string $placa, float $numeroportas);
        {
            $this ->marca = $marca;
            $this ->nome = $nome;
            $this ->ano = $ano;
            $this ->combustivel = $combustivel;
            $this ->placa = $placa;
        }

        protected function acelerar()
        {
            $this->velocidade += 20;
            echo "{$this->nome} está andando a {$this->velocidade} km/h\n";
        }

        
        protected function virar(string $lado): void 
        {
            echo "{$this->nome} virou para a {$lado}\n";
        }

        protected function frear(): void 
        {
            $this->velocidade = 0;
            echo "{$this->nome} freou";
        }

        protected function info() 
        {
            echo "<pre>";
            echo "Marca: {$this->marca} ";
            echo "<pre>";
            echo "Nome: {$this->nome} ";
            echo "<pre>";
            echo "Ano: {$this->ano} ";
            echo "<pre>";
            echo "Combustivel: {$this->combustivel} ";
            echo "<pre>";
            echo "Placa: {$this->placa} ";
            echo "<pre>";
            echo "Número de Portas: {$this->numeroportas} "; 
        }
    
    }

    class Carro extends Automovel {
        $this ->numeroportas = 4

        private function porta_malas(string $acao)
        {
            echo "{$this->nome} {$acao} o porta malas"
        }
    }

    $dolphin = new Carro ("BYD", "Dolphin", 2025, "Energia elétrica", "SEP094", "4");

    $dolphin->info();
    echo "<pre>";
    $dolphin->acelerar();
    $dolphin->virar("direita");
    $dolphin->frear();
    $doplhin->porta_malas("abriu";)

