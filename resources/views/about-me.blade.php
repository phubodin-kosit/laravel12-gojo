<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #2c2f33; 
            color: white; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
        .profile-card {
            background-color: #3b3f45; 
            border-radius: 20px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
            text-align: center;
        }
        .profile-img { 
            width: 150px; 
            height: 150px; 
            object-fit: cover; 
            border-radius: 50%; 
            border: 4px solid #fff; 
            margin-bottom: 20px;
        }
        .section-title {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        /* ปรับแต่งปุ่มใหม่ให้มีไล่สี */
        .work-btn {
            background: linear-gradient(to bottom, #b8d8ff, #6265d6); /* ไล่สีฟ้าไปม่วงตามรูปตัวอย่าง */
            color: white;
            border-radius: 15px;
            text-decoration: none;
            display: block;
            overflow: hidden; /* ให้รูปภาพไม่ล้นขอบโค้งของปุ่ม */
            transition: 0.3s;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .work-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.5);
            color: white;
        }
        /* ตั้งค่ารูปภาพหน้าปกในปุ่ม */
        .btn-img {
            width: 100%;
            height: 130px; /* ปรับความสูงของรูปหน้าปกได้ตรงนี้ */
            object-fit: cover;
        }
        /* ตั้งค่าข้อความในปุ่ม */
        .btn-text {
            padding: 15px;
            font-weight: bold;
            text-align: center;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.6); /* เพิ่มเงาให้ตัวหนังสืออ่านง่ายขึ้น */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ข้อมูลส่วนบุคคล -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-card">
                    <!-- ลิงก์รูปโปรไฟล์ของคุณ -->
                    <img src="https://i.pinimg.com/736x/1c/48/8f/1c488f5b662c7c7d9f8832774c6f01eb.jpg" alt="My Profile" class="profile-img">
                    <h2>ภูบดินทร์ โฆสิต</h2>
                    <p class="text-light fs-5">รหัสนักศึกษา: 68122420003</p>
                </div>
            </div>
        </div>

        <!-- รวมลิงก์ผลงาน -->
        <h3 class="section-title">งานที่เคยทำ</h3>
        <div class="row justify-content-center">
            <!-- ปุ่มที่ 1 -->
            <div class="col-md-4">
                <a href="/gallery" class="work-btn">
                    <img src="https://i.pinimg.com/736x/61/03/65/61036526c9edd3606d8abcc999ef97fe.jpg" alt="Hero" class="btn-img">
                    <div class="btn-text">EP02 Hero Avengers</div>
                </a>
            </div>
            <!-- ปุ่มที่ 2 -->
            <div class="col-md-4">
                <a href="/active/index" class="work-btn">
                    <img src="https://i.pinimg.com/736x/5b/9c/cd/5b9ccdf5074c448da633d4a5ae55ac74.jpg" alt="Active" class="btn-img">
                    <div class="btn-text">EP03 Active Bootstrap</div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- ปุ่มที่ 3 -->
            <div class="col-md-4">
                <a href="/weight" class="work-btn">
                    <img src="https://i.pinimg.com/1200x/46/47/d5/4647d534a7d15e1a763a22d8335fef90.jpg" alt="Weight" class="btn-img">
                    <div class="btn-text">EP07 Weight Tracker</div>
                </a>
            </div>
            <!-- ปุ่มที่ 4 -->
            <div class="col-md-4">
                <a href="/login" class="work-btn">
                    <img src="https://i.pinimg.com/736x/5f/b1/70/5fb1705c3f54627b3705457a3ad7edfd.jpg" alt="Login" class="btn-img">
                    <div class="btn-text">EP08 Auth (Login)</div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>