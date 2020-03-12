<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Generador de CSV desde Base de datos

La aplicación es una interfaz simple para generar un csv desde una base de datos SQLite

## Programas para instalar la aplicación

Se debe tener instalado los siguientes programas:

* Composer
* PHP Versión 7 hacia arriba.
* Visor de SQLite

## Pasos para instalar

Seguir los siguientes pasos:

* Clonar el repositorio mediante Git clone
 ~~~
  git clone https://github.com/yickson/products-linets.git
  ~~~
* Moverse al directorio de la aplicación
 ~~~
  cd /route/my/appClone
 ~~~
* Instalar las dependencias de composer
 ~~~
  composer install  
 ~~~
* Desplegar la base de datos en el archivo de variables de entorno (.env)
 ~~~
  DB_CONNECTION=sqlite
  DB_DATABASE=/absolute/path/to/my/database/database/store.sqlite
 ~~~
* Correr las migraciones
~~~
  php artisan migrate
 ~~~
* Ejecutar la aplicación en el navegador aplica sino se utiliza herramientas como Laravel Homebrew o Laragon
 ~~~
  php artisan serve  
 ~~~
* Descargar el Csv desde la web en el enlace
* Ejecutar los testing debe estar en la raíz del proyecto
 ~~~
  vendor/bin/phpunit
 ~~~
## Autor

- Yickson Ramírez
- [Mi sitio web](https://yickson.cl)

### Notas adicionales

La base de datos debe estar en el directorio database/database.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
