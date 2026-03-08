# Práctica 2 - Herencia en PHP

## Objetivo
Implementar herencia en PHP reutilizando atributos y métodos de una clase base.

## Herencia aplicada
Se creó una clase base llamada Usuario que contiene los atributos nombre y correo.
Posteriormente se creó la clase Admin que extiende la clase Usuario utilizando la palabra clave extends.

La clase Admin hereda todos los métodos y atributos de Usuario y agrega el método getRol().

## Diferencias entre Usuario y Admin

Usuario:
- Tiene atributos nombre y correo
- Contiene getters y setters

Admin:
- Hereda de Usuario
- Añade el método getRol() que retorna "Administrador"

## Ejecución

1. Colocar el proyecto en htdocs de XAMPP
2. Iniciar Apache
3. Abrir en el navegador:

http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-2/index.php