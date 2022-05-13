# Prueba Técnica 

Este proyecto es parte de un examen tecnico solicitado como parte un proceso de reclutamiento.

## Descripción

1. ##### Realiza un formulario de registro de usuario que contenga los siguientes campos (nombre,  teléfono, correo, contraseña, confirmación de contraseña, RFC y notas.), considerando los siguientes puntos:

    a. Utiliza cualquier Framework de PHP
    b. Usa la librería Bootstrap para un registro responsivo.
    c. Realiza una validación en front (con JS) y backend (con PHP) para los datos. Valide que el RFC cumpla con persona moral o física.
    d. Si las validaciones son correctas usa PHP y guarda en base de datos la IP desde donde se hace el registro.
    e. Guarda todos los datos en una base de datos local SQL con la contraseña cifrada.
    f. El diseño y usabilidad del registro también se evaluará.
    g. Realiza el registro de al menos 2 usuarios desde este formulario (el correo puede ser inventado).

2. ##### Con la información que se registró anteriormente; Realiza un inicio de sesión válido con PHP  puro validando el correo y la contraseña, considerando los siguientes puntos:
    a. Utiliza cualquier Framework de PHP
    b. Usa la librería Bootstrap para un inicio de sesión responsivo.
    c. Valida en el front que el email sea un email válido y oculta la contraseña.
    d. El diseño y usabilidad del inicio de sesión será evaluado.

3. ##### Realiza una vista que solo pueda ser accedida si se efectuó un inicio de sesión válido en el punto anterior; considerando los siguientes puntos:
    a. Si no se tiene un inicio de sesión válido; que regrese a la página del punto anterior.
    b. Muestra el nombre y correo electrónico del usuario que inicio sesión.
    c. Utiliza cualquier Framework de PHP
    d. Muestra en pantalla una tabla con la información de todos los usuarios registrados en el sistema.
    e. Implementa DataTables (https://datatables.net/) para renderizar la tabla y que se pueda exportar SOLO en formato PDF y CSV.
    f. Realiza un Modal para poder actualizar la información de los usuarios (nombre, teléfono, 
    contraseña y RFC) con sus respectivas validaciones en front y backend
    g. Del punto anterior; actualiza la información mediante Ajax y manda un mensaje de confirmación en la pantalla.

4.  ##### Creación y consumo de API’s. Con la base de datos de usuarios; Crea un API Rest en PHP.
    a. Crea un API, usando algún Framework, y deberá tener los siguientes métodos:
	- GET: Obtiene todos los usuarios de la tabla y otro para obtener el usuario por ID.
	- PUT: Inserta un nuevo registro de usuario.
	- POST: Actualiza la información de un usuario por ID. 
	- Los 3 métodos serán probados desde Postman.

5. ##### Detalla una solución donde se puedes desplegar mediante integración continua o un despliegue automatizado entre el Framework de PHP que usaste y un ambiente/servidor en la nube.

6. ##### Consideraciones generales
    a. Todas las librerías externas deberán ser cargadas mediante CDN.
    b. Sube tu prueba técnica a un repositorio público en GitHub y comparte dicho repositorio. Incluye el script de base de datos.
    c. Deberá vivir en una arquitectura en Docker.

7. ##### Forma de evaluar
    a. Se clonará el repositorio compartido y se probarán que funcionen cada uno de los puntos.
    b. Se pretende que la prueba funcione con tan solo clonar el repositorio o en su caso; incluir las instrucciones necesarias para que el proyecto funcione

## Para comenzar

### Dependencias

Este proyecto es una aplicación web, sin embargo, para funcionar en local es necesario:
* PHP/8.0.1
* Apache/2.4.47
* MariaDB/10.4.19
* Composer/2.1.3
* Laravel/9.0

### Instalaciones

* Instalación de [XAMPP](https://www.apachefriends.org/es/download.html "XAMPP") (Recomendado para funcionamiento en localhost) 
* Instalación de [Composer](https://getcomposer.org/download/ "Composer")
* Instalación de [Laravel con Composer](https://laravel.com/docs/8.x/installation#installation-via-composer "Laravel con Composer")

### Configurando el proyecto

1. Una vez hayamos clonado el repositorio de este proyecto en local, debemos hacer los siguientes ajustes para que éste pueda correr en nuestro equipo.

2. Instalar dependencias:
    * Para ello abriremos una terminal en la carpeta del proyecto y ejecutaremos:
    ```
    composer install
    ```
    * También debemos instalar las dependencias de NPM definidas en el archivo package.json con:
    ```
    npm install
    ```

3. Es necesario crear un base de datos con el nombre "prueba" para que este proyecto funcione

4. Crear el archivo .env
    * Por cuestiones de seguridad, este archivo no se incluye en el repositorio, por lo que es necesario generarlo: Se puede duplicar el archivo .env.example y añadir la siguiente configuracion:
    ```
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=prueba
    DB_USERNAME=root
    DB_PASSWORD=secret
    ```

5. La clave de aplicación es una cadena aleatoria almacenada en la clave APP_KEY dentro del archivo .env.   
    * Notarás que también falta. Para crear la nueva clave e insertarla automáticamente en el .env, ejecutaremos:
    ```
    php artisan key:generate
    ```

6. Ejecutar migraciones
    * Por último, ejecutamos las migraciones para que se generen las tablas con:
    ```
    php artisan migrate 
    ```

### Ejecutando servidor en local

* Solo necesitas abrir una terminal en la carpeta del proyecto y correr el comando

```
php artisan serve
```

Y listo! Puedes ingresar al sistema en la direccion http://127.0.0.1:8000

## Ayuda

Este proyecto esta en desarrollo, si necesitas ayuda con algo, contactame.

## Sobre el autor

[<img src='https://img.shields.io/badge/-Github-9979C1?style=for-the-badge&logo=github' alt='github' height='20'>](https://github.com/PatyLuPrz)  [<img src='https://img.shields.io/badge/-Facebook-C3D6F2?style=for-the-badge&logo=facebook' alt='facebook' height='20'>](https://www.facebook.com/paty.przmtz)  [<img src='https://img.shields.io/badge/-Instagram-FEE5EB?style=for-the-badge&logo=instagram' alt='instagram' height='20'>](https://www.instagram.com/patty.was.here/)  [<img src='https://img.shields.io/badge/-Twitter-D1EAF5?style=for-the-badge&logo=twitter' alt='twitter' height='20'>](https://twitter.com/PatyLuPrz)  [<img src='https://img.shields.io/badge/-Twitch-DCCBED?style=for-the-badge&logo=twitch' alt='twitch' height='20'>](twitch.tv/pattywashere)

## Historial de versiones

* Este proyecto se encuentra en desarrollo.

## Licencia

Este proyecto esta protegido bajo la licencia MIT - Consulta el archivo LICENSE.md para más detalles.


## Agradecimientos.

Inspiraciones, fragmentos de codigo, imagenes, etc.

* Aún no hay nada aquí.