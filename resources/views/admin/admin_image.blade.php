@extends('layout_admin.main')
@section('content-title','Danh sách sản phẩm')
@section('content')
<a href="{{route('admin.image.create')}}" class="btn btn-success">Thêm mới</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($product))
        @foreach ($image as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td><img width="100px" src="{{ asset('images/product/'.$item->name)}}" alt=""></td>
            <td>{{$item->product->name}}</td>
            <td>
                <form action="{{route('admin.image.delete',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"  class="btn btn-danger">Xóa</button>
            </form>
           </td>
           <td>

                <a href="{{route('admin.image.form_edit_image', $item->id)}}" class="btn btn-success">Sửa</a>
            </td>
        </tr>
        @endforeach

        @else
        @foreach ($image as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td><img width="100px" src="{{ asset('images/product/'.$item->name)}}" alt=""></td>
            <td>{{$item->product->name}}</td>
            <td>
                <form action="{{route('admin.image.delete',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"  class="btn btn-danger">Xóa</button>
            </form>
           </td>
           <td>

                <a href="{{route('admin.image.form_edit_image', $item->id)}}" class="btn btn-success">Sửa</a>
            </td>
        </tr>
        @endforeach
        @endif



    </tbody>
</table>
@endsection
