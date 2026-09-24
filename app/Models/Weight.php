<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    // กำหนดฟิลด์ที่อนุญาตให้รับข้อมูลจากฟอร์มมาบันทึกได้
    protected $fillable = [
        'record_date', 
        'weight'
    ];
}