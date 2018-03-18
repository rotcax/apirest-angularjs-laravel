## PASOS PARA EJECUTAR LA INSTALACIÓN DEL PROYECTO

- Clonar [apirest-angularjs-laravel](https://github.com/rotcax/apirest-angularjs-laravel)
- Dirigirse al proyecto clonado
- Copiar el archivo .env.example a .env
- Modificar el archivo .env con los datos de la base de datos
- Desde la consola (Windows: Git Bash) ejecutar los comandos: 
	- composer install 			--> Instala las dependencias del proyecto
	- php artisan key:generate 	--> Genera una nueva clave de cifrado
	- php artisan config:clear 	--> Limpia la caché de configuraciones
	- php artisan migrate 		--> Ejecuta los scripts para la creación de la base de datos
	- php artisan route:list   	--> (Opcional) Muestra todas las rutas que han sido configuradas y a las cuales pueden ser accedidas 