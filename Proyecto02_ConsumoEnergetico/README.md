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
<img width="775" height="633" alt="Captura de pantalla 2026-05-28 230136" src="https://github.com/user-attachments/assets/aed72f4d-87a6-430a-9fe2-494f7d8b93f4" />
<img width="547" height="548" alt="Captura de pantalla 2026-05-29 155457" src="https://github.com/user-attachments/assets/e47c3c2a-95c7-4901-9fb3-0d4b21c66c79" />
<img width="631" height="636" alt="Captura de pantalla 2026-05-29 155505" src="https://github.com/user-attachments/assets/f48ed189-d828-45b1-afa7-1d9b6700b6aa" />
<img width="672" height="545" alt="Captura de pantalla 2026-05-29 155956" src="https://github.com/user-attachments/assets/c7bad22f-40f7-4ff4-a845-66dcff6287b4" />
<img width="1340" height="697" alt="Consumo energetico1" src="https://github.com/user-attachments/assets/77944459-43c8-4862-a7b9-2824335db4a7" />
<img width="1329" height="699" alt="Consumoenergetico2ejecucion" src="https://github.com/user-attachments/assets/0ff4784b-d9a0-49a3-a5b0-48e915c34e2e" />

- Instrucciones de ejecución
1. Copiar la carpeta del proyecto dentro de:
htdocs
2. Abrir XAMPP Control Panel.
Iniciar el servicio:
Apache
3. Abrir el navegador.
4. Ingresar la URL:
http://localhost/Monitor_energetico
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
