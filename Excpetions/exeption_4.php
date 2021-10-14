<?php
    
    function validadorUsuario(array $usuario)
    {
        if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
        {
            throw new Exception("Campos obrigatórios não foram preenchidos. \n");
        }

        return true;
    }

    $usuario = [
        'codigo' => 1,
        'nome' => '',
        'idade' => 25
    ];

    try {
        $usuario = validadorUsuario($usuario);
    } catch (Exception $e) {
       echo $e->getMessage();

       die();
    }

    echo "\n..... executando ... \n";