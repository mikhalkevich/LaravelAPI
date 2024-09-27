<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, Filterable, InteractsWithMedia;
    protected $fillable = ['name', 'description_short', 'description', 'price', 'code', 'user_id', 'status', 'picture'];
    protected $casts = [
        'status' => 'boolean',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function catalogs(){
        return $this->belongsToMany(Catalog::class);
    }
    public function scopePicture($query){
        return $query->whereNotNull('picture');
    }
    public function scopeOne($query){
        return $query->where('price', '>=', 200);
    }
    public function scopeTwo($query){
        return $query->where('price', '<=', 300);
    }
    public function scopeDinamic($query, $vale){
        return $query->where('price', '<=', $vale);
    }
}
