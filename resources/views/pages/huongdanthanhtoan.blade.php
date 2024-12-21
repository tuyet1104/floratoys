@extends('layouts.master')
@section('content')

<div class="content-section">
    <div class="payment-guide">
        <h1><i class="fas fa-credit-card" style="color: #8a5252; font-size: 40px;"></i> HƯỚNG DẪN THANH TOÁN</h1>  
        <ul class="no-bullet">
            <li>
                <strong><i class="fas fa-shopping-cart" style="color: #8a5252;"></i> Chọn sản phẩm/dịch vụ để thanh toán</strong>
                <ul>
                    <li><i class="fas fa-list-alt" style="color: #616161";></i> Xem giỏ hàng hoặc danh sách sản phẩm đã chọn.</li>
                    <li><i class="fas fa-check-circle" style="color: #616161"></i> Kiểm tra số lượng, giá tiền, và các thông tin liên quan (ví dụ: khuyến mãi, giảm giá).</li>
                    <li><i class="fas fa-arrow-right" style="color: #616161"></i> Nhấn nút "Thanh toán" hoặc "Đặt hàng" để chuyển sang bước tiếp theo.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-user" style="color: #8a5252;;"></i> Nhập thông tin người nhận</strong>
                <ul>
                    <li><i class="fas fa-user-circle" style="color:rgb(237, 169, 120);"></i> Điền đầy đủ thông tin bao gồm:</li>
                    <ul>
                        <li><i class="fas fa-id-badge" style="color: #616161"></i> Tên người nhận</li>
                        <li><i class="fas fa-phone-alt" style="color: #616161"></i> Số điện thoại</li>
                        <li><i class="fas fa-map-marker-alt" style="color: #616161"></i> Địa chỉ giao hàng</li>
                        <li><i class="fas fa-envelope" style="color: #616161"></i> Email (để nhận hóa đơn hoặc thông báo).</li>
                    </ul>
                    <li><i class="fas fa-check" style="color:rgb(237, 169, 120);"></i> Xác nhận tính chính xác của thông tin.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-wallet" style="color: #8a5252;;"></i> Chọn phương thức thanh toán</strong>
                <ul>
                    <li><i class="fas fa-money-bill-wave" style="color: #616161"></i> Thanh toán khi nhận hàng (COD): Trả tiền mặt cho nhân viên giao hàng.</li>
                    <li><i class="fas fa-credit-card" style="color: #616161"></i> Thanh toán qua thẻ ngân hàng:
                        <ul>
                            <li><i class="fas fa-keyboard" style="color: #616161"></i> Nhập thông tin thẻ (số thẻ, ngày hết hạn, mã CVV).</li>
                        </ul>
                    </li>
                    <li><i class="fas fa-mobile-alt" style="color: #616161"></i> Thanh toán qua ví điện tử (Momo, ZaloPay, ShopeePay...):
                        <ul>
                            <li><i class="fas fa-qrcode" style="color: #616161"></i> Quét mã QR hoặc đăng nhập để xác nhận thanh toán.</li>
                        </ul>
                    </li>
                    <li><i class="fas fa-university" style="color: #616161"></i> Chuyển khoản ngân hàng:
                        <ul>
                            <li><i class="fas fa-info-circle" style="color: #616161"></i> Ghi lại số tài khoản và nội dung chuyển khoản được cung cấp.</li>
                        </ul>
                    </li>
                    <li><i class="fas fa-globe" style="color: #616161"></i> Thanh toán quốc tế (Visa, Mastercard, PayPal):
                        <ul>
                            <li><i class="fas fa-info-circle" style="color: #616161"></i> Cung cấp thông tin cần thiết theo hướng dẫn.</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-check-double" style="color: #8a5252;"></i> Xác nhận và hoàn tất thanh toán</strong>
                <ul>
                    <li><i class="fas fa-box" style="color:rgb(237, 169, 120);"></i> Kiểm tra lại toàn bộ thông tin đơn hàng, bao gồm:</li>
                    <ul>
                        <li><i class="fas fa-list-alt" style="color: #616161"></i> Danh sách sản phẩm</li>
                        <li><i class="fas fa-wallet" style="color: #616161"></i> Phương thức thanh toán</li>
                        <li><i class="fas fa-money-check-alt" style="color: #616161"></i> Tổng số tiền cần thanh toán (bao gồm phí giao hàng hoặc thuế nếu có).</li>
                    </ul>
                    <li><i class="fas fa-hand-point-right" style="color:rgb(237, 169, 120);"></i> Nhấn nút "Xác nhận thanh toán".</li>
                    <li><i class="fas fa-envelope-open-text" style="color:rgb(237, 169, 120);"></i> Hệ thống sẽ hiển thị thông báo thành công hoặc gửi email xác nhận.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-truck" style="color: #8a5252;"></i> Theo dõi trạng thái đơn hàng</strong>
                <ul>
                    <li><i class="fas fa-map" style="color: #616161"></i> Theo dõi trạng thái giao hàng qua website/app.</li>
                    <li><i class="fas fa-envelope" style="color: #616161"></i> Kiểm tra email để biết chi tiết đơn hàng và hóa đơn thanh toán.</li>
                    <li><i class="fas fa-headset" style="color: #616161"></i> Liên hệ bộ phận chăm sóc khách hàng nếu có vấn đề phát sinh.</li>
                </ul>
            </li>
        </ul>
    </div>
</div>


@endsection