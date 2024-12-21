@extends('layouts.master')
@section('content')

<div class="content-section">
    <div class="delivery-process">
        <h1><i class="fas fa-truck" style="color: #8a5252;;"></i> HƯỚNG DẪN GIAO NHẬN</h1>
        <ol>
            <li>
                <strong><i class="fas fa-search" style="color: #4CAF50;"></i> Bước 1:</strong> Kiểm tra thông tin đơn hàng trước khi giao
                <ul>
                    <li>Xác nhận thông tin đơn hàng:
                        <ul>
                            <li><i class="fas fa-box"></i> Sản phẩm/dịch vụ cần giao.</li>
                            <li><i class="fas fa-user"></i> Tên và số điện thoại người nhận.</li>
                            <li><i class="fas fa-map-marker-alt"></i> Địa chỉ giao hàng.</li>
                        </ul>
                    </li>
                    <li>Kiểm tra trạng thái thanh toán:
                        <ul>
                            <li><i class="fas fa-credit-card"></i> Đã thanh toán trước hay thanh toán khi nhận hàng (COD).</li>
                        </ul>
                    </li>
                    <li>Đóng gói hàng hóa:
                        <ul>
                            <li><i class="fas fa-box-open"></i> Sử dụng bao bì phù hợp, đảm bảo an toàn cho sản phẩm trong quá trình vận chuyển.</li>
                            <li><i class="fas fa-tag"></i> Dán thông tin người nhận lên gói hàng (nếu cần).</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-shipping-fast" style="color: #FF9800;"></i> Bước 2:</strong> Lựa chọn phương thức vận chuyển
                <ul>
                    <li><i class="fas fa-user-friends"></i> Nhân viên giao hàng nội bộ: Phù hợp với doanh nghiệp nhỏ, giao hàng trong phạm vi gần.</li>
                    <li>Đơn vị vận chuyển:
                        <ul>
                            <li><i class="fas fa-truck-moving"></i> Lựa chọn đối tác vận chuyển như Giao Hàng Nhanh, Giao Hàng Tiết Kiệm, Viettel Post…</li>
                            <li><i class="fas fa-file-invoice"></i> Đăng ký và tạo đơn giao hàng trên hệ thống của đối tác.</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-route" style="color: #673AB7;"></i> Bước 3:</strong> Quy trình giao hàng
                <ul>
                    <li>Nhân viên hoặc đối tác giao hàng thực hiện giao:
                        <ul>
                            <li><i class="fas fa-phone-alt"></i> Liên hệ với người nhận trước khi đến (gọi điện hoặc nhắn tin).</li>
                            <li><i class="fas fa-map-pin"></i> Xác nhận đúng địa chỉ và thời gian giao hàng.</li>
                        </ul>
                    </li>
                    <li>Khi giao hàng:
                        <ul>
                            <li><i class="fas fa-box-check"></i> Giao đúng sản phẩm theo đơn hàng.</li>
                            <li><i class="fas fa-hand-holding-usd"></i> Đối với COD, thu tiền từ khách hàng và ghi nhận vào hệ thống.</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-clipboard-check" style="color: #2196F3;"></i> Bước 4:</strong> Khi nhận hàng (dành cho khách hàng)
                <ul>
                    <li>Kiểm tra gói hàng:
                        <ul>
                            <li><i class="fas fa-cube"></i> Xác nhận sản phẩm đúng với đơn đặt hàng (số lượng, mẫu mã).</li>
                            <li><i class="fas fa-exclamation-circle"></i> Kiểm tra tình trạng sản phẩm (không bị hư hỏng, lỗi).</li>
                        </ul>
                    </li>
                    <li><i class="fas fa-signature"></i> Ký xác nhận giao nhận (nếu yêu cầu).</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-tools" style="color: #FF5722;"></i> Bước 5:</strong> Xử lý các vấn đề phát sinh
                <ul>
                    <li>Nếu khách hàng:
                        <ul>
                            <li><i class="fas fa-times-circle"></i> Không nhận được hàng hoặc giao nhầm sản phẩm, liên hệ ngay bộ phận hỗ trợ khách hàng.</li>
                            <li><i class="fas fa-exchange-alt"></i> Gửi yêu cầu đổi trả nếu sản phẩm có lỗi.</li>
                        </ul>
                    </li>
                    <li>Nếu nhân viên giao hàng:
                        <ul>
                            <li><i class="fas fa-phone-slash"></i> Không liên lạc được với người nhận, liên hệ người gửi để xử lý.</li>
                            <li><i class="fas fa-file-alt"></i> Ghi nhận các tình huống giao hàng không thành công vào hệ thống.</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-flag-checkered" style="color: #009688;"></i> Bước 6:</strong> Hoàn tất quy trình giao nhận
                <ul>
                    <li>Cập nhật trạng thái đơn hàng:
                        <ul>
                            <li><i class="fas fa-check"></i> Thành công: Đơn hàng đã giao thành công và nhận được phản hồi từ khách hàng.</li>
                            <li><i class="fas fa-times"></i> Thất bại: Đơn hàng giao không thành công, chuyển hoàn hoặc xử lý khác.</li>
                        </ul>
                    </li>
                    <li>Đối soát thanh toán:
                        <ul>
                            <li><i class="fas fa-hand-holding-usd"></i> Với đơn COD, nộp lại tiền cho bộ phận tài chính.</li>
                            <li><i class="fas fa-credit-card"></i> Với đơn đã thanh toán, xác nhận trên hệ thống.</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ol>
        <p><strong><i class="fas fa-info-circle"></i> Lưu ý:</strong> Đảm bảo thái độ chuyên nghiệp và thân thiện khi giao hàng. Giữ liên lạc với khách hàng để xử lý kịp thời mọi vấn đề phát sinh. Đảm bảo bảo mật thông tin khách hàng trong suốt quá trình giao nhận.</p>
    </div>
</div>


@endsection