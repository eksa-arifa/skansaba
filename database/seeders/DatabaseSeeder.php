<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Attachment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $berita = Berita::factory()->create();

        Attachment::factory()->create([
            "berita_id" => $berita->id
        ]);
    }
}
