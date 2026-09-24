<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบติดตามน้ำหนักร่างกาย</title>
    <!-- นำเข้า Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
    <!-- แถบเมนูด้านบน -->
    <nav class="navbar navbar-dark bg-success mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">📉 Weight Tracker</a>
        </div>
    </nav>

    <!-- พื้นที่เนื้อหาหลัก -->
    <div class="container">
        <!-- ตัวแปร $slot จะเป็นจุดที่คอยรับเนื้อหาจากหน้าอื่นๆ มาแสดงผลตรงนี้ครับ -->
        {{ $slot }}
    </div>

    <!-- นำเข้า Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>