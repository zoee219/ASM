@extends('admin.layouts.default')

@section('title')
    @parent
    Thêm mới thể loại
@endsection

@push('styles')

@endpush

@section('content')
<div class="p-4" style="min-height: 800px;">
    <form action="{{ route('admin.categories.addPostCategory') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nameTL">Tên thể loại</label>
            <input type="text" name="nameTL" id="nameTL" class="form-control">
        </div>
        <button class="btn btn-success">Thêm mới</button>
    </form>
</div>
@endsection

@push('scripts')

@endpush