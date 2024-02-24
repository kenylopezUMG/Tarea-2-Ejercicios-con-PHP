<?php
// Función para calcular la edad
function calcularEdad($fechaNacimiento) {
    $fechaActual = date('Y-m-d');
    $edad = date_diff(date_create($fechaNacimiento), date_create($fechaActual));
    return $edad->y;
}

// Ejemplo de uso de la función calcularEdad
$fechaNacimiento = '1990-05-15';
echo "La edad es: " . calcularEdad($fechaNacimiento) . "\n";

// Variables para comparar números y determinar cuál es mayor
$primerNumero = 10;
$segundoNumero = 20;

// Determinar cuál es el mayor de los dos números
if ($primerNumero > $segundoNumero) {
    echo "El primer número es mayor: $primerNumero \n";
} elseif ($segundoNumero > $primerNumero) {
    echo "El segundo número es mayor: $segundoNumero \n";
} else {
    echo "Ambos números son iguales \n";
}

// Determinar si un número es par o impar
$numeroSeleccionado = 15;
if ($numeroSeleccionado % 2 == 0) {
    echo "$numeroSeleccionado es un número par \n";
} else {
    echo "$numeroSeleccionado es un número impar \n";
}

// Calcular el factorial de un número utilizando un bucle while
$numeroBase = 5;
$factorial = 1;
$i = 1;

while ($i <= $numeroBase) {
    $factorial *= $i;
    $i++;
}

echo "El factorial de $numeroBase es: $factorial \n";

// Generar 20 números aleatorios y ordenarlos de mayor a menor utilizando ciclos for
$numeros = [];

// Generar 20 números aleatorios
for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 100);
}

// Ordenar los números de mayor a menor
for ($i = 0; $i < count($numeros); $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] < $numeros[$j]) {
            $temp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $temp;
        }
    }
}

// Mostrar los números ordenados
echo "Números ordenados de mayor a menor: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "\n";

// Llenar un array asociativo con datos de 10 alumnos y mostrarlos
$alumnos = array(
    array('alumno' => 'Juan', 'curso' => 'Matemáticas', 'nota' => 85),
    array('alumno' => 'María', 'curso' => 'Ciencias', 'nota' => 92),
    array('alumno' => 'Pedro', 'curso' => 'Historia', 'nota' => 78),
    array('alumno' => 'Ana', 'curso' => 'Literatura', 'nota' => 88),
    array('alumno' => 'Carlos', 'curso' => 'Inglés', 'nota' => 95),
    array('alumno' => 'Laura', 'curso' => 'Física', 'nota' => 90),
    array('alumno' => 'Pablo', 'curso' => 'Química', 'nota' => 85),
    array('alumno' => 'Sofía', 'curso' => 'Arte', 'nota' => 87),
    array('alumno' => 'Diego', 'curso' => 'Música', 'nota' => 80),
    array('alumno' => 'Elena', 'curso' => 'Educación Física', 'nota' => 93)
);

// Mostrar datos de los alumnos
foreach ($alumnos as $alumno) {
    echo "Alumno: " . $alumno['alumno'] . ", Curso: " . $alumno['curso'] . ", Nota: " . $alumno['nota'] . "\n";
}
?>
