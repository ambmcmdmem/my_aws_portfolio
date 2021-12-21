<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Lib\My_func;

class Image extends Model
{
    use HasFactory;

    public static $noImgPath;

    protected $fillable = [
        'path'
    ];

    public function productions() {
        return $this->morphedByMany(Production::class, 'imageable');
    }

    public function getPathAttribute($value) {
        if($value) {
            return asset('storage/' . $value);
        }
    }
}
