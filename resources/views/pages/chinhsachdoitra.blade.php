@extends('layouts.master')
@section('content')

<div class="content-section">
    <div class="return-policy">
        <h1><i class="fas fa-exchange-alt" style="color: #8a5252; font-size: 40px;"></i> CHÍNH SÁCH ĐỔI TRẢ</h1>  
        <p>Cảm ơn quý khách đã quan tâm và truy cập vào website. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của Quý khách.</p>
        <p>Chính sách đổi trả sẽ giải thích cách chúng tôi tiếp nhận, sử dụng và (trong trường hợp nào đó) tiết lộ thông tin cá nhân của Quý khách.</p>

        <ul class="no-bullet">
            <li>
                <strong><i class="fas fa-check-circle" style="color: #8a5252;"></i> Điều kiện đổi trả</strong>
                <ul>
                    <li><i class="fas fa-calendar-day" style="color: #616161;"></i> Khách hàng cần gửi yêu cầu đổi trả trong vòng 7 ngày kể từ ngày nhận hàng (dựa trên thông tin giao hàng từ đơn vị vận chuyển).</li>
                    <li><i class="fas fa-plug" style="color: #616161;"></i> Đối với sản phẩm điện tử hoặc gia dụng, thời gian đổi trả có thể kéo dài lên đến 30 ngày nếu sản phẩm có bảo hành chính hãng.</li>
                    <li><i class="fas fa-box-open" style="color: #616161;"></i> Sản phẩm còn nguyên vẹn, không có dấu hiệu bị sử dụng, hư hỏng, bẩn hoặc mất phụ kiện kèm theo. Bao bì sản phẩm, tem, nhãn mác, phiếu bảo hành (nếu có) cần còn nguyên.</li>
                    <li><i class="fas fa-receipt" style="color: #616161;"></i> Khách hàng cần cung cấp hóa đơn mua hàng hoặc thông tin đơn hàng để xác minh.</li>
                    <li><i class="fas fa-times-circle" style="color: #616161;"></i> Nếu sản phẩm không đáp ứng các điều kiện trên, Flora có quyền từ chối xử lý yêu cầu đổi/trả.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-ban" style="color: #8a5252;"></i> Các sản phẩm không áp dụng đổi trả</strong>
                <ul>
                    <li><i class="fas fa-percent" style="color: #616161;"></i> Hàng khuyến mãi hoặc giảm giá sâu: Các sản phẩm trong chương trình ưu đãi đặc biệt sẽ không áp dụng chính sách đổi/trả (trừ khi lỗi do nhà sản xuất).</li>
                    <li><i class="fas fa-gift" style="color: #616161;"></i> Sản phẩm cá nhân hóa: Những sản phẩm được đặt riêng theo yêu cầu (ví dụ: sản phẩm có khắc tên, in logo, v.v.) không được hoàn lại.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-exchange-alt" style="color: #8a5252;"></i> Quy trình đổi trả hàng hóa</strong>
                <ul>
                    <li><i class="fas fa-phone-alt" style="color: #616161;"></i> Liên hệ với bộ phận hỗ trợ khách hàng: Gọi đến Hotline 1900xxxx hoặc gửi email đến hotro@flora.vn để thông báo yêu cầu đổi trả. Cung cấp thông tin sản phẩm, lý do đổi/trả, kèm theo hình ảnh thực tế của sản phẩm (nếu sản phẩm bị lỗi).</li>
                    <li><i class="fas fa-box" style="color: #616161;"></i> Gửi sản phẩm về kho Postmart: Sau khi yêu cầu được xác nhận, nhân viên CSKH sẽ hướng dẫn bạn cách gửi sản phẩm về kho hàng của chúng tôi. Đóng gói sản phẩm cẩn thận để tránh hư hỏng trong quá trình vận chuyển.</li>
                    <li><i class="fas fa-check" style="color: #616161;"></i> Xử lý yêu cầu: Flora sẽ kiểm tra tình trạng sản phẩm trong vòng 3-5 ngày làm việc kể từ khi nhận được. Sau khi kiểm tra, chúng tôi sẽ thông báo kết quả xử lý qua email hoặc điện thoại.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-credit-card" style="color: #8a5252;"></i> Hình thức hoàn tiền</strong>
                <ul>
                    <li><i class="fas fa-university" style="color: #616161;"></i> Hoàn tiền qua tài khoản ngân hàng: Số tiền sẽ được hoàn lại vào tài khoản bạn cung cấp. Quá trình này mất từ 3 - 7 ngày làm việc tùy thuộc vào ngân hàng của bạn.</li>
                    <li><i class="fas fa-gift" style="color: #616161;"></i> Hoàn tiền bằng mã giảm giá: Postmart sẽ cung cấp mã giảm giá có giá trị tương đương để bạn sử dụng trong lần mua hàng tiếp theo.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-shipping-fast" style="color: #8a5252;"></i> Phí vận chuyển khi đổi/trả hàng</strong>
                <ul>
                    <li><i class="fas fa-truck" style="color: #616161;"></i> Flora sẽ chịu toàn bộ chi phí vận chuyển (bao gồm phí gửi trả và gửi sản phẩm mới đến bạn). Nếu bạn muốn đổi hàng vì lý do cá nhân (như không vừa size, không hợp màu), bạn sẽ chịu chi phí vận chuyển hai chiều.</li>
                </ul>
            </li>
            <li>
                <strong><i class="fas fa-gavel" style="color: #8a5252;"></i> Điều kiện pháp lý</strong>
                <ul>
                    <li><i class="fas fa-balance-scale" style="color: #616161;"></i> Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và tòa án Việt Nam có thẩm quyền xem xét.</li>
                </ul>
            </li>
        </ul>
    </div>
</div>
@endsection