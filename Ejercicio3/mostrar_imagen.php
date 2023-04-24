<?php

class MostrarImagenes {
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function mostrar() {
        for ($i = 1; $i <= $this->numero; $i++) {
            echo '<img src="imagen.png" alt="Imagen' . $i . 
                  '"style="position: absolute; top: ' . ($i* 1) . 
                  'px; left: ' . ($i*200) . 'px; width: ' . (100). 'px;">';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;
    $mostrarImagenes = new MostrarImagenes($numero);

    $mostrarImagenes->mostrar();
}

?>

