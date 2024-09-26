<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Product extends Model
{
    use HasFactory, Filterable;
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
}
