<?php

    class Pessoa{
        public $nome;
        public $altura;
        public $peso;
        public $cpf;

        function __construct(string $nome, float $altura, float $peso, string $cpf)
        {
            $this ->nome = $nome;
            $this ->altura = $altura;
            $this ->peso = $peso;
            $this ->cpf = $cpf;
        }

        function andar()
        {
            echo "($this->nome) ta andando\n";
        }
    }

    $joao = new Pessoa ("João", 1.76, 79, "12345678910");

    $joao->andar();

    $japa = new Pessoa("Japa", 1.80, 60, "10987654321");

    $japa->andar();