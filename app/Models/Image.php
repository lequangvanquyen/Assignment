<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['post_id', 'image'];

    // Định nghĩa mối quan hệ ngược với mô hình Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
