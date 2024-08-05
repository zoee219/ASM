<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin người dùng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Cập nhật thông tin người dùng</h2>
        <form action="{{ route('users.updatePostUsers') }}" method="post">
            @csrf
            <input type="hidden" value="{{ $user->id }}" name="userId">
            <div class="mb-3">
                <label for="name" class="form-label">Tên User:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email User:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <label for="phongban" class="form-label">Phòng ban:</label>
                <select class="form-select" id="phongban" name="phongban">
                    @foreach($phongBan as $value)
                        <option value="{{ $value->id }}" {{ $user->phongban_id == $value->id ? 'selected' : '' }}>
                            {{ $value->ten_donvi }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi:</label>
                <input type="text" class="form-control" id="tuoi" name="tuoi" value="{{ $user->tuoi }}">
            </div>
            <div class="mb-3">
                <label for="ngaynghi" class="form-label">Số ngày nghỉ:</label>
                <input type="text" class="form-control" id="ngaynghi" name="ngaynghi" value="{{ $user->songaynghi }}">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>

    <!-- Bootstrap JS và các script khác cần thiết -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
