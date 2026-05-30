**Actividad de evaluación C2 - Consumo energético servidores Unidad 3 – Métodos**
- Objetivo del proyecto
Desarrollar un sistema web en PHP orientado a objetos que permita calcular el consumo energético de un data center mediante integración numérica usando la regla del trapecio.
El sistema busca simular diferentes escenarios de carga del servidor (IDLE, AVERAGE y STRESS), calcular la energía consumida en Joules, convertirla a kWh y analizar la relación entre precisión matemática y costo computacional.

- Problema que resuelve
En un entorno de computación, especialmente en centros de datos, es importante estimar el consumo energético de los servidores para optimizar recursos y reducir costos.
Este proyecto resuelve el problema de calcular de manera aproximada la energía consumida durante un intervalo de tiempo cuando la potencia varía dinámicamente.

- Tecnologías utilizadas
Lenguaje de programación
PHP
HTML
CSS
XAMPP (Apache)
Integración numérica
Regla del trapecio
Funciones matemáticas
Cálculo de error absoluto

- Conceptos aplicados (según temario)
Programación Orientada a Objetos
Clases
Objetos
Encapsulamiento
Constructores
Métodos
Atributos privados
Namespaces
Uso de try-catch para validación de datos y control de errores.
Validación de datos

- Se valida que:

El tiempo inicial sea menor al final
La precisión sea positiva
Integración numérica
Aplicación de la regla del trapecio para aproximar una integral definida.
Costo computacional
- Relación entre:
Precisión
Número de iteraciones
Tiempo de ejecución
Formularios web
Captura de datos mediante formularios HTML enviados por método POST.
CSS externo
Separación entre lógica y presentación visual.

- Capturas de pantalla
(Ya en el archivo llamado "capturas")

- Instrucciones de ejecución
1. Copiar la carpeta del proyecto dentro de:
htdocs
2. Abrir XAMPP Control Panel.
Iniciar el servicio:
Apache
3. Abrir el navegador.
4. Ingresar la URL:
http://localhost/Monitorenergico
5. Ingresar los datos:
Tiempo inicial
Tiempo final
Precisión
Perfil de carga
6. Presionar:
Calcular energía
7. Visualizar:
Resultado en Joules
Resultado en kWh
Tabla comparativa
Posibles mensajes de error

- Reflexión personal
Este proyecto me ayudó a entender mejor cómo aplicar la programación y las matemáticas juntas para resolver problemas reales. También aprendí más sobre validaciones, manejo de errores y la importancia de organizar bien el código.
