<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = static::generateUniqueSlug($model->title);
        });

        static::updating(function ($model) {
            if ($model->isDirty('title')) {
                $model->slug = static::generateUniqueSlug($model->title);
            }
        });
    }

    protected static function generateUniqueSlug($title, $count = 0)
    {
        $slug = Str::slug($title);
        $newSlug = $count === 0 ? $slug : "{$slug}-{$count}";
        if (static::where('slug', $newSlug)->exists()) {
            return static::generateUniqueSlug($title, ++$count);
        }
        return $newSlug;
    }
}