<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeImage extends Model
{
    use HasFactory;

    protected $table = 'cafe_images'; // Menentukan nama tabel

    protected $fillable = [
        'cafe_id',
        'path_file',
    ];

    public function cafe()
    {
        return $this->belongsTo(Cafe::class);
    }
}
