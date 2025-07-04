<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    // memanggil field agar bisa diinput
    protected $fillable = [
        'name',
        'slug'
    ];

    // relasi
    public function items()
    {
        return $this->hasMany(Item::class);

    }
}


