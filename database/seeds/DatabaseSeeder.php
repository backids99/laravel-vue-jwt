<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'full_name' => Str::random(10).' '.Str::random(10),
            'date_of_birth' => Carbon::create(
                rand(1990, 2000), 
                rand(1, 12), 
                rand(1, 28)
            )->format('Y-m-d'),
            'password' => Hash::make('password'),
        ]);
    }
}
