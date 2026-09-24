<x-weight>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>ประวัติน้ำหนัก</h4>
        <a href="{{ route('weight.create') }}" class="btn btn-primary">+ เพิ่มข้อมูล</a>
    </div>

    <!-- แสดงข้อความแจ้งเตือนเมื่อบันทึก/แก้ไข/ลบ สำเร็จ -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <!-- ฝั่งซ้าย: ตารางข้อมูล -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>วันที่</th>
                                <th>น้ำหนัก (กก.)</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($weights as $item)
                            <tr>
                                <td>{{ $item->record_date }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>
                                    <a href="{{ route('weight.edit', $item->id) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                    <!-- ฟอร์มสำหรับปุ่มลบ -->
                                    <form action="{{ route('weight.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('ต้องการลบข้อมูลนี้หรือไม่?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">ลบ</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted">ยังไม่มีข้อมูลน้ำหนัก</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ฝั่งขวา: พื้นที่แสดง Google Chart -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div id="curve_chart" style="width: 100%; height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- โค้ดสร้าง Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['วันที่', 'น้ำหนัก'],
          // วนลูปดึงข้อมูลจาก Controller มาใส่ในกราฟ
          @foreach($weights as $item)
            ['{{ $item->record_date }}', {{ $item->weight }}],
          @endforeach
        ]);

        var options = {
          title: 'แนวโน้มน้ำหนักร่างกาย',
          curveType: 'function',
          legend: { position: 'bottom' },
          colors: ['#198754'] // เส้นกราฟสีเขียว
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>
</x-weight>