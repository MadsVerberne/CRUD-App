<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    public function getImageUrlAttribute()
    {
        return $this->image && file_exists(public_path('storage/' . $this->image))
            ? asset('storage/' . $this->image)
            : asset('images/placeholder.jpg');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Optioneel: automatisch server bestanden verwijderen bij delete
    protected static function booted()
    {
        static::deleting(function ($product) {
            foreach ($product->images as $image) {
                // Verwijder bestand van storage
                if (file_exists(storage_path('app/public/' . $image->path))) {
                    unlink(storage_path('app/public/' . $image->path));
                }
                $image->delete();
            }
        });
    }
}
