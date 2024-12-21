@extends('layouts.master')
@section('content')

<div class="content-section">
    <div class="store-info">
        <h1><i class="fas fa-store" style="color: #8a5252; font-size: 40px;"></i> HỆ THỐNG CỬA HÀNG</h1>

        <div class="about-us">
            <h2>VỀ CHÚNG TÔI</h2>
            <p>Chào mừng bạn đến với Flora, một không gian huyền diệu nơi các mô hình sưu tầm trở thành những tác phẩm nghệ thuật đầy cảm hứng. Flora không chỉ đơn thuần là một cửa hàng, mà là một hành trình khám phá thế giới của những chi tiết tinh tế và sự sáng tạo vô biên. Tại đây, mỗi mô hình không chỉ mang trong mình những nét vẽ sống động mà còn chứa đựng cả câu chuyện, cảm xúc và sự kỳ diệu.</p>
        </div>
        
        <div class="models">
            <h2>MÔ HÌNH</h2>
            <p>Các mô hình tại Flora được chế tác tỉ mỉ, từ những thú bông dễ thương, đến những nhân vật hoạt hình nổi tiếng hay những tác phẩm nghệ thuật đương đại. Mỗi sản phẩm đều mang trong mình một sức hút riêng biệt, không chỉ dành cho những người yêu thích sưu tầm mà còn là món quà tuyệt vời cho những ai tìm kiếm sự khác biệt và sáng tạo trong không gian sống của mình...</p>
            <img class="img_fo" src="{{ asset('frontend/img/me1.jpg') }}" alt="">
            <img class="img_fo" src="{{ asset('frontend/img/me0.jpg') }}" alt="">
            <img class="img_fo" src="{{ asset('frontend/img/me3.jpg') }}" alt="">
        </div>

        <div class="story">
            <h2>CÂU CHUYỆN</h2>
            <p>Flora tự hào là nơi hội tụ của những bộ sưu tập độc đáo, mỗi bộ là một hành trình khác biệt, một câu chuyện chưa kể. Bạn không cần phải lo lắng về sự ngẫu nhiên của những hộp blind box, mà thay vào đó, có thể lựa chọn những mô hình yêu thích từ các bộ sưu tập đã được định hình rõ ràng...</p>
        </div>

        <div class="destination">
            <h2>ĐÍCH ĐẾN</h2>
            <p>Chất lượng là điều Flora luôn hướng đến. Mỗi sản phẩm tại đây đều được làm từ các chất liệu cao cấp, đảm bảo độ bền đẹp và giá trị thẩm mỹ lâu dài. Đặc biệt, với dịch vụ giao hàng tận nơi nhanh chóng và thuận tiện, Flora mang đến cho bạn trải nghiệm mua sắm tuyệt vời...</p>
        </div>

        <div class="store-locations">
            <h2>HỆ THỐNG CÁC CỬA HÀNG</h2>
            <ul>
                <li><strong>Cửa hàng Hà Nội:</strong> Địa chỉ: 123 Phố Huế, Quận Hai Bà Trưng, Hà Nội. Giờ mở cửa: 9:00 - 21:00 (Tất cả các ngày trong tuần). Hotline: 024-1234-5678</li>
                <li><strong>Cửa hàng TP. Hồ Chí Minh:</strong> Địa chỉ: 456 Đường Nguyễn Trãi, Quận 5, TP. Hồ Chí Minh. Giờ mở cửa: 9:00 - 22:00 (Tất cả các ngày trong tuần). Hotline: 028-9876-5432</li>
                <li><strong>Cửa hàng Đà Nẵng:</strong> Địa chỉ: 789 Đường Võ Văn Kiệt, Quận Sơn Trà, Đà Nẵng. Giờ mở cửa: 8:30 - 20:30 (Tất cả các ngày trong tuần). Hotline: 0236-555-6789</li>
                <li><strong>Cửa hàng Hải Phòng:</strong> Địa chỉ: 321 Lê Hồng Phong, Quận Ngô Quyền, Hải Phòng. Giờ mở cửa: 9:00 - 20:00 (Tất cả các ngày trong tuần). Hotline: 0225-444-5566</li>
                <li><strong>Cửa hàng Cần Thơ:</strong> Địa chỉ: 654 Đường 30 Tháng 4, Quận Ninh Kiều, Cần Thơ. Giờ mở cửa: 9:00 - 21:00 (Tất cả các ngày trong tuần). Hotline: 0292-333-4455</li>
            </ul>
        </div>

        <div class="customer-support">
            <h2>HỖ TRỢ KHÁCH HÀNG</h2>
            <p>Nếu không thể đến trực tiếp cửa hàng, bạn hoàn toàn có thể mua sắm qua website của chúng tôi với đầy đủ sản phẩm và ưu đãi như tại cửa hàng. Hãy ghé thăm địa chỉ gần nhất hoặc liên hệ hotline để được tư vấn chi tiết!</p>
        </div>
    </div>
</div>

@endsection