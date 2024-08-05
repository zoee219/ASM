<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .table {
            margin-top: 20px;
        }
        .name-column {
            color: #007bff; /* Màu xanh */
        }
        .email-column {
            color: #28a745; /* Màu xanh lá */
        }
        .department-column {
            color: #dc3545; /* Màu đỏ */
        }
        .actions-column {
            color: #ffc107; /* Màu vàng */
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('users.addUsers') }}" class="btn btn-primary mb-3">Thêm mới</a>
        <h2>Danh sách User</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="name-column">Tên</th>
                    <th class="email-column">Email</th>
                    <th class="department-column">Phòng Ban</th>
                    <th class="actions-column">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUsers as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td class="name-column">{{ $user->name }}</td>
                    <td class="email-column">{{ $user->email }}</td>
                    <td class="department-column">{{ $user->ten_donvi }}</td>
                    <td class="actions-column">
                        <a href="{{ route('users.updateUser', $user->id) }}" class="btn btn-sm btn-info">Sửa</a>
                        <a href="{{ route('users.deleteUser', $user->id) }}" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                  </tr>  
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS và các script khác cần thiết -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
