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
        'nome' => 'Henriques',
        'idade' => 25
    ];

    $status = false;

    try {
        $status = validadorUsuario($usuario);
    } catch (Exception $e) {
       echo $e->getMessage();
    } finally {
        echo " Status da operação: " . (int)$status; // cast variable to int
        die();
    }

    echo "\n..... executando ... \n";