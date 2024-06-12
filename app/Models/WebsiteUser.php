<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class WebsiteUser extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'author_id');
    }
}
