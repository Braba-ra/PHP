<?php

$nota1 = 10;
$nota2 = 10;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) /3; 
$media = number_format($media,2); // Formatar casas decimais

if($media <= 4)
{
    echo "Nota: ".$media. " <br> Situação: Reprovado com desempenho insuficiente.";
}
elseif ($media >= 4 && $media <= 5.9)
{
    echo "Nota: ".$media. " <br> Situação: Recuperação - precisa melhorar.";
}
elseif ($media >= 6 && $media <= 7.9)
{
    echo "Nota: ".$media. " <br> Situação: Aprovado com desempenho regular.";
}
elseif ($media >= 8 && $media <= 9.4)
{
    echo "Nota: ".$media. " <br> Situação: Aprovado com bom desempenho.";
}
elseif ($media >= 9.5 && $media <= 10)
{
    echo "Nota: ".$media. " <br> Situação: Aprovado com excelência!";
}

