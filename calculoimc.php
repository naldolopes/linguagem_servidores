<?php

// Função para classificar o IMC
function classificarIMC($imc) {

    // Definindo as faixas de classificação do IMC
    $faixasIMC = [
        ["limite" => 18.5, "classificacao" => "Magreza"],
        ["limite" => 24.9, "classificacao" => "Saudável"],
        ["limite" => 29.9, "classificacao" => "Sobrepeso"],
        ["limite" => 34.9, "classificacao" => "Obesidade Grau I"],
        ["limite" => 39.9, "classificacao" => "Obesidade Grau II"],
        ["limite" => INF, "classificacao" => "Obesidade Grau III"]  // INF para indicar um valor acima de 39.9
    ];

    // Percorrendo o array de faixas para encontrar a classificação do IMC
    foreach ($faixasIMC as $faixa) {
        if ($imc <= $faixa["limite"]) {
            // Exibir a mensagem na tela quando a classificação é encontrada
            echo "Atenção, seu IMC é $imc, e você está classificado como " . $faixa["classificacao"] . ".\n";
            return;
        }
    }
}

// Chamando a função com um valor de exemplo de IMC para classificação
$valorIMC = 25.30;

// Chama a função para classificação e impressão na tela
classificarIMC($valorIMC);

?>
