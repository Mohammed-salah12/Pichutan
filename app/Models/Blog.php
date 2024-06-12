<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'author_name',
        'author_info',
        'content',
        'is_published',
        'email',
        'author_id'
    ];    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function author()
    {
        return $this->belongsTo(WebsiteUser::class, 'author_id');
    }
}
