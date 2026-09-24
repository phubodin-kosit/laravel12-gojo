<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <!-- เรียกใช้ Bootstrap เพื่อความสวยงาม -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #2c2f33; /* สีพื้นหลังเทาเข้ม */
            color: white; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
        .profile-card {
            background-color: #3b3f45; /* สีพื้นหลังกล่องโปรไฟล์ */
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
        .work-btn {
            background-color: #4f545c; /* สีปุ่มผลงาน */
            color: white;
            border-radius: 15px;
            padding: 20px;
            text-decoration: none;
            display: block;
            text-align: center;
            font-weight: bold;
            transition: 0.3s;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .work-btn:hover {
            background-color: #7289da; /* สีปุ่มตอนเอาเมาส์ชี้ */
            color: white;
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ข้อมูลส่วนบุคคล -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-card">
                    <!-- ตรงนี้อย่าลืมเอาลิงก์รูปตัวเองมาใส่นะครับ -->
                    <img src="ใส่ลิงก์รูปหน้าตรงของคุณที่นี่" alt="My Profile" class="profile-img">
                    <h2>ภูบดินทร์ โฆสิต</h2>
                    <p class="text-light fs-5">รหัสนักศึกษา: 68122420003</p>
                </div>
            </div>
        </div>

        <!-- รวมลิงก์ผลงาน -->
        <h3 class="section-title">งานที่เคยทำ</h3>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/gallery" class="work-btn">EP02 Hero Avengers</a>
            </div>
            <div class="col-md-4">
                <a href="/active/index" class="work-btn">EP03 Active Bootstrap</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/weight" class="work-btn">EP07 Weight</a>
            </div>
            <div class="col-md-4">
                <a href="/login" class="work-btn">EP08 Auth (Login)</a>
            </div>
        </div>
    </div>
</body>
</html>