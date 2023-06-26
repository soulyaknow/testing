<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel javascript',
        //     'company' => 'ACJ company',
        //     'location' => 'Atabay',
        //     'email' => 'test123@gmail.com',
        //     'website' => 'https://www.tesing.com',
        //     'description' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate 
        //     the visual form of a document or a typeface without relying on meaningful content. 
        //     Lorem ipsum may be used as a placeholder before final copy is available'
        // ]);
        // Listing::create([
        //     'title' => 'Full Stack Developer',
        //     'tags' => 'Laravel javascript api',
        //     'company' => 'ACJ company',
        //     'location' => 'Atabay',
        //     'email' => 'test@gmail.com',
        //     'website' => 'https://www.testing.com',
        //     'description' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate 
        //     the visual form of a document or a typeface without relying on meaningful content. 
        //     Lorem ipsum may be used as a placeholder before final copy is available'
        // ]);
    }
}
