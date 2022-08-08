@extends('layout_admin.main')
@section('content-title','Quản trị Danh mục')
@section('content')
<form action="{{route('admin.image.create_image',isset($image)? $image->id:'')}}" method="post" enctype="multipart/form-data">

    @csrf
    @if (isset($image))
    @method('PUT')
    @endif
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control @error('name') is-invalid  @enderror" name="name"  >
        @error('name')
            <span class="text-red">{{$message}}</span> </br>
        @enderror

        @if (isset($image))
        <img src="{{ asset('images/product/'.$image->name)}}" width="200px" alt="">

        @endif
        <div class="form-group">
            <label for="">Sản phẩm</label>

            @if (isset($image))
            <select name="id_product" class="form-control">
                @foreach ($product as $item)

                <option @if($item->id==$image->id_product) selected @endif   value='{{$item->id}}'>{{$item->name}}</option>
                @endforeach

            </select>
            @else
            <select name="id_product" class="form-control">
                @foreach ($product as $item)
                <option   value='{{$item->id}}'>{{$item->name}}</option>
                @endforeach

            </select>
            @endif

        </div>
        <button class="btn btn-success mt-2">
            @if (isset($image))
                Lưu Sửa
            @else
                Tạo mới
            @endif
        </button>
      </div>
</form>
@endsection
