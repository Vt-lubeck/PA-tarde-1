<?php

    class Automovel{
        protected $marca;
        protected $nome;
        protected $ano;
        protected $combustivel;
        protected $placa;
        protected $velocidade = 0;

        function __construct(string $marca, string $nome, float $ano, string $combustivel, string $placa)
        {
            $this ->marca = $marca;
            $this ->nome = $nome;
            $this ->ano = $ano;
            $this ->combustivel = $combustivel;
            $this ->placa = $placa;
        }

        public function andar()
        {
            $this->velocidade += 20;
            echo "{$this->nome} está andando a {$this->velocidade} km/h\n";
        }

        
        public function virar(string $lado): void 
        {
            echo "{$this->nome} virou para a {$lado}\n";
        }

        public function frear(): void 
        {
            $this->velocidade = 0;
            echo "{$this->nome} freou";
        }

        public function info(): void 
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
        }
    
    }

    $carro = new Automovel ("Audi", "R3", 2020, "Gasolina", "SEP094");

    $carro->info();
    echo "<pre>";
    $carro->andar();
    $carro->virar("direita");
    $carro->frear();
    
    $moto = new Automovel ("Bajaj", "Freedom 125", 2024, "Diesel", "PAL120");

    $moto->info();
    echo "<pre>";
    $moto->andar();
    $moto->virar("esquerda");
    $moto->frear();

    $onibus = new Automovel ("BYD", "D9W", 2026, "Energia Elétrica", "MAC359");

    $onibus->info();
    echo "<pre>";
    $onibus->andar();
    $onibus->virar("esquerda");
    $onibus->frear();


