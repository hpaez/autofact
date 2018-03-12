## Requisitos

Requisitos para la instalación del proyecto.

- PHP >= 7.0.0
- Composer
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

Versiones de tecnologias utilizadas:

- Laravel 5.5
- Bootstrap 3.3.7

## Instalación

Luego de clonar la aplicación deberemos copiar nuestro archivo .env.example como .env y configurar la conexión de nuestra base de datos (host, database, user y password), para luego ir a nuestra consola y ejecutar las siguientes lineas:

** composer install **

** php artisan migrate:install --seed **

## Datos de Prueba

### Admin:
Email: admin@autofact.cl
Password: 123456

### User:
Email: user@autofact.cl
Password: 123456

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).