<?php

    abstract class Cliente{
        protected $cpf;
        protected $nomec;
        protected $email;
        protected $tipo;
        protected $valorgasto;
        protected $senha;
        protected $cadastroc = false;
        protected $premium = false;

        
    public function __construct(string $cpf, string $nomec, string $email, string $tipo, float $valorgasto, string $senha)
    {
        $this ->cpf = $cpf;
        $this ->nomec = $nomec;
        $this ->email = $email;
        $this ->tipo = $tipo;
        $this ->valorgasto = $valorgasto;
        $this ->senha = $senha;
    }

    public function cadastrarC()
    {
        if (strlen($cpf) > 14 || strlen($cpf) < 11){
            return "Cadastro inválido";
            $cadastroc = false;
        }else{
            return "Cadastro válido";
            $cadastroc = true ;
            $cliente = array($cpf, $nomec, $email, $tipo, $valorgasto, $senha);
            print_r($cliente);
            $clientes [] = $cliente;

        }
    }
    
}

    class ClientePremium extends Cliente{

    private function verificarp()
    {
        if ($valorgasto > 5000){
            return "É um cliente premium";
            $premium = true;
        }else{
            return "Não é um cliente premium";
            $premium = false;
   
        }
    }

}

    class ClienteComum extends Cliente{
    
}

    class Produto{
        protected $marca;
        protected $preco;
        protected $nomep;
        protected $estoque;
        public $selo = false;
        protected $cadastrop = false;

        public function __construct(string $marca, float $preco, string $nomep, float $estoque, bool $selo,)
        {
        $this ->marca = $marca;
        $this ->preco = $preco;
        $this ->nomep = $nomep;
        $this ->estoque = $estoque;
        $this ->selo = $selo;
        }

         public function cadastrarP()
        {
        if ($selo = false ){
            return "Cadastro inválido";
        }else{
            return "Cadastro válido";
            $cadastrop = true ;
            $produto = array($preco, $nomep, $estoque, $selo);
            print_r($produto);
            $produtos [] = $produto;

        }
        }

}

     class Pedido{
        protected $estado;
        protected $item;
        protected $quantidade;
        protected $valor; 
        protected $peso;
        protected $cadastropedido;

        public function __construct(string $estado, string $items, float $quantidade, float $valor, string $peso)
        {
            $this ->estado = $estado;
            $this ->items = $item;
            $this ->quantidade = $quantidade;
            $this ->valor = $valor;
            $this ->peso = $peso;
        }

        public function pedidos()
        {
        if ($quantidade > 0 && $valor > 0 ){
            return "Cadastro válido";
            $cadastropedido = true;
            $pedido = array($estado, $items, $quantidade, $valor, $peso);
            print_r($pedido);
            $pedidos [] = $pedido;
        }else{
            return "Cadastro inválido";

        }

        }

        if($premium = true){
            $valor = $valor * 0.9;
        }else{
            
        }

        public function calcularTotal() {
            $total = 0;
            foreach ($this->produtos as $produto){
            $total += $nomep->preco;
        }
            return $total;
        }

}

      $vitor = new ClientePremium ("12345678910114", "Vitor", "abc@abc", "Premium", 5100, "12345");

      $victor = new ClienteComum ("141110987654321", "Victor", "cba@cba", "Comum", 3000, "54321" );

      $M711 = new Produto ("RedDragon", 150.00, "Mouse Gamer M711", 35, true);

      $K600 = new Produto ("Kabum", 200.00, "Teclado Gamer K600", 80, false);

      $id1 = new Pedido ()



