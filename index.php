<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones PHP</title>
</head>
<body>
    <h1>Segunda modificación</h1>
    <button onclick="alert('<?php echo saludar(); ?>')">Saludar</button>
    <button onclick="alert('<?php echo sumar(3, 4); ?>')">Sumar 3 y 4</button>
    <button onclick="alert('<?php echo fechaActual(); ?>')">Mostrar Fecha Actual</button>

    <?php
    /**
     * Devuelve un saludo
     * 
     * @return string
     */
    function saludar() {
        return "¡Hola, mundo!";
    }

    /**
     * Suma dos números
     * 
     * @param int $a El primer n mero
     * @param int $b El segundo n mero
     * 
     * @return int La suma de los dos n meros
     */
    function sumar($a, $b) {
        return $a + $b;
    }

    /**
     * Devuelve la fecha actual
     * 
     * @return string La fecha actual en formato AAAA-MM-DD
     */
    function fechaActual() {
        return date('Y-m-d');
    }
    ?>
</body>
</html>

