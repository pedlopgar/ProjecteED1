<?php

$departamento = $_POST["departamento"];

switch ($departamento) {
    case 'Informática':
        print("El departamento de informática tiene un presupuesto de 500€.");
        break;

    case 'Lengua':
        print("El departamento de lengua tiene un presupuesto de 300€.");
        break;

    case 'Matemáticas':
        print("El departamento de matemáticas tiene un presupuesto de 600€.");
        break;

    case 'Inglés':
        print("El departamento de inglés tiene un presupuesto de 200€.");
        break;
    
    default:
        print("Errpr. Departamento no encontrado.");
        break;
}
?>