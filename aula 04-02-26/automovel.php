<?php

    abstract class Automovel{
        private $marca;
        protected $nome;
        public $ano;
        public $combustivel;
        private $placa;
        protected $velocidade = 0;
        public $numeroportas;

        public function __construct(string $marca, string $nome, float $ano, string $combustivel, string $placa, float $numeroportas)
        {
            $this ->marca = $marca;
            $this ->nome = $nome;
            $this ->ano = $ano;
            $this ->combustivel = $combustivel;
            $this ->placa = $placa;
            $this ->numeroportas = $numeroportas;
        }

        public function acelerar()
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

        public function info() 
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

        public function porta_malas(string $acao)
        {
            echo "{$this->nome} {$acao} o porta malas";
        }
    }

    $dolphin = new Carro ("BYD", "Dolphin", 2025, "Energia elétrica", "SEP094", 4);

    $dolphin->info();
    echo "<pre>";
    $dolphin->acelerar();
    $dolphin->virar("direita");
    $dolphin->frear();
    echo "<pre>";
    $dolphin->porta_malas("abriu");

    
    class Moto extends Automovel {

        public function empinar()
        {
            echo "{$this->nome} está dando grau ";
        }

        public function cortar()
        {
            echo "{$this->nome} está cortando giro ";
        }
    }

    $gs = new Moto ("BMW", "GS310", 2020, "Gasolina", "PAL085", 0);

    $gs->info();
    echo "<pre>";
    $gs->acelerar();
    $gs->virar("direita");
    $gs->frear();
    echo "<pre>";
    $gs->empinar();
    echo "<pre>";
    $gs->cortar();


    Class Onibus extends Automovel{
        public function portas(string $quantidade)
        {
            echo "{$this->nome} abriu {$quantidade} (d)as portas";
        }
    }

    $mptorino = new Onibus ("Mercedes-Benz", "MarcoPolo Torino", 2026, "Diesel", "LON351", 3);

    $mptorino->info();
    echo "<pre>";
    $mptorino->acelerar();
    $mptorino->virar("esquerda");
    $mptorino->frear();
    echo "<pre>";
    $mptorino->portas("todas");

