<?php

function potenciaRecv1($a,$b)
{
    if ($b>0)
    {
        $prod = $a * potenciaRecv1($a, $b-1);
    }
    
    else
    {
        $prod=1;
    }
    
    return $prod;
}

function potenciaRecv2($a,$b)
{
    if ($a>0)
    {
        $prod = $b * potenciaRecv2($a-1, $b);
    }
    
    else
    {
        $prod=1;
    }
    
    return $prod;
}

?>