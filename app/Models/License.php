<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    // เพิ่มฟังก์ชัน belongsTo ตรงนี้
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}