<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GeneratesUuid;

class Product extends Model
{
    use HasFactory, GeneratesUuid;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'category_id',
        'image_path',
    ];
}
