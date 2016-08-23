<?php

use App\User;
use Illuminate\Database\Seeder;

Class UsersTableSeeder extends Seeder {
 
    public function run()
    {
  DB::table('users')->delete();
  
User::create(array(
            'email' => 'nelsonkimaiga@aol.com',
            'password' => Hash::make('303seminarian'),
            'name' => 'Nelson Kimaiga',
            'admin'=>0
        ));
        
  User::create(array(
            'email' => 'admin@rhapsody.com',
            'password' => Hash::make('adminpassword'),
            'name' => 'Nelson Guto',
            'admin'=>1
        ));  

    }
 
}