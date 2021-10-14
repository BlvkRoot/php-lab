<?php
    function divisionByZero(int $first_number, int $second_number)
    {
        if($second_number == 0)
            throw new Exception("Cannot divide by zero \n");
        
        return $first_number / $second_number;
    }

    $result = false;

    try {
        $result = divisionByZero(52, 2);
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo 'Result: ' . (int)$result;
        die();
    }