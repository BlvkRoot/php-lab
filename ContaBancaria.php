<?php
    class ContaBancaria 
    {

        private $banco;
        private $nomeTitular;
        private $numeroAgencia;
        private $numeroContact;
        private $saldo;

        // Método para inicializar váriaveis
        public function __construct($banco, $nomeTitular, $numeroContact, $numeroAgencia, $saldo)
        {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroContact = $numeroContact;
            $this->numeroAgencia = $numeroAgencia;
            $this->saldo = $saldo;
        }

        public function obterSaldo() 
        {
            return 'Saldo atual R$ ' . $this->saldo;
        }

        public function depositar($valor) 
        {
            $this->saldo += $valor;

            return 'Depósito de R$ '. $this->saldo . ' realizado.';
        }

        public function sacar($valor)
        {
            $this->saldo -= $valor;

            return 'Saque de R$ '. $this->saldo . ' realizado.';
        }

    }

    $conta = new ContaBancaria(
        'Miles',
        "Miles Munroe",
        "654646465222",
        "0552244555",
        0
    );


   echo $conta->obterSaldo();

   echo PHP_EOL;

   echo $conta->depositar(500);

   echo PHP_EOL;

   echo $conta->obterSaldo();

   
   echo PHP_EOL;

   echo $conta->sacar(200);

   echo PHP_EOL;

   echo $conta->obterSaldo();
    