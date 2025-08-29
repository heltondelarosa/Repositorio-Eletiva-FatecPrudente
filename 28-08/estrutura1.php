
    <?php

        include("cabecalho.php");

        $valor = 10;
        // > < >= <= != == === esse são os peradores relacionais
        //esses são os operadores logicos: && || !
        if(($valor > 20) && ($valor < 30)){
            echo "valor maior que 20";
        } else {
            echo "valor menor ou igual a 20";
        }

        include("rodape.php");
    ?>

