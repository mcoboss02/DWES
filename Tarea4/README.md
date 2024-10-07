# Tarea 4: Librerías y Ejercicios en PHP

Este proyecto contiene librerías y scripts en PHP que desarrollan y prueban diversas funciones sobre arrays y cadenas. Cada archivo está documentado y organizado según los requerimientos de la tarea.

## Estructura de Archivos

```
Tarea4/
├── arrays_lib.php         # Librería de funciones relacionadas con arrays
├── cadenas_lib.php        # Librería de funciones relacionadas con cadenas
├── pruebas_arrays.php     # Script para probar las funciones de arrays
├── pruebas_cadenas.php    # Script para probar las funciones de cadenas
├── documentacion/         # Carpeta con capturas de pantalla y pruebas de ejecución
└── README.md              # Explicación general y guía de la tarea
```

---

## Descripción de cada archivo

### 1. `arrays_lib.php`
Este archivo contiene funciones que manipulan arrays, desde simulaciones de funciones de PHP hasta generadores de secuencias y validaciones. A continuación se describen las principales funcionalidades:

- **`array_diff_propios($array1, $array2)`**: Simula la función `array_diff` de PHP, comparando dos arrays y devolviendo los elementos presentes en el primero pero no en el segundo.

- **`array_diff_key_propios($array1, $array2)`**: Simula la función `array_diff_key` de PHP, comparando las claves de dos arrays y devolviendo las claves presentes en el primer array pero no en el segundo.

- **`unir_arrays($array1, $array2)`**: Une dos arrays en uno solo.

- **`generar_fibonacci($n)`**: Genera una secuencia de Fibonacci de `n` términos, inicializando los dos primeros términos como 1.

- **`generar_array_aleatorio($min, $max)`**: Genera un array de 10 valores aleatorios en el rango entre `$min` y `$max`.

- **`obtener_maximo($array)`**: Recibe un array y devuelve el valor máximo en él.

- **`contar_dos($array)`**: Cuenta cuántas veces aparece el número `2` en el array dado.

- **`convertir_nota($nota)`**: Convierte una nota numérica en una palabra descriptiva: “muy baja” (menos de 5), “muy bien” (de 6 a 8) o “excelente” (más de 8).

- **`obtener_nif($dni)`**: Valida y formatea un DNI para calcular el NIF, agregando ceros a la izquierda si el número tiene menos de 8 dígitos y calculando la letra del NIF correspondiente.

- **`validar_correo($correo)`**: Verifica si una cadena cumple con el formato de un correo electrónico válido.

### 2. `cadenas_lib.php`
Este archivo contiene funciones propias de manipulación de cadenas o strings, simulando operaciones comunes sin depender de funciones avanzadas de PHP. Las funciones incluidas son:

- **`eliminar_espacios($cadena)`**: Elimina los espacios en blanco al inicio y al final de una cadena.

- **`extraer_caracteres($cadena, $inicio, $longitud)`**: Extrae una subcadena de `$longitud` caracteres, comenzando desde la posición `$inicio`.

- **`invertir_cadena($cadena)`**: Invierte el contenido de la cadena dada.

- **`repetir_cadena($cadena, $n)`**: Repite la cadena dada `n` veces y devuelve el resultado.

### 3. `pruebas_arrays.php`
Este archivo contiene pruebas para verificar el correcto funcionamiento de cada función definida en `arrays_lib.php`. Al ejecutarlo, muestra los resultados de las siguientes pruebas:

- Prueba de `array_diff_propios`
- Prueba de `array_diff_key_propios`
- Prueba de `unir_arrays`
- Prueba de `generar_fibonacci`
- Prueba de `generar_array_aleatorio` y `obtener_maximo`
- Prueba de `contar_dos`
- Prueba de `convertir_nota`
- Prueba de `obtener_nif`
- Prueba de `validar_correo`

Este archivo muestra la salida en HTML, permitiendo ver los resultados directamente en el navegador o en una consola web de PHP.

### 4. `pruebas_cadenas.php`
Este archivo contiene pruebas para las funciones definidas en `cadenas_lib.php`. Al ejecutarlo, muestra los resultados de las siguientes pruebas:

- Prueba de `eliminar_espacios`
- Prueba de `extraer_caracteres`
- Prueba de `invertir_cadena`
- Prueba de `repetir_cadena`

### 5. `documentacion/`
Esta carpeta contiene capturas de pantalla y resultados de ejecución de `pruebas_arrays.php` y `pruebas_cadenas.php`, de acuerdo con el formato solicitado. 

## Instrucciones de Ejecución

1. **Requisitos**: Asegúrate de tener PHP instalado en tu sistema. Puedes ejecutar el proyecto localmente utilizando XAMPP o WAMP, o bien, desde una línea de comandos.
   
2. **Ejecutar las pruebas**:
   - **Pruebas de Arrays**: Abre el archivo `pruebas_arrays.php` en un navegador web o ejecuta el comando:
     ```bash
     php pruebas_arrays.php
     ```
   - **Pruebas de Cadenas**: Abre el archivo `pruebas_cadenas.php` en un navegador web o ejecuta el comando:
     ```bash
     php pruebas_cadenas.php
     ```

3. **Capturas de Pantalla**: Los resultados de ejecución estarán en la carpeta `documentacion`, donde se documentan los resultados obtenidos para cada función.

## Notas Adicionales

- Cada función está documentada en el archivo correspondiente y sigue las pautas de la tarea.
- El archivo `README.md` explica la estructura y el propósito de cada función para facilitar la comprensión y revisión del proyecto.
