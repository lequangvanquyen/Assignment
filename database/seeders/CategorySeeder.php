<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dữ liệu mẫu
        $categories = [
            ['name' => 'Công nghệ', 'slug' => 'cong-nghe'],
            ['name' => 'Kinh doanh', 'slug' => 'kinh-doanh'],
            ['name' => 'Giải trí', 'slug' => 'giai-tri'],
            ['name' => 'Thể thao', 'slug' => 'the-thao'],
            ['name' => 'Sức khỏe', 'slug' => 'suc-khoe'],
        ];

        // Chèn dữ liệu vào bảng categories
        DB::table('categories')->insert($categories);
    }
}

