<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'brand_id',
        'type_id',
        'photos',
        'features',
        'price',
        'star',
        'review'
    ];

    // mengubah foto jadi array
    protected $casts = [
        'photos' => 'array',
    ];

    // Get first photo from photos
    public function getThumbnailAttribute()
    {
        if ($this->photos) {
            return Storage::url(json_decode($this->photos)[0]);
        }

        return 'https://placehold.co/800x600';
    }

    // public function getThumbnailAttribute()
    // {
    //     $photos = $this->photos;

    //     // Decode lagi kalau ternyata masih string
    //     if (is_string($photos)) {
    //         $photos = json_decode($photos, true);
    //     }

    //     if ($photos && isset($photos[0])) {
    //         return Storage::url($photos[0]);
    //     }

    //     return 'https://placehold.co/800x600';
    // }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
