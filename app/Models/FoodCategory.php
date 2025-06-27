<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $guarded = [];

    public function recipes()
    {
        return $this->hasMany(Recipe::class, 'food_category_id');
    }
}
