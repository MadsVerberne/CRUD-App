<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'price', 'type'];

    public function getImageUrlAttribute()
    {
        return $this->image && file_exists(public_path('storage/' . $this->image))
            ? asset('storage/' . $this->image)
            : asset('images/placeholder.jpg');
    }
}
