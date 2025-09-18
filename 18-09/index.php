<?php

    $valor = array(1, 2, 3, 4, 5);
    echo "<p>Primeiro valor do vetor: " .$valor[0]."</p>";

    $vetor = [1, 2, 3, 4, 5];
    //Função para exibir valores e vetores
    var_dump($vetor);
    print_r($vetor);

    $vetor[4] = 6;
    echo "<p>Novo valor da posição 4: ".$vetor[4]."</p>";

    $vetor['nome'] = "Helton";
    print_r($vetor);

    $velores = [
        'nome' => "Helton",
        "sobrenome" => 'Rosa',
        'idade' => 35
    ];

    foreach($valores as $c => $v){
        echo "<p>Posição: $c = valor $v</p>";
    };