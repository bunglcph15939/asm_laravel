@extends('layout_admin.main')
@section('content-title','Đơn hàng')
@section('content')
  <table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($detail as $item)
        <tr>
            <td scope="row"> {{$loop->iteration + ($detail->currentPage() -1) * $detail->perPage()}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->total}}</td>

        </tr>
        @endforeach


    </tbody>
  </table>
  {{$detail->links()}}
@endsection
