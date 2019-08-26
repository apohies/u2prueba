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
        $user=new User();
        $user->name='miguel';
        $user->nick='micky';
        $user->email='miguelegion@gmail.com';
        $user->city='Bogota';
        $user->password=bcrypt(12345678);
        $user->role=1;
        $user->save();
        
    }
}
