<?php

    /**
     * P representação de período: vem antes de dia, mês, ano e semana
     * 
     * Y anos
     * M meses
     * D dias
     * W semanas
     * -----------------------------------------------------------------
     *  T representação de tempo: vem antes de hora, minuto e segundo
     * 
     * H horas
     * M minutos
     * S segundos
     * -----------------------------------------------------------------
     */

    $data = new DateTime();

    // echo $data->format('D-m-Y') . PHP_EOL;

    $intervalo = new DateInterval('P5DT10H50M'); // Adiciona um periodo de 5 dias e 5 minutos

    // $data->add($intervalo);
    $data->sub($intervalo);

    echo $data->format('d/m/Y H:m:s');