<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight; // ดึง Model Weight มาใช้งาน

class WeightController extends Controller
{
    // 1. หน้าแสดงผลข้อมูลและกราฟ (GET)
    public function index()
    {
        // ดึงข้อมูลทั้งหมด เรียงตามวันที่จากเก่าไปใหม่
        $weights = Weight::orderBy('record_date', 'asc')->get();
        return view('weight.index', compact('weights'));
    }

    // 2. หน้าฟอร์มเพิ่มข้อมูล (GET)
    public function create()
    {
        return view('weight.create');
    }

    // 3. บันทึกข้อมูลใหม่ (POST)
    public function store(Request $request)
    {
        // ตรวจสอบความถูกต้อง (Validate) บังคับให้กรอก และ weight ต้องเป็นตัวเลข
        $request->validate([
            'record_date' => 'required|date',
            'weight' => 'required|numeric|min:1' 
        ], [
            'record_date.required' => 'กรุณาระบุวันที่',
            'weight.required' => 'กรุณาระบุน้ำหนัก',
            'weight.numeric' => 'น้ำหนักต้องเป็นตัวเลขเท่านั้น'
        ]);

        Weight::create($request->all());
        
        return redirect()->route('weight.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว!');
    }

    // 4. หน้าฟอร์มแก้ไขข้อมูล (GET)
    public function edit($id)
    {
        $weight = Weight::findOrFail($id);
        return view('weight.edit', compact('weight'));
    }

    // 5. บันทึกการแก้ไข (PUT)
    public function update(Request $request, $id)
    {
        $request->validate([
            'record_date' => 'required|date',
            'weight' => 'required|numeric|min:1'
        ], [
            'record_date.required' => 'กรุณาระบุวันที่',
            'weight.required' => 'กรุณาระบุน้ำหนัก',
            'weight.numeric' => 'น้ำหนักต้องเป็นตัวเลขเท่านั้น'
        ]);

        $weight = Weight::findOrFail($id);
        $weight->update($request->all());

        return redirect()->route('weight.index')->with('success', 'อัปเดตข้อมูลเรียบร้อยแล้ว!');
    }

    // 6. ลบข้อมูล (DELETE)
    public function destroy($id)
    {
        $weight = Weight::findOrFail($id);
        $weight->delete();

        return redirect()->route('weight.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว!');
    }
}