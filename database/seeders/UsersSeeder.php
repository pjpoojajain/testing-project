<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'pooja',
            'email' => 'pooja@123.com',
            'username' => 'pooja@123.com',
            'email_verified_at' => now(),
        ]);
    }
}
