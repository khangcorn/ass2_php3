<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'user_id',


    ];
    public function category()
    {
        $this->hasOne(Categories::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
