<?php

use App\User;
use App\Authors;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Eloquent::unguard();

    $this->call('UsersTableSeeder');
    $this->command->info('Users table seeded!');
    $this->call('AuthorsTableSeeder');
    $this->command->info('Authors table seeded!');
  }

}