@extends('layout')
@section('content')

<form class="body" action="{{route('dathang')}}" method="POST" id="checkout" enctype="multipart/form-data" style="margin-top: 80px;">
    @csrf

    @foreach ($showusers as $key => $showuser)
        @if ($key == 0)
        <div class="mb-3 bg-light p-3 my-3" style="background-color: #f8d6d6 !important;">
            <h3>Thông tin khách hàng</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="hoten" class="form-label" style="font-size:22px;">Họ và tên:</label>
                                <input type="text" style="font-size:18px;" name="hoten" id="hoten" value="{{ old('hoten', $showuser->hoten ?? '') }}" 
                                       class="form-control" placeholder="Nhập họ và tên" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label" style="font-size:22px;">Email:</label>
                                <input type="email" style="font-size:18px;" name="email" id="email" value="{{ old('email', $showuser->email ?? '') }}" 
                                       class="form-control" placeholder="Nhập email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sdt" class="form-label" style="font-size:22px;">Số điện thoại:</label>
                                <input type="tel" style="font-size:18px;" name="sdt" id="sdt" value="{{ old('sdt', $showuser->sdt ?? '') }}" 
                                       class="form-control" placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="diachi" class="form-label" style="font-size:22px;">Địa chỉ giao hàng:</label>
                                <input type="text" style="font-size:18px;" name="diachi" id="diachi" value="{{ old('diachi', $showuser->diachi ?? '') }}" 
                                       class="form-control" placeholder="Nhập địa chỉ giao hàng" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="note" class="form-label" style="font-size:22px;">Ghi chú:</label>
                                <textarea name="note" id="note" class="form-control" placeholder="Nhập ghi chú nếu có" rows="2" style="font-size:18px;"></textarea>
                            </div>
                        </div>
            
        </div>
        @endif
    @endforeach

    <table id="cart" class="table table-hover table-condensed">
        <thead style="background-color: #f99494;">
        <tr>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá gốc</th>
            <th>Giảm giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        </thead>
            <tbody style="background-color: #fcd8d8;">
            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['giakhuyenmai'] * $details['quantity'] @endphp

                    <tr data-id="{{ $id }}">
                        <td><img src="{{ asset($details['anhsp']) }}" width="100" height="100" class="img-responsive"/></td>
                        <td>
                            <div>{{ $details['tensp'] }}</div>
                        </td>  
                        <td data-th="Price">{{ $details['giasp'] }}</td>
                        <td data-th="Price">{{ $details['giamgia'] }}%</td>
                        <td data-th="Quantity" class="quantity-input">
                            {{$details['quantity']}}
                        </td>

                        <td data-th="" class="text-center">{{ $details['giakhuyenmai'] * $details['quantity'] }}đ</td>
                    </tr>

                    <input type="hidden" name="id_sanpham" value="{{$details['id_sanpham']}}">
                    <input type="hidden" name="tensp" value="{{ $details['tensp'] }}">
                    <input type="hidden" name="giatien" value="{{$details['giasp']}}">
                    <input type="hidden" name="giamgia" value="{{$details['giamgia']}}">
                    <input type="hidden" name="giakhuyenmai" value="{{$details['giakhuyenmai']}}">
                    <input type="hidden" name="soluong" value="{{$details['quantity']}}">

                @endforeach
            @endif
        </tbody>

        <tfoot>

            <tr>
                <td colspan="6" class="bg-light">
                    <div  class="d-flex justify-content-between">
                        <h4 class="pttt">Phương thức thanh toán</h4>
                        <div>
                            <div class="d-flex align-items-center p-2">
                                <input type="radio" id="cod" name="redirect" value="COD" checked>
                                <label for="cod" style="margin-bottom: 1px; margin-left: 5px; font-size: 18px;" class="paymentContent font-weight-bold text-xl p">
                                    Trả tiền khi nhận hàng (COD)
                                </label>
                            </div>

                            <div class="d-flex align-items-center p-2">
                                <input type="radio" id="vnpay" name="redirect" value="VNPAY">
                                <label for="vnpay" style="margin-bottom: 1px; margin-left: 5px; font-size: 18px;" class="paymentContent font-weight-bold text-xl p">
                                    Thanh toán online (VNPAY)
                                </label>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
            <td colspan="6" class="text-right">
                <h4 class="d-flex justify-content-end align-items-center">
                    Tổng thanh toán: &nbsp;<div class="text-danger" style="font-size: 36px;">{{ number_format($total, 0, ',', '.') }}đ</div>
                    <input type="hidden" name="tongtien" value="{{$total}}">
                </h4>
            </td>
            </tr>

            <tr>
                <td colspan="6" class="text-right">
                    <a href="{{ url('/cart') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Quay lại giỏ hàng</a>
                    <button type="submit" class="btn btn-success text-white">Đặt hàng</button>
                </td>
            </tr>

        </tfoot>
        </table>
</form>

<script>
    //cod
    $('#cod').click(function () {
        // $('#cod').attr('value', 'COD');
        $('#checkout').attr('action', "{{route('dathang')}}");
    });

    //chuyen khoan vnpay
    $('#vnpay').click(function () {
        // $('#vnpay').attr('value', 'VNPAY');
        $('#checkout').attr('action', "{{route('vnpay')}}");

    });

</script>

@endsection

