<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Travel extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_public',
        'name',
        'description',
        'slug',
        'number_of_days',
        ];

        public function numberOfNights():Attribute
        {
            return Attribute::make(
                get: fn ($value,$attributes) => $attributes['number_of_days'] - 1,
            );

        }
}
