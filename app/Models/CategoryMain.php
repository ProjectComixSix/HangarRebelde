<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMain extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'category',
    ];

    public function categorySecondaries()
    {
        return $this->hasMany(CategorySecondary::class);
    }
}
