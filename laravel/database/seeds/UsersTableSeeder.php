<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create( [
            'email' => 'ruiz@7cliques.com.br' ,
            'password' => Hash::make( 'cli007' ) ,
            'name' => 'Adriano Ruiz' ,
            'role' => 'admin',
            'avatar' => 'https://pbs.twimg.com/profile_images/781226988975579136/UtGUKq6l.jpg',
        ] );

        User::create( [
            'email' => 'admin@construacontatos.com.br' ,
            'password' => Hash::make( 'cli007' ) ,
            'name' => 'Admin Construa Contatos' ,
            'role' => 'admin',
        ] );
    }
}
