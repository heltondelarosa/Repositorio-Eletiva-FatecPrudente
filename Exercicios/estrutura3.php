<?php

    include("cabecalho.php");

    //1-Domingo 2-Segunda . . .
    $diaSemana = 3;

    switch($diaSemana){
        case 1:
            echo "Hoje é domingo";
            break;
        case 2:
            echo "Hoje ésegunda";
            break;
        case 3:
            echo "Hoje é terça";
            break;
        default:
            echo "Hoje pode ser quarta, quinta, sexta ou sabado";
    }

    include("rodape.php");
