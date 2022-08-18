@extends('layout_admin.main')
@section('content-title','Danh sách User')
@section('content')
<a class="btn btn-success m-2" href="{{route('dangnhap.register')}}">Thêm mới</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>MÃ tài khoản</th>
            <th>Email</th>
            <th>Trạng thái</th>
            <th>ảnh</th>
            <th>Quyền</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>
                <form action="{{route('admin.user.fix_status',$item->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    @if ($item->status==1) <button class="btn btn-danger">Hủy kích hoạt</button>
                        @else <button class="btn btn-success">kích hoạt</button>
                    @endif


            </form>
            </td>

            <td><img src="{{ asset($item->avatar)}}" width="50px" alt=""></td>
            <td>{{$item->role==0 ?'Giáo viên' :'Sinh viên'}}</td>
            <td>




                 <form action="{{route('admin.user.sua_quyen',$item->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    @if ($item->role==1) <button class="btn btn-danger">Hủy quyền</button>
                        @else <button class="btn btn-success">Cấp quyền</button>
                    @endif


            </form>

            </td>

        </tr>


        @endforeach

    </tbody>

</table>
@endsection
