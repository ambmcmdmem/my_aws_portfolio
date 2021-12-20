<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public static $noImgPath;

    protected $fillable = [
        'path'
    ];

    function __construct() {
        self::$noImgPath = self::getNoImgPath();
    }

    public static function getNoImgPath(): string {
        return asset('img/noimage.png');
    }

    public function productions() {
        return $this->morphedByMany(Production::class, 'imageable');
    }

    public function getPathAttribute($value) {
        if($value) {
            return asset('storage/' . $value);
        } else {
            return self::$noImgPath;
        }
    }
}
