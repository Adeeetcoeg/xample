<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

    //make role admin
    $admin = new Role();
    $admin->name = "admin";
    $admin->display_name = "Administrator";
    $admin->save();

    //make role penjual
    $penjual = new Role();
    $penjual->name = "penjual";
    $penjual->display_name = "Penjual";
    $penjual->save();

    //make role pembeli/user
    $pembeli = new Role();
    $pembeli->name = "pembeli";
    $pembeli->display_name = "Pembeli";
    $pembeli->save();

    //mengisi admin
    $adminRole = new User;
    $adminRole->name = 'fx';
    $adminRole->email = 'fx@gmail.com';
    $adminRole->password = Hash::make('fx');
    $adminRole->save();
    $adminRole->attachRole($admin);

    //mengisi penjual
    $penjualRole = new User;
    $penjualRole->name = 'ft';
    $penjualRole->email = 'ft@gmail.com';
    $penjualRole->password = Hash::make('ft');
    $penjualRole->save();
    $penjualRole->attachRole($penjual);

    //mengisi pembeli
    $pembeliRole = new User;
    $pembeliRole->name = 'fg';
    $pembeliRole->email = 'fg@gmail.com';
    $pembeliRole->password = Hash::make('fg');
    $pembeliRole->save();
    $pembeliRole->attachRole($pembeli);
    }
}
