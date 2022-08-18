@extends('layout_admin.main')
@section('content-title','Chỉnh sửa sản phẩm')
@section('content')
<form action="{{ Route('admin.create_product',isset($product)? $product->id:'') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($product))
    @method('PUT')
    @endif
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" value="{{isset($product)? $product->name : old('name')}}">
    </div>

    @error('name')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror


    <div class="form-group">
        <label for="">Category</label>
        <select name="category_id" class="form-control">
            @foreach ($category as $item)
            <option   value='{{$item->id}}'>{{$item->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="text" class="form-control" name="price" value="{{isset($product)? $product->price : old('price')}}">
    </div>

    @error('price')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea name="description" id="editor" class="form-control" value="">{{isset($product)? $product->price : old('description')}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control @error('image') is-invalid  @enderror" name="image"  >
        @error('image')
            <span class="text-red">{{$message}}</span> </br>
        @enderror
    </div>

    @error('description')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="form-group">
        <label for="">color</label>
        <select name="color" class="form-control">
            {{isset($product) ? `<option value=$product->color>$product->color</option>` :'' }}
            <option value="1">Đỏ</option>
            <option value="2">Đen</option>
            <option value="3">Trắng</option>
        </select>
    </div>


    <div class="form-group">
        <label for="">Size</label>
        <select name="size" class="form-control">
            <option value="1">Nhỏ</option>
            <option value="2">Vừa</option>
            <option value="3">To</option>
        </select>
    </div>





    <div style="margin-bottom:20px">
        <button type="submit" class="btn btn-primary">
            Create
        </button>
        <a href="{{ Route('admin.show') }}" class="btn btn-info">Back</a>
    </div>

</form>



@endsection
