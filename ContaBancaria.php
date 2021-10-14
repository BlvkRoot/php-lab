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
            return 'Obtendo saldo';
        }

    }

    $conta = new ContaBancaria(
        'Miles',
        "Miles Munroe",
        "654646465222",
        "0552244555",
        20.35
    );


    var_dump($conta->obterSaldo());