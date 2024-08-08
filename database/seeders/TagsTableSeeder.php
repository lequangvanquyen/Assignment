<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Fitness', 'slug' => Str::slug('Fitness')],
            ['name' => 'Nutrition', 'slug' => Str::slug('Nutrition')],
            ['name' => 'Workout', 'slug' => Str::slug('Workout')],
            ['name' => 'Health', 'slug' => Str::slug('Health')],
            ['name' => 'Wellness', 'slug' => Str::slug('Wellness')],
        ];

        // Insert tags into the database
        foreach ($tags as $tag) {
            DB::table('tags')->updateOrInsert(
                ['slug' => $tag['slug']], // Điều kiện kiểm tra
                ['name' => $tag['name']] // Dữ liệu để cập nhật hoặc chèn mới
            );
        }
    }
}
