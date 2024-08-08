<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Thêm dữ liệu mẫu vào bảng comments
        DB::table('comments')->insert([
            ['post_id' => 1, 'user_id' => 1, 'content' => 'Bài viết này rất hữu ích, cảm ơn bạn!', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['post_id' => 1, 'user_id' => 1, 'content' => 'Tôi đồng ý, thông tin rất chi tiết!', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['post_id' => 30, 'user_id' => 1, 'content' => 'Bài viết rất hay, tôi sẽ thử nghiệm ngay!', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['post_id' => 28, 'user_id' => 1, 'content' => 'Cảm ơn vì đã chia sẻ!', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
