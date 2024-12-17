<?php
// Pedir o raio do círculo
echo "Digite o raio do círculo: ";
$raio = trim(fgets(STDIN));

// Calcular o perímetro e a área
$perimetro = 2 * M_PI * $raio;
$area = M_PI * $raio * $raio;

// Exibir os resultados
echo "Perímetro do círculo: " . $perimetro . "\n";
echo "Área do círculo: " . $area . "\n";
?>
