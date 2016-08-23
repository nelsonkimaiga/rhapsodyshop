<?php

use App\User;
use Illuminate\Database\Seeder;

Class AuthorsTableSeeder extends Seeder {
 
    public function run()
    {
DB::table('authors')->delete();

        Author::create(array(
            'name' => 'Henrik',
            'surname'=>'Ibsen'
        ));

        Author::create(array(
            'name' => 'Malkiat',
            'surname'=>'Singh'
        ));

        Author::create(array(
            'name' => 'Uhuru',
            'surname'=>'Kenyatta'
        ));

    }
 
}