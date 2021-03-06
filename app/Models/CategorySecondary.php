<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySecondary extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryMain_id',
        'position',
        'category',
    ];

    public function categoryMain()
    {
        return $this->belongsTo(CategoryMain::class);
    }
}
