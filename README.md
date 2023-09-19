# Sistema de Inventario para Cafetería

Este proyecto es un sistema de inventario diseñado para gestionar los productos y pedidos de una cafetería.

## Tecnologías Utilizadas

- **Laravel:** Framework de PHP para el desarrollo de aplicaciones web.
- **Composer:** Administrador de dependencias de PHP.
- **Base de Datos:** PostgreSQL (Puedes elegir otro sistema de gestión de bases de datos si es necesario).
- **Frontend:** HTML, CSS, JavaScript, Bootstrap.

## Funcionalidades Principales

- **Gestión de Productos:** Permite agregar, editar y eliminar productos con detalles como nombre, descripción, precio y cantidad disponible.
- **Control de Stock:** Realiza seguimiento automático de las existencias de los productos.
- **Gestión de Pedidos:** Registra pedidos de clientes, permite personalización y cálculo de precios.

## Requisitos Previos

Asegúrate de tener instalados los siguientes requisitos previos:

- **PHP 8.2.4**
- **Composer**
- **Base de Datos (PostgreSQL)**
- **Navegador Web**

## Instalación y Ejecución

1. Descarga el código fuente.

2. Configura tu entorno y base de datos en el archivo `.env`.

3. Ejecuta `composer install` para instalar las dependencias de Laravel.

4. Genera una clave de aplicación única con `php artisan key:generate`.

5. Ejecuta las migraciones de la base de datos con `php artisan migrate`.

6. Inicia el servidor de desarrollo con `php artisan serve`.

7. Accede a la aplicación en tu navegador web (por defecto en http://localhost:8000).


## Consulta en BD
- Realizar una consulta que permita conocer cuál es el producto que más stock tiene.
SELECT * FROM productos ORDER BY stock DESC LIMIT 1;
- Realizar una consulta que permita conocer cuál es el producto más vendido.
