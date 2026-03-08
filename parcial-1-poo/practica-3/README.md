# Práctica 3 - Sistema POO con Excepciones

## Descripción
Se desarrolló un pequeño sistema orientado a objetos que utiliza herencia, validación de datos y manejo de excepciones.

## Flujo de clases

Usuario (clase base)
│
├── Admin
└── Alumno

Usuario contiene los atributos:
- nombre
- correo

El correo se valida utilizando FILTER_VALIDATE_EMAIL.

Si el correo no es válido se lanza una excepción.

## Manejo de errores

Se utilizó try/catch en index.php para capturar excepciones y mostrar mensajes controlados al usuario.

## Ejecución

Abrir en el navegador:

http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-3/index.php