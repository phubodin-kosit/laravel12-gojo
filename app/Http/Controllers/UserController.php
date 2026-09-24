<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // ฟังก์ชันสำหรับแสดงหน้าแรก (ตาราง User)
    public function index(Request $request)
    {
        $user = User::paginate(10); 
        return view('user.index', compact('user'));
    }

    // ฟังก์ชันสำหรับแสดงหน้าฟอร์มเพิ่มข้อมูล (ปุ่ม Add New)
    public function create()
    {
        return view('user.create');
    }

    // ฟังก์ชันสำหรับแสดงรายละเอียดของ User แต่ละคน 
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }
}