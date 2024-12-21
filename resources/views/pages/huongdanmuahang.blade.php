@extends('layouts.master')
@section('content')

<div class="content-section">
    <div class="guide-section">
        <h1><span style="font-size: 30px;" class="fas fa-gift"></span> HƯỚNG DẪN MUA HÀNG</h1>
        <ol>
            <li><span style="font-size: 20px;">🛒</span> <strong>Bước 1:</strong> Truy cập website và lựa chọn sản phẩm cần mua để mua hàng</li>
            <li>
                <span style="font-size: 20px;">🛍️</span> <strong>Bước 2:</strong> Click vào sản phẩm muốn mua, màn hình hiển thị ra pop-up với các lựa chọn sau:
                <ul>
                    <li><span style="font-size: 20px;">🛒</span> Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng</li>
                    <li><span style="font-size: 20px;">🛒</span> Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</li>
                    <li><span style="font-size: 20px;">💳</span> Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này: Bấm vào <strong>Đặt hàng và thanh toán</strong></li>
                </ul>
            </li>
            <li>
                <span style="font-size: 20px;">💼</span> <strong>Bước 3:</strong> Lựa chọn thông tin tài khoản thanh toán
                <ul>
                    <li><span style="font-size: 20px;">🔑</span> Nếu bạn đã có tài khoản, vui lòng nhập thông tin tài khoản đăng nhập</li>
                    <li><span style="font-size: 20px;">✍️</span> Nếu bạn chưa có tài khoản, vui lòng đăng ký tài khoản hoặc mua hàng không cần tài khoản</li>
                </ul>
            </li>
            <li><span style="font-size: 20px;">📦</span> <strong>Bước 4:</strong> Điền thông tin nhận đơn hàng, chọn hình thức thanh toán và vận chuyển</li>
            <li><span style="font-size: 20px;">✅</span> <strong>Bước 5:</strong> Xem lại thông tin đặt hàng, xác nhận và gửi đơn hàng</li>
        </ol>
        <p><span style="font-size: 20px;">😊</span> Sau khi nhận được đơn hàng, chúng tôi sẽ liên hệ lại để xác nhận thông tin. Trân trọng cảm ơn!</p>
    </div>
</div>


@endsection