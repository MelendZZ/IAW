<?php

function productoRecv1($a,$b)
{
    if ($b>0)
    {
        $prod = $a + productoRecv1($a, $b-1);
    }
    
    else
    {
        $prod=0;
    }
    
    return $prod;
}

function productoRecv2($a,$b)
{
    if ($a>0)
    {
        $prod = $b + productoRecv2($a-1, $b);
    }
    
    else
    {
        $prod=0;
    }
    
    return $prod;
}

?>
