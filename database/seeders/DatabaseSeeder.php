<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Attachment;
use App\Models\Infrastructure;
use App\Models\Major;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // $berita = Berita::factory()->create();

        // Attachment::factory()->create([
        //     "berita_id" => $berita->id
        // ]);

        // Major::factory()->create([
        //     "name" => "Akuntansi",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/3-1.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho jsoajsas sajosjaos ajsoajsoa sasoajsoajs sjaojsoajsoa soasjoajsojas aosjao soj o o so aj soajsoaj soa soa soajsoa soa soa",
        //     "slug" => "akuntansi"
        // ]);
        // Major::factory()->create([
        //     "name" => "Layanan Perbankan Syariah",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/4.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho",
        //     "slug" => "layanan-perbankan-syariah"
        // ]);
        // Major::factory()->create([
        //     "name" => "Manajemen Perkantoran",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/5.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho",
        //     "slug" => "manajemen-perkantoran"
        // ]);
        // Major::factory()->create([
        //     "name" => "Bisnis Ritel",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/6.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho jsoajsas sajosjaos ajsoajsoa sasoajsoajs sjaojsoajsoa soasjoajsojas aosjao soj o o so aj soajsoaj soa soa soajsoa soa soa",
        //     "slug" => "bisnis-ritel"
        // ]);
        // Major::factory()->create([
        //     "name" => "Bisnis Digital",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/7.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho",
        //     "slug" => "bisnis-digital"
        // ]);
        // Major::factory()->create([
        //     "name" => "Desain Komunikasi Visual",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/8.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho",
        //     "slug" => "desain-komunikasi-visual"
        // ]);
        // Major::factory()->create([
        //     "name" => "Rekayasa Perangkat Lunak",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/9.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho jsoajsas sajosjaos ajsoajsoa sasoajsoajs sjaojsoajsoa soasjoajsojas aosjao soj o o so aj soajsoaj soa soa soajsoa soa soa",
        //     "slug" => "rekayasa-perangkat-lunak"
        // ]);
        // Major::factory()->create([
        //     "name" => "Teknik Komputer Dan Jaringan",
        //     "image" => "https://smkn1bantul.wordpress.com/wp-content/uploads/2024/08/10.jpg",
        //     "description" => "lorem ipsum dolor sit amet consecterur adipsicing husto guarge turrunt koaladigho jsoajsas sajosjaos ajsoajsoa sasoajsoajs sjaojsoajsoa soasjoajsojas aosjao soj o o so aj soajsoaj soa soa soajsoa soa soa",
        //     "slug" => "teknik-komputer-dan-jaringan"
        // ]);
    
    }
}
