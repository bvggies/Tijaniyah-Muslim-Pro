<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quran;
use Illuminate\Support\Facades\File;

class QuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load Quran data from JSON files
        $quranData = json_decode(File::get(database_path('data/quran_sample.json')), true);
        
        foreach ($quranData as $ayah) {
            Quran::create([
                'surah_number' => $ayah['surah_number'],
                'ayah_number' => $ayah['ayah_number'],
                'arabic_text' => $ayah['arabic_text'],
                'translation' => $ayah['translation'],
                'transliteration' => $ayah['transliteration'],
            ]);
        }
    }
}
