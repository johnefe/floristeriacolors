<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'email'     => 'admin@admin.com',
            'password' => Hash::make('adminfloris') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}