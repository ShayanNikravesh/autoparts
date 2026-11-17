<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            ['title' => 'کروسل'],
            ['title' => 'بنر متوسط'],
            ['title' => 'بنر کوچک'],
        ];

        foreach ($banners as $banner) {
            Banner::Create(
                ['title' => $banner['title']],
            );
        }
    }
}
