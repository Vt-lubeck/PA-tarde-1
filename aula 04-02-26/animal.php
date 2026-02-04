<?php

        abstract class Animal{
        private $raca;
        private $especie;
        public $dieta;
        public $peso;
        public $tamanho;
        public $numeropatas;
        public $velocidade = 0;

        public function __construct(string $raca, string $especie, string $dieta, float $peso, float $tamanho, float $numeropatas)
        {
            $this ->raca = $raca;
            $this ->especie = $especie;
            $this ->dieta = $dieta;
            $this ->peso = $peso;
            $this ->tamanho = $tamanho;
            $this ->numeropatas = $numeropatas;
        }

        public function andar()
        {
            $this->velocidade += 10;
            echo "{$this->nome} está andando a {$this->velocidade} km/h";
        }

        public function comer(string $comida): void
        {
            echo "{$this->nome} está comendo {$this->$comida}"
        }

        public function info() 
        {
            echo "<pre>";
            echo "Raça: {$this->raca} ";
            echo "<pre>";
            echo "Espécie: {$this->especie} ";
            echo "<pre>";
            echo "Dieta: {$this->dieta} ";
            echo "<pre>";
            echo "peso: {$this->peso} ";
            echo "<pre>";
            echo "tamanho: {$this->tamanho} ";
            echo "<pre>";
            echo "Número de patas: {$this->numeropatas} "; 
        }

    }

         class Mamifero extends Animal 
         {
            
             public function mamar()
             {
                 echo "{$this->nome} está mamando";
             }
         }

         $Golden = new Mamifero ("Cachorro", "Golden", "Carnívoro", " ", "SEP094", 4);

         $dolphin->info();
         echo "<pre>";
         $dolphin->acelerar();
         $dolphin->virar("direita");
         $dolphin->frear();
         echo "<pre>";
         $dolphin->porta_malas("abriu");


