Crud de paqueteria
Ingresar por medio de usuario y contraseña
Gestionar clientes
Gestionar usuarios y perfiles
Solicitar servicios por parte de los usuarios
Permitir la entrega de pedidos por parte de los mensajeros
Cambiar el estado de un pedido por parte del mensajero
Registrar la entrega del pedido 
Hacer trazabilidad a un pedido para saber en qué estado se encuentra
La apliación tambien debe tener un módulo de adminstración que le permita al gerente
de la empresa sacar reportes en formato PDF con la siguiente información.

- Listado de los pedidos solicitados por cliente y por mes
- Listado de pedidos atendidos por mensajero en un mes especificado

Requisitos
Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

PHP (versión >= 7.4)
Composer
Node.js (versión >= 12.x)
NPM o Yarn


Instalación
Sigue estos pasos para instalar y configurar el proyecto en tu máquina local:

1.Clona el repositorio:
git clone https://github.com/tu_usuario/tu_proyecto.git
cd tu_proyecto

2.Instala las dependencias de PHP:
composer install

3.Instala las dependencias de Node.js:
npm install

4.Configura el archivo .env:

Copia el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno según tus necesidades:

mi archivo .env{
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5433
DB_DATABASE=test
DB_USERNAME=jonathan
DB_PASSWORD=1234
}

5.Genera la clave de aplicación:
php artisan key:generate

6.Ejecuta las migraciones
php artisan migrate
php artisan storage:link (para que las imagenes aparezcan)

7.Construye los activos front-end:
npm run dev

8.Para iniciar el servidor de desarrollo, ejecuta el siguiente comando:
(Nunca lo metí a Xamp o una aplicación similar, lo hice con artisan serve asi que no tengo contemplados los errores sin este )

php artisan serve (obligatorio)
Luego, abre tu navegador web y navega a http://localhost:8000.


