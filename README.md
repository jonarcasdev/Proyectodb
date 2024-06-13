# Sistema de Gestión de Paquetería

Este es un sistema de gestión de paquetería desarrollado en PHP utilizando Laravel y Vue.js.

## Requisitos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos en tu máquina:

- PHP (versión >= 7.4)
- Composer
- Node.js (versión >= 12.x)
- NPM o Yarn

## Instalación

1. **Clona el repositorio:**

git clone -b DevelopmentComplete https://github.com/JonarcasDev/Proyectodb.git


2. **Instala las dependencias de PHP:**

composer install
composer require laravel/ui
php artisan ui bootstrap --auth


3. **Instala las dependencias de Node.js:**

npm install


4. **Configura el archivo .env:**

- Copia el archivo `.env.example` y renómbralo a `.env`.
- Configura las variables de entorno según tu configuración de base de datos:

  ```
  DB_CONNECTION=pgsql
  DB_HOST=127.0.0.1
  DB_PORT=5433
  DB_DATABASE=test
  DB_USERNAME=jonathan
  DB_PASSWORD=1234
  ```

5. **Genera la clave de la aplicación:**

php artisan key:generate


6. **Ejecuta las migraciones y vincula el almacenamiento:**

php artisan migrate  = para migrar las tablas de datos
php artisan storage:link  = para activar los puertos locales alamacenamiento para las fotos


7. **Construye los activos front-end:**

npm run dev


8. **Inicia el servidor de desarrollo:**

php artisan serve



Abre tu navegador y navega a [http://localhost:8000](http://localhost:8000).

## Funcionalidades

El sistema ofrece las siguientes funcionalidades principales:

- Autenticación de usuarios con roles.
- Gestión de clientes y usuarios.
- Solicitud de servicios por parte de los usuarios.
- Gestión de entregas por parte de mensajeros.
- Cambio de estado de pedidos y registro de entregas.
- Trazabilidad de pedidos para seguimiento de estado.
- Módulo de administración con generación de reportes en formato PDF.

## Reportes Disponibles

1. **Listado de pedidos solicitados por cliente y por mes.**
2. **Listado de pedidos atendidos por mensajero en un mes especificado.**

