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
        return $this->belongsTo('App\Models\User');
    }

    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }

    public function images() {
        return $this->morphToMany(Image::class, 'imageable');
    }
}
