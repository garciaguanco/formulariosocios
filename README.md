# formulariosocios

Formulario para gestión de socios en instituciones deportivas.

## Descripción

Este proyecto es una aplicación web que permite la gestión de socios en instituciones deportivas. Los usuarios pueden registrarse, actualizar sus datos de contacto, información de salud y estado de socio. 

## Estructura del Proyecto

- `index.html`: Página principal con enlaces a diferentes secciones del formulario.
- `inscripcion.html`: Formulario de inscripción de nuevos socios.
- `datos_contacto.html`: Formulario para actualizar datos de contacto.
- `datos_salud.html`: Formulario para actualizar datos de salud.
- `socio.html`: Sección de gestión del estado de socio.

## Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/garciaguanco/formulariosocios.git

## Flujo del sistema:
Cuando se registra un socio a través de inscripcion.html, se envía la información a registrar_socio.php.
registrar_socio.php guarda la información en el archivo socios.txt.
La página menu.html carga la cantidad actual de socios al hacer una petición a obtener_socios.php, que cuenta las líneas del archivo socios.txt para determinar cuántos socios están registrados y devuelve el número en formato JSON.
Con este sistema, el contador de socios se actualizará automáticamente cuando nuevos socios se registren.

