<?php
    // Allows for type checking when running application
    declare(strict_types=1);

    class ContaBancaria 
    {

        /**
         * @var string
         */

        private string $banco;

        /**
         * @var string
         */
        private string $nomeTitular;

        /**
         * @var string
         */
        private string $numeroAgencia;

        /**
         * @var string
         */
        private string $numeroContact;

        /**
         * @var float
         */
        private float $saldo;

        // Método para inicializar váriaveis
        public function __construct(
            string $banco, 
            string $nomeTitular, 
            string $numeroContact, 
            string $numeroAgencia, 
            float $saldo
        )
        {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroContact = $numeroContact;
            $this->numeroAgencia = $numeroAgencia;
            $this->saldo = $saldo;
        }

        public function obterSaldo(): string 
        {
            return 'Saldo atual R$ ' . $this->saldo;
        }

        public function depositar(float $valor): string
        {
            $this->saldo += $valor;

            return 'Depósito de R$ '. $this->saldo . ' realizado.';
        }

        public function sacar(float $valor): string
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
    