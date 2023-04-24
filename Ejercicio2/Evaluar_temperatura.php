<?php

class Temperatura {
    private $grados;

    public function __construct($grados) {
        $this->grados = $grados;
    }

    public function evaluarTemperatura() {
        if ($this->grados <= 0) {
            echo '<span style="color: blue;">Temperatura máximamente FRIA</span>';
        } elseif ($this->grados <= 30) {
            echo '<span style="color: yellow;">Temperatura estable</span>';
        } else {
             echo '<span style="color: red;">Temperatura máximamente CALIENTE</span>';
        }
    }
}
$temp = new Temperatura(31);

$temp->evaluarTemperatura();

?>
