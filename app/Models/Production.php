<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Lib\My_func;

class Production extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'purchase_user_id'
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

    public function chat_contents() {
        return $this->hasMany(ChatContent::class);
    }

    public function getImgArr(): array {
        if(empty($this->images[0])) {
            return [
                (object)[
                    'path' => My_func::getNoImgPath()
                ]
            ];
        } else {
            return $this->images;
        }
    }

    public function getFirstImgPath(): string {
        if(empty($this->images[0])) {
            return My_func::getNoImgPath();
        } else {
            return $this->images[0]->path;
        }
    }

    public function isNowUser(): bool {
        return $this->user_id == auth()->user()->id;
    }
}
