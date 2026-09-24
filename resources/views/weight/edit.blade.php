<x-weight>
    <h4>แก้ไขข้อมูลน้ำหนัก</h4>
    <div class="card shadow-sm mt-3" style="max-width: 500px;">
        <div class="card-body">
            <form action="{{ route('weight.update', $weight->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">วันที่บันทึก</label>
                    <input type="date" name="record_date" class="form-control" value="{{ old('record_date', $weight->record_date) }}">
                    @error('record_date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">น้ำหนัก (กิโลกรัม)</label>
                    <input type="number" step="0.01" name="weight" class="form-control" value="{{ old('weight', $weight->weight) }}">
                    @error('weight') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-warning">อัปเดตข้อมูล</button>
                <a href="{{ route('weight.index') }}" class="btn btn-secondary">ยกเลิก</a>
            </form>
        </div>
    </div>
</x-weight>