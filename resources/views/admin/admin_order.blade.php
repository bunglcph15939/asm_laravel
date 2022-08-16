@extends('layout_admin.main')
@section('content-title','Đơn hàng')
@section('content')
  <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Total</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Action</th>
            <th>Ngày mua</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order as $item)
        <tr>
            <td scope="row">{{$loop->iteration + ($order->currentPage() -1) * $order->perPage()}}</td>
            <td><a href="{{route('admin.order.order_detail',$item->id)}}">{{$item->name}}</a></td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->total}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->status==0 ?'Đang xử lý' :'Thành công'}}</td>
            <td> <form action="{{route('admin.order.status',$item->id)}}" method="post">
                @method('PUT')
                @csrf
                @if ($item->status==1) <button class="btn btn-danger">Đang xử lý</button>
                    @else <button class="btn btn-success">Thành công</button>
                @endif


        </form></td>
            <td>{{$item->created_at}}</td>
        </tr>
        @endforeach


    </tbody>
  </table>
  {{$order->links()}}
@endsection
