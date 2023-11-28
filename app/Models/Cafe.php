<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'number_phone',
        'location',
        'url_link_maps',
        'range_rate_price',
    ];

    public function images()
    {
        return $this->hasMany(CafeImage::class);
    }

    static public function getCafe()
    {
        $query = self::select('cafes.*');
        return $query->get();
    }   
}
