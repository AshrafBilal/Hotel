<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'property_id',
        'name',
        'gest',
        'child',
        'bed',
        'bathroom',
        'price',
        'image',

    ];

    public function property(){

        return $this->belongsTo(Property::class, 'property_id','id');
    }
}
