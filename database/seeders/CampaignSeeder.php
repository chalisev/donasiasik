<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'thumbnail' => 'campaign/1.jpg',
            'title' => 'Bantu Aku Mengumpulkan Uang Untuk Membangun Sebuah Sekolah',
            'slug' => 'Bantu-Aku-Mengumpulkan-Uang-Untuk-Membangun-Sebuah-Sekolah',
            'story' => 'Website ini dibuat untuk berdonasi',
            'target' => 2000000000,
            'end_date' => '2022-12-02'
        ]);

        Campaign::create([
            'thumbnail' => 'campaign/2.jpg',
            'title' => 'Bantu Aku Mengumpulkan Uang Untuk Membangun Sebuah Kosan',
            'slug' => 'Bantu-Aku-Mengumpulkan-Uang-Untuk-Membangun-Sebuah-Kosan',
            'story' => 'Website ini dibuat untuk berdonasi',
            'target' => 2000000000,
            'end_date' => '2022-12-02'
        ]);
    }
}
