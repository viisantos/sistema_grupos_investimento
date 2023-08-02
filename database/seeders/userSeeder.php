<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'cpf'      => '12682114784', 
            'name'     => 'Vitoria', 
            'phone'    => '983920987', 
            'birth'    => date("1998-08-24"),
            'gender'   => 'M',
            'notes'    => 'blablabla',
            'email'    => 'vitoria@mail.com',
            'password' =>  Hash::make('1234'),
            'created_at'    => date("Y-m-d H:i:s"),
            'updated_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
