<?php

$pressaoSistolica = 191;

if($pressaoSistolica < 0){
    echo "Valor inválido para pressão.";
}

elseif ($pressaoSistolica >= 0 && $pressaoSistolica < 90)
{
    echo "Pressão:" .$pressaoSistolica. " mmHg <br> Risco: Hipotensão (pressão baixa).";
}
elseif ($pressaoSistolica >= 90 && $pressaoSistolica < 120)
{
    echo "Pressão:" .$pressaoSistolica. " mmHg <br> Situação: Pressão ideal.";
}
elseif ($pressaoSistolica >= 120 && $pressaoSistolica < 130)
{
    echo "Pressão:" .$pressaoSistolica. " mmHg <br>  Situação: Pressão normal alta.";
}
elseif ($pressaoSistolica >= 130 && $pressaoSistolica < 140)
{
    echo "Pressão:" .$pressaoSistolica. " mmHg <br>  Situação:  Pré-hipertensão (atenção necessária).";
}
elseif ($pressaoSistolica >= 140 && $pressaoSistolica < 160)
{
    echo "Pressão:" .$pressaoSistolica. " mmHg <br>  Situação:  Hipertensão Estágio 1.";
}
elseif ($pressaoSistolica >= 160 && $pressaoSistolica < 180)
{
    echo "Pressão:" .$pressaoSistolica. " mmHg <br>  Situação:  Hipertensão Estágio 2.";
}
elseif ($pressaoSistolica >= 180 )
{
    echo "Pressão:" .$pressaoSistolica. " mmHg <br>  Situação:  Crise hipertensiva – risco de vida!";
}
else 
{
    echo "Valor inválido para pressão!";
}