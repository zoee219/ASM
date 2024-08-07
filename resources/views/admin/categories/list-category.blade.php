@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại SP Admin
@endsection

@push('styles')

@endpush

@section('content')
<!-- Main -->
<div class="p-4" style="min-height: 800px;">
    @if(session('message'))
        <p class="text-danger">{{ session('message') }}</p>
    @endif
    <h4 class="text-primary mb-4">Danh sách thể loại</h4>
    <a href="{{ route('admin.categories.addCategory') }}" class="btn btn-info">Thêm mới</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên thể loại</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listCategory as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>
                    <a href="{{ route('admin.categories.updateCategory', $value->category_id) }}" class="btn btn-warning">Sửa</a>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $value->category_id  }}">Xóa</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $listCategory->links('pagination::bootstrap-5') }}
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Cảnh báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="formDelete">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <p class="text-danger">Bạn có chắc muốn xóa thể loại này?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-danger">Xác nhận xóa</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-bs-id');
            
            console.log('Button ID:', id); // Kiểm tra ID có đúng không
            
            let formDelete = document.getElementById('formDelete');
            console.log('Form Action Before:', formDelete.getAttribute('action')); // Kiểm tra URL trước khi thay đổi
            
            formDelete.setAttribute('action', '{{ route("admin.categories.deleteCategory") }}' + "?idcategory=" + id);
            
            console.log('Form Action After:', formDelete.getAttribute('action')); // Kiểm tra URL sau khi thay đổi
        });
    });
</script>
@endpush