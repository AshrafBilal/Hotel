<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\property;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function properties(){
        return $this->hasMany(Property::class, 'city_id', 'id');
    }

}
