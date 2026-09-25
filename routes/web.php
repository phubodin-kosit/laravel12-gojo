<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/active/about', function () {
    return view('active/about');
})->name('about');
Route::get('/active/services', function () {
    return view('active/services');
})->name('services');
Route::get('/active/portfolio', function () {
    return view('active/portfolio');
})->name('portfolio');
Route::get('/active/team', function () {
    return view('active/team');
})->name('team');
Route::get('/active/blog', function () {
    return view('active/blog');
})->name('blog');
Route::get('/active/contact', function () {
    return view('active/contact');
})->name('contact');

require __DIR__.'/auth.php';
Route::get('/active/index', function () {
    return view('active/index');
})->name('index');

Route::get('product-index', function () {
    $products = Product::get();
    return view('query-test', compact('products'));
})->name("product.index");

Route::get('product-form', function () {
    return view('product-form');
})->name("product.form");
Route::post('/product-submit', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
        $url = Storage::url($imagePath);
        $data["image"] = $url;
    }

    Product::create($data);
    return redirect()->route('product.index')->with('success', 'เพิ่มสินค้าแล้ว!');
})->name('product.submit');

// ==========================================
// Route สำหรับระบบติดตามน้ำหนัก (Weight Tracker)
// ==========================================
Route::get('/weight', [WeightController::class, 'index'])->name('weight.index');

// เพิ่ม ->middleware('auth') เพื่อบังคับล็อกอินเฉพาะตอนเพิ่ม แก้ไข ลบ ข้อมูล
Route::get('/weight/create', [WeightController::class, 'create'])->name('weight.create')->middleware('auth');
Route::post('/weight', [WeightController::class, 'store'])->name('weight.store')->middleware('auth');
Route::get('/weight/{id}/edit', [WeightController::class, 'edit'])->name('weight.edit')->middleware('auth');
Route::put('/weight/{id}', [WeightController::class, 'update'])->name('weight.update')->middleware('auth');
Route::delete('/weight/{id}', [WeightController::class, 'destroy'])->name('weight.destroy')->middleware('auth');

Route::resource('license', LicenseController::class);
Route::resource('user', UserController::class);
Route::resource('vehicle', VehicleController::class);

Route::get("/gallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    $cat= "https://media.newyorker.com/photos/5a875e3f33aebd0cab9bab12/master/w_2560%2Cc_limit/Brody-Passionate-Politics-Black-Panther.jpg";
    $god = "https://upload.wikimedia.org/wikipedia/en/3/3c/Chris_Hemsworth_as_Thor.jpg"; 
    $spider = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvyeAKDa4Mzqhx9LnRoj-k56znrKbzgJYR1xP1AGd7kg&s=1024";
    
    return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
});

Route::get("/gallery/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get("/gallery/bird", function () {
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact("bird"));
});

Route::get("/gallery/cat", function () {
    $cat = "https://media.newyorker.com/photos/5a875e3f33aebd0cab9bab12/master/w_2560%2Cc_limit/Brody-Passionate-Politics-Black-Panther.jpg";
    return view("test/cat", compact("cat"));
});

Route::get("/gallery/god", function () {
    $god = "https://upload.wikimedia.org/wikipedia/en/3/3c/Chris_Hemsworth_as_Thor.jpg";
    return view("test/god", compact("god"));
});

Route::get("/gallery/spider", function () {
    $spider = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvyeAKDa4Mzqhx9LnRoj-k56znrKbzgJYR1xP1AGd7kg&s=1024";
    return view("test/spider", compact("spider"));
});

Route::get('/about-me', function () {
    return view('about-me');
});