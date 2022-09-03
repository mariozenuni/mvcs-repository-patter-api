<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materSederValue = 
        [
            [
                'name' => 'Mario Z',
                'email' => 'mario@gmail.com',
                'password' => Hash::make('password'),
            ],
        ];

        DB::table('users')->insert($materSederValue);
        
    }
}
