<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายการสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">เพิ่มรายการสินค้า</h2>
        
        <!-- ส่วนนี้ไว้แสดงข้อความแจ้งเตือน Error เวลาเรากรอกข้อมูลไม่ครบ -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- แบบฟอร์มกรอกข้อมูล -->
        <form action="{{ route('product.submit') }}" method="POST" enctype="multipart/form-data">
            <!-- @csrf สำคัญมาก ป้องกันการโจมตีข้ามเว็บไซต์ ถ้าไม่ใส่จะ Error ส่งข้อมูลไม่ได้ -->
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">ชื่อสินค้า</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">รายละเอียดสินค้า</label>
                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">ราคา</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price') }}">
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">อัปโหลดรูปภาพ</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">บันทึกสินค้า</button>
        </form>
    </div>
</body>
</html>