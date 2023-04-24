<?php
class ConvertidorTemperatura
{
    private $gradosCentigrados;
    private $gradosFahrenheit;

    public function __construct($gradosCentigrados)
    {
        $this->gradosCentigrados = $gradosCentigrados;
    }

    public function convertirAFahrenheit()
    {
        $this->gradosFahrenheit = ($this->gradosCentigrados * 9/5) + 32;
    }

    public function obtenerGradosFahrenheit()
    {
        return $this->gradosFahrenheit;
    }
}
$gradosCentigrados = 30;
$convertidor = new ConvertidorTemperatura($gradosCentigrados);
$convertidor->convertirAFahrenheit();
$gradosFahrenheit = $convertidor->obtenerGradosFahrenheit();

echo "Grados Centígrados: " . $gradosCentigrados . "°C<br>";
echo "Grados Fahrenheit: " . $gradosFahrenheit . "°F";

?>
