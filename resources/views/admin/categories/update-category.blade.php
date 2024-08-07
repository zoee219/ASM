@extends('admin.layouts.default')

@section('title')
    @parent
    Chỉnh sửa thể loại
@endsection

@push('styles')

@endpush

@section('content')
<div class="p-4" style="min-height: 800px;">
    <form action="{{ route('admin.categories.updatePatchCategory', $category->category_id) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="nameTL">Tên thể loại</label>
            <input type="text" name="nameTL" id="nameTL" class="form-control" value="{{ $category->name }}">
        </div>
        <button class="btn btn-success">Chỉnh Sửa</button>
    </form>
</div>
@endsection

@push('scripts')

@endpush