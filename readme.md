# Libre te quiero

[![License: CC BY-NC 4.0](https://img.shields.io/badge/License-CC%20BY--NC%204.0-lightgrey.svg)](https://creativecommons.org/licenses/by-nc/4.0/)

Libre te quiero es una aplicación para reconocer la fauna silvestre peruana y realizar denuncias de tráfico ilegal.

Este repositorio es el backend y el api que utiliza la aplicación. El repositorio de la aplicación está ubicado en https://github.com/caleidosmedia/libretequiero-app.

# Screenshots
![Home](http://caleidos.pe/libre-te-quiero/home.jpg) ![Reconoce](http://caleidos.pe/libre-te-quiero/reconoce.png)


### Instalación

El proyecto utiliza [Laravel](https://laravel.com/docs/5.4) v5.4.

Para realizar la instalación, luego de clonar el repositorio, se debe ingresar a la carpeta e instalar las dependencias via composer:

```sh
$ composer install
```

Renombrar el archivo .env.example a .env y modificar los parametros para apuntar a una base de datos que se utilizará en el proyecto. Generar el key de la aplicación utilizando el siguiente comando:
```sh
$ php artisan key:generate
```

Para ejecutar las migraciones y los seeds ejecutar el siguiente comando:
```sh
$ php artisan migrate --seed
```

Opcionalmente, se pueden correr seeders para el llenado inical de los animales en peligro de extinción. Esta lista se llena con los datos de [UICN Red List of Threaten Species](http://www.iucnredlist.org/)  y las imagenes se obtienen de [Wikimedia Commons](https://commons.wikimedia.org/wiki/Main_Page). Los datos para el reconocimento de animales se llenan según la guía de la [WCS](https://peru.wcs.org/DesktopModules/Bring2mind/DMX/Download.aspx?EntryId=32151&PortalId=94&DownloadMethod=attachment).

En el .env incluir el token de la IUCN en el parametro UICN_TOKEN. Se puede obtener el token [aquí](http://apiv3.iucnredlist.org/api/v3/token).

Ejecutar los siguientes comandos para correr los seeders:
```sh
$ php artisan db:seed --class=AnimalsTableSeeder
$ php artisan db:seed --class=WCSAnimalsTableSeeder
```


Licencia
----
[CC BY-NC 4.0](https://creativecommons.org/licenses/by-nc/4.0/)