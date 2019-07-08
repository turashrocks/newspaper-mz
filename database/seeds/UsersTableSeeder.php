<?php

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'turash@app.com')->first();

        if(!$user){
            User::create([
                'name' => 'Turash',
                'email' => 'turash@app.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
