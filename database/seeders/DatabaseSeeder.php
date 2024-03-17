<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('tbl_akuns')->insert([
            [
            "nama" => "Ananda",
            "username" => "ananda",
            "email" => "ananda@gmail.com",
            "phone" => "9873491",
            "address" => "Bangkalan",
            "password" => Hash::make("testimoni"),
            "role" => "admin",
            ],
            [
            "nama" => "Bambang",
            "username" => "suparto",
            "email" => "suparto@gmail.com",
            "phone" => "987911",
            "address" => "Surabaya",
            "password" => Hash::make("testlagi"),
            "role" => "customer",
            ]
        ]);
    }
}
