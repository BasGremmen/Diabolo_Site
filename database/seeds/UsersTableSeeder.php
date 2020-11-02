<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class,50)->create();
        App\User::create(['name'=>'Bas','email'=>'bas@luton.nl','password'=> Hash::make('secret'),'type'=>'admin']);
    }
}