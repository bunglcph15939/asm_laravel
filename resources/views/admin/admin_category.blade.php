@extends('layout_admin.main')
@section('content-title','Quản trị Danh mục')
@section('content')
<a class="btn btn-success m-2" href="{{route('admin.add_category')}}">Thêm mới </a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Số lượng sản phẩm</th>
                <th colspan="2">Chức năng</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($category as $item)
           <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->products->count()}}</td>
            {{-- <td>{{$item->product->count()}}</td> --}}
            <td>
                <form action="{{route('admin.xoa_cat',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"  class="btn btn-danger">Xóa</button>
            </form>
           </td>
           <td>

                <a href="{{route('admin.sua_cat', $item->id)}}" class="btn btn-success">Sửa</a>
            </td>
        </tr>
           @endforeach

        </tbody>
    </table>

@endsection
