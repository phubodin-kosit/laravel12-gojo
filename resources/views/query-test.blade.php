<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- นำเข้า Bootstrap CSS เพื่อให้หน้าเว็บสวยงาม -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        /* เพิ่มปุ่มลอย */
        .floating-btn {
            position: fixed; 
            bottom: 50px; 
            right: 50px; 
            z-index: 9999; /* ให้ปุ่มลอยอยู่เหนือทุกวัตถุ */ 
            background-color: #007bff;
            line-height: 1; 
            color: white; 
            font-size: 50px; 
            font-weight: 900;
            border-radius: 50%; 
            width: 80px; 
            height: 80px; 
            display: flex;
            align-items: center; 
            justify-content: center; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            text-decoration: none;
        }
        .floating-btn:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <!-- หัวข้อหน้าเว็บ -->
        <h2 class="text-center fw-bold mb-4">Product List</h2>

        <!-- เริ่มต้นการสร้าง Grid แบบ Bootstrap -->
        <div class="row">
            <!-- วนลูปตัวแปร $products ที่ส่งมาจาก web.php -->
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <!-- แสดงรูปภาพสินค้า (ถ้ามี) -->
                        @if($product->image)
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <!-- ถ้ารูปไม่มี ให้แสดงพื้นที่สีเทาแทนชั่วคราว -->
                            <div class="bg-secondary text-white text-center py-5">No Image</div>
                        @endif
                        
                        <div class="card-body">
                            <!-- ชื่อสินค้า -->
                            <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                            <!-- รายละเอียดสินค้า -->
                            <p class="card-text text-muted">{{ $product->description }}</p>
                            <!-- ราคา -->
                            <p class="text-primary fw-bold">${{ $product->price }}</p>
                            
                            <!-- ปุ่ม Add to Cart -->
                            <button class="btn btn-primary w-100 mt-auto">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ปุ่ม + ที่ลอยอยู่ -->
    <a href="{{ route('product.form') }}" class="floating-btn pb-2"> + </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslKleN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>