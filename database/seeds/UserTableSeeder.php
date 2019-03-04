<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gabriel Modesto',
            'email' => 'gabriel@email.com',
            'password' => bcrypt('123456')
        ]);
    }
}
