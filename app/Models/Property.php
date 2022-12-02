<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Room;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'city_id',
        'name',
        'location',
        'image',

    ];

    public function city(){

        return $this->belongsTo(City::class, 'city_id','id');
    }

    public function rooms(){
        return $this->hasMany(Room::class, 'property_id', 'id');
    }

}
