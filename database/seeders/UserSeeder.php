<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name= 'mooo';
        $user->email= 'mooo@gmail.com';
        $user->password = Hash::make('mooo');
        $user->save();
    }
}
