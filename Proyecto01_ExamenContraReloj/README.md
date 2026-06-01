# PortafolioPOO_AshliPortillo
**UNIDAD 1**
**Nombre del Proyecto:** examen contra reloj
**Objetivo del Proyecto:** El objetivo es medir la precisión técnica en la sintaxis de PHP y la capacidad de modelado de datos sin usar comportamientos (métodos).

**Problema que Resuelve:** Este proyecto simula el modelado de datos para una empresa de logística y un sistema de monitoreo de plantas.
Se busca representar información estructurada mediante clases, permitiendo organizar datos de forma clara y aplicando principios básicos de encapsulamiento.

**Describir la necesidad que atiende:** Atiende la necesidad de organizar datos de logística y monitoreo mediante clases estructuradas, permitiendo un manejo ordenado y seguro de la información.

**Tecnologías Utilizadas**
- PHP
- XAMPP
- Visual Studio Code
- GitHub

**Conceptos Aplicados**
- Programación Orientada a Objetos
- Clases
- Propiedades públicas y privadas
- Tipado estricto
- Encapsulamiento
- Instanciación de objetos
- Uso de require_once
-Clase predefinida DateTime
- Organización modular de archivos

**Explicación del Funcionamiento**

El proyecto consiste en la creación de dos clases:
Clase Paquete
Representa paquetes de una empresa de logística.
Propiedades:
codigoSeguimiento
pesoKilogramos
esFragil
costoInterno (privada)
Clase Sensor
Representa sensores de monitoreo para plantas.

- Propiedades:
id
marca
ultimaLectura
rangoMaximo

En el archivo index.php se prueban ambas clases creando objetos, asignando valores y verificando el acceso restringido a propiedades privadas.

**Capturas:**
<img width="330" height="227" alt="image" src="https://github.com/user-attachments/assets/749faf15-c153-4634-96cc-ef845677e74b" />
<img width="669" height="618" alt="image" src="https://github.com/user-attachments/assets/b5c17f0b-575e-481e-b545-7d00b2ed58fa" />
<img width="409" height="257" alt="image" src="https://github.com/user-attachments/assets/62b6b950-be08-480f-b844-aa133463f74e" />
<img width="424" height="277" alt="image" src="https://github.com/user-attachments/assets/26816544-0227-4cf5-9a88-7f340dca575b" />


**Instrucciones de Ejecución**
Copiar la carpeta del proyecto en htdocs
Abrir XAMPP
Iniciar Apache
Abrir el navegador
Acceder a:
localhost/logistica.php

- **Reflexión Personal**

Aprendí a definir clases con propiedades tipadas y a organizar proyectos orientados a objetos en PHP. Agregaría métodos para manipular y validar la información de los objetos, haciendo el sistema más funcional y completo.
