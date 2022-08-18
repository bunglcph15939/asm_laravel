@extends('layout_admin.main')
@section('content-title','Danh sách sản phẩm')
@section('content')

<a href="{{route('admin.create_form_product')}}" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>image</th>
                <th>Description</th>
                <th>Color</th>
                <th>Size</th>
                <th>Ảnh</th>
                <th>Danh mục</th>
                <th colspan="2">Chức năng</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td><img src="{{asset('images/product/'.$item->thumbnail->name)}}" width='100px' alt=""></td>
                <td>{{$item->description}}</td>
                <td>{{$item->color}}</td>
                <td>{{$item->size}}</td>
                <td><a href="{{route('admin.show_image',$item->id)}}">Ảnh</a></td>
               <td>{{$item->category->name}}</td>
               <td>
                <form action="{{route('admin.delete_pro',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"  class="btn btn-danger">Xóa</button>
            </form>
           </td>
           <td>

                <a href="{{route('admin.formEdit_pro', $item->id)}}" class="btn btn-success">Sửa</a>
            </td>
            </tr>
            @endforeach


        </tbody>
    </table>
@endsection
