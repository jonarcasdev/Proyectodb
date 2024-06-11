Nombre del Proyecto
Descripción breve de lo que hace tu proyecto.

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

cp .env.example .env (Asegúrate de configurar correctamente las variables de entorno en el archivo .env.)

5.Genera la clave de aplicación:
php artisan key:generate

6.Ejecuta las migraciones y seeding de la base de datos:
php artisan migrate --seed

7.Construye los activos front-end:
npm run dev

8.Para iniciar el servidor de desarrollo, ejecuta el siguiente comando:
(Nunca lo metí a Xamp o una aplicación similar, lo hice con artisan serve asi que si hay errores fuera de este ya no es mi culpa. )

php artisan serve (obligatorio)
Luego, abre tu navegador web y navega a http://localhost:8000.


