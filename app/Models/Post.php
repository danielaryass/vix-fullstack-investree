<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // kolom yang bisa di isi
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
        'category_id'
    ];
    // relasi ke tabel user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // relasi ke tabel category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
