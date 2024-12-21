@extends('layout')
@section('content')

<div class="body" style="margin-top:90px;">
    <h1 class="h3 mb-3"><strong>Danh sách đơn hàng của bạn</strong></h1>

<div class="">
  @if(session()->has('success'))
      <div class="alert alert-success mb-3">
          {{session('success')}}
      </div>
  @endif
</div>

<div class="card flex-fill">

  <table class="table table-hover my-0">
    <thead style="background-color: rgb(252, 177, 172)">
      <tr>
        <th>ID</th>
        <th>Phương thức tt</th>
        <th>Ngày đặt</th>
        <th>Ngày giao dự kiến</th>
        <th>Trạng thái</th>
        <th>Địa chỉ giao hàng</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody style="background-color: rgb(254, 243, 242)">
      @foreach($orders as $order)
      <tr>
        <td>{{$order->id_dathang}}</td>

        @if ($order->phuongthucthanhtoan == "COD")
          <td class="d-none d-xl-table-cell"><div class="badge bg-secondary text-white">{{$order->phuongthucthanhtoan}}</div></td>
        @elseif ($order->phuongthucthanhtoan == "VNPAY")
          <td class="d-none d-xl-table-cell"><div class="badge bg-primary text-white">{{$order->phuongthucthanhtoan}}</div></td>
        @else
        <td class="d-none d-xl-table-cell">{{$order->phuongthucthanhtoan}}</td>
        @endif

        <td class="d-none d-xl-table-cell">{{$order->ngaydathang}}</td>
          @if ($order->ngaygiaohang)
            <td class="d-none d-xl-table-cell">{{ date('d/m/Y', strtotime($order->ngaygiaohang)) }}</td>
          @else
            <td></td>
          @endif
        <td>
          @if($order->trangthai == 'đang xử lý')
            <span class="badge bg-primary text-white">{{$order->trangthai}}</span>
          @elseif ($order->trangthai == 'Chờ lấy hàng')
            <span class="badge bg-warning text-white">{{$order->trangthai}}</span>
          @elseif ($order->trangthai == 'Đang giao hàng')
            <span class="badge bg-success text-white">{{$order->trangthai}}</span>
          @elseif ($order->trangthai == 'Giao thành công')
            <span class="badge bg-success text-white">{{$order->trangthai}}</span>
          @else
            <span class="badge bg-danger text-white">{{$order->trangthai}}</span>
          @endif
        </td>
        <td class="d-none d-md-table-cell">{{$order->diachigiaohang}}</td>
        <td class="d-none d-md-table-cell"><a href="{{ route('donhang.edit', ['id' => $order->id_dathang]) }}" class="btn btn-primary" style="background-color: rgb(219, 136, 130)">Xem đơn hàng</a></td>
      </tr>
      <tr>
      @endforeach
    </tbody>
  </table>

</div>
</div>

@endsection