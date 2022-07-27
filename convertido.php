<?php
    include ("numero.class.php");

    function conversao($metros){
        $centimetros=$metros*100;
        return $centimetros;
    }

    $numero = new Numero();
    $numero->setNumero($_GET ['txtNumero']);
    echo "Metros: " . $numero->getNumero() . "<br> Centímetros: " . conversao($_GET ['txtNumero']);
?>