# Examen Practico Final

## Este es un proyecto base con la herramienta de autenticacion de laravel, con fines academicos

1.  Lo primero que hay que hacer para tener es proyecto es el ejecutar **npm install**, para tener todo lo necesario para la ejecucion del proyecto.
2. se deben de seguir los siguientes pasos para crear la base de datos necesaria para el uso del app, estos se ejecutan dedes la maquina virtual, o la consola por su defecto.

        create database db_laravel;

        create user user_laravel identified by 'secret';

        grant all privileges on db_laravel.* to user_laravel;

        flush privileges;

        quit;
3. colocamos la conexion ala base de datos creada anteriormente de la siguiente manera:
        
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=db_laravel
        DB_USERNAME=user_laravel
        DB_PASSWORD=secret

4. se hacen las migraciones con **php artisan migrate**
