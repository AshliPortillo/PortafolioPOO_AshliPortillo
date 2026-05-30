# Proyecto Unidad 3 - Registro de usuarios #
- Objetivo:
  
Este proyecto resuelve la necesidad de gestionar diferentes tipos de usuarios dentro de una plataforma digital.
En muchos sistemas existen usuarios con distintos permisos y responsabilidades. Por ejemplo, un administrador puede gestionar el sistema, mientras que un cliente tiene acceso limitado a ciertas funciones y un invitado solo puede visualizar información básica.
El sistema permite modelar estos comportamientos de forma organizada utilizando herencia y polimorfismo, facilitando la administración de usuarios según su rol.

- Tecnologías utilizadas

. Python → lenguaje principal del proyecto
. Programación Orientada a Objetos (POO)
. Consola / terminal para la ejecución
. Editor de código (Visual Studio Code)
. Diagrama UML para representar la estructura de clases

- Conceptos aplicados (según temario)
  
Durante el desarrollo se aplicaron varios conceptos fundamentales vistos en clase:

1- Clases y objetos
Se crearon clases para representar cada tipo de usuario.

2- Herencia
Las clases Admin, Cliente e Invitado heredan de la clase base Usuario.

3- Polimorfismo
Se recorrió una lista de usuarios ejecutando el mismo método, pero cada clase respondió de manera distinta.

4- Constructores (__init__)
Se inicializaron atributos al crear objetos.

5- Uso de super()
Permitió reutilizar atributos y métodos de la clase base.

6- Sobreescritura de métodos
Cada tipo de usuario redefinió su método acceso_sistema().

7- Validación de datos
Se verificó que los correos electrónicos tuvieran un formato válido.

8- Menú interactivo
Se implementó interacción con el usuario mediante consola.

- Capturas:
<img width="516" height="355" alt="Captura de pantalla 2026-05-29 202254" src="https://github.com/user-attachments/assets/a24108e6-ba8a-4dfa-b497-3071780928b8" />
<img width="433" height="196" alt="Captura de pantalla 2026-05-29 202407" src="https://github.com/user-attachments/assets/8601a89d-940b-4350-9430-f91731f66515" />
<img width="567" height="559" alt="Captura de pantalla 2026-05-29 202520" src="https://github.com/user-attachments/assets/d79752a5-1c8d-4d26-83a5-ce0080f2b57f" />
<img width="437" height="199" alt="Captura de pantalla 2026-05-29 202612" src="https://github.com/user-attachments/assets/0d911ca8-3ee4-4f6a-8367-b523e04d5ff7" />

- Instrucciones de ejecución
  Paso 1
  Guardar todos los archivos del proyecto en una misma carpeta:
  usuario.py
  admin.py
  cliente.py
  invitado.py
  main.py

Paso 2
 Abrir Visual Studio Code o una terminal.

Paso 3
 Ubicarse dentro de la carpeta del proyecto.
 Ejemplo:
 cd SistemaUsuarios

Paso 4
 Ejecutar el archivo principal:
 python main.py

Paso 5
 Interactuar con el menú del sistema.

Paso 6
 Visualizar:
 Datos de los usuarios
 Tipo de acceso
 Mensajes personalizados
 Validaciones del sistema

- Reflexión personal

Este proyecto me ayudó a entender mejor cómo funciona la herencia en Python y cómo se puede reutilizar código para hacer programas más organizados.
También me sirvió para practicar polimorfismo y comprender mejor cómo cada clase puede comportarse diferente aunque compartan una misma base.
Fue una buena práctica para aplicar programación orientada a objetos de una forma más clara y cercana a casos reales.
