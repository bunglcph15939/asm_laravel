@extends('layout_admin.main')
@section('content-title','Quản trị Danh mục')
@section('content')
<form action="{{route('admin.add_category',isset($category)? $category->id:'')}}" method="post">

    @csrf
    @if (isset($category))
    @method('PUT')
    @endif
    <div class="form-group">
        <label for="">Tên Danh mục</label>
        <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" value="{{isset($category) ? $category->name :old('name') }}"  placeholder="Nhập tên danh mục">
        @error('name')
            <span class="text-red">{{$message}}</span> </br>
        @enderror
        <button class="btn btn-success mt-2">
            @if (isset($category))
                Lưu Sửa
            @else
                Tạo mới
            @endif
        </button>
      </div>
</form>

@endsection
