<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Tập tạ',
            'Cardio',
            'Yoga',
            'Pilates',
            'CrossFit',
            'Thể hình',
            'HIIT',
            'Giãn cơ',
            'Dinh dưỡng',
            'Phục hồi'
        ];

        foreach ($categories as $category) {
            $slug = Str::slug($category);
            $originalSlug = $slug;
            $counter = 1;

            while (DB::table('categories')->where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            DB::table('categories')->insert([
                'name' => $category,
                'slug' => $slug,
            ]);
        }
    }
}
