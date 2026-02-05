<?php

    abstract class Cliente{
        private $cpf;
        protected $nome;
        protected $email;
        protected $tipo;
        protected $valorgasto;
        protected $senha;
        protected $cadastroc = false;
        protected $premium = false;
        protected $desconto = 0.0;
        

    public function __construct(string $cpf, string $nome, string $email, string $tipo, float $valorgasto, string $senha)
    {
        $this ->cpf = $cpf;
        $this ->nome = $nome;
        $this ->email = $email;
        $this ->tipo = $tipo;
        $this ->valorgasto = $valorgasto;
        $this ->senha = $senha;
    }

    public function cadastrar()
    {
        if (strlen($cpf) != 14 ){
            return "";
        }else{
            return "Cadastro válido";
            $cadastroc = true ;
        }
    }
    
    public function infocliente() 
    {
        if ($cadastroc = true){
            echo "<pre>";
            echo "CPF: {$this->cpf} ";
            echo "Nome: {$this->nome} ";
            echo "Email: {$this->email} ";
            echo "Tipo: {$this->tipo} ";
            echo "Valor Gasto: {$this->valorgasto} ";

        }else{
    }
    
    }
}

    echo '<input type="text" placeholder="nome" name="nome">';
    echo '<input type="password" placeholder="senha" name="senha">';
    echo '<input type="text" placeholder="email" name="email">';
    echo '<input type="text" placeholder="cpf" name="cpf">';
    echo '<input type="submit" placeholder="enviar" name="enviar">';

    class ClientePremium extends Cliente{

    private function verificarp()
    {
        if ($valorgasto > 5000){
            return "É um cliente premium";
            $premium = true;
            $desconto = 0.1;
        }else{
            return "Não é um cliente premium";
            $premium = false;
            $desconto = 0.0;
        }
    }

}


    class ClienteComum extends Cliente{
    
}

    class Produto{
        protected $preco;
        protected $nome;
        protected $estoque;

    public function infoproduto() 
    {
            echo "<pre>";
            echo "Preço: R${$this->preco} ";
            echo "Nome: {$this->nome} ";
            echo "Email: {$this->estoque} ";
    }
    
    }

}

     $vitor = new ClientePremium ("1234567", "Vitor", "abc@abc", "Premium", 5100, "12345");

     $victor = new ClienteComum ("7654321", "Victor", "cba@cba", "Comum", 3000, "54321" );

