<?php

/*
Verificar a hora do dia e dar a saudação correta:
Bom dia;
Boa tarde;
Boa noite
*/


$hora_especifica = time("G:i");
$hora = time("G");
$hora  = intval($hora);

verificar($hora, $hora_especifica);

function verificar($hora, $hora_especifica)
{
    if (6 < $hora && $hora <= 12) {
        echo "São " . $hora_especifica . " Bom dia.";
    } else if (13 <= $hora && $hora < 19) {
        echo "São " . $hora_especifica . " Boa tarde.";
    } else if (19 < $hora && $hora < 6) {
        echo "São " . $hora_especifica . " Boa noite.";
    }
}
