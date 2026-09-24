<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // เพิ่มบรรทัดนี้เข้าไปครับ
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
}