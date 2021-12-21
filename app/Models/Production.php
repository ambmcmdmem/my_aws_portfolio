<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function images() {
        return $this->morphToMany(Image::class, 'imageable');
    }

    public function isNowUser(): bool {
        return $this->user_id == auth()->user()->id;
    }
}
