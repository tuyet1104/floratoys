@extends('layout')
@section('content')

<style>
    @media (max-width: 992px) {
    .body {
        width: unset;
        margin: 0 auto;
    }
}
</style>

<div class="post-slider">
    <div class="post-wrapper">
        <div class="post">
            <h1 style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); font-weight:800;" class="text-white mb-5">
                Sản phẩm mô hình của Flora Store

                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4">
                        <div class="mainServices">
                            <i class="fa-solid fa-medal"></i>
                            <div class="mainServices__content">
                                <h3>An toàn</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="mainServices">
                            <i class="fa-solid fa-star"></i>
                            <div class="mainServices__content">
                                <h3>Chất lượng </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="mainServices">
                            <i class="fa fa-gavel"></i>
                            <div class="mainServices__content">
                                <h3>Bảo đảm</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </h1>
            <img src="{{ asset('frontend/img/banner3.jpg')}}" alt="">
        </div>
    </div>

</div>

<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">

        <div class="modal-header">
            <button class="modal-close modal-toggle btn fa fa-times" style="outline: none;"></button>
            <h2 class="modal-heading">Xem thêm</h2>
        </div>

        <style>
            .form-horizontal .control-label {
                text-align: unset !important;
            }
        </style>

    </div>
</div>

<div class="body">
    <div class="container-fluid" style="padding: 0!important;">
        <div class="service-banner">
            <img src="{{ asset('frontend/img/tintuc1.jpg')}}" alt="">

        </div>
    </div>

    <div class="row">
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #f69e9a" class="service-list__content-box">
                <img src="{{ asset('frontend/img/tintuc4.jpg')}}" alt="">
                <h3 class="h1-title">
                    1. SKULLPANDA
                </h3>

                <p>
                    SKULLPANDA xuất hiện như một loại tồn tại đặc biệt. Là một sinh vật cộng sinh phổ quát, nó di chuyển tự do giữa các hành tinh, tìm kiếm bản thân, đóng nhiều vai trò khác nhau và trải nghiệm những cuộc sống khác nhau. Lần đầu tiên nhìn thấy
                    SKULLPANDA, bạn sẽ bị cuốn hút bởi một lực không thế giải thích được. Nó trú ngụ trong bóng tối cua không gian vô tận trống rỗng, hiện diện như một khoảng trống rộng lớn, không có giới hạn.
                </p>

            </div>
        </div>
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #B56256" class="service-list__content-box">
                <img src="{{ asset('frontend/img/tintuc3.jpg')}}" alt="">
                <h3 class="h1-title">
                    2. THE MONSTERS
                </h3>

                <p>
                    Sinh ra ở Hồng Kông và hiện sống ở Bỉ, Kasing Lung đã bước chân vào thế giới đồ chơi thiết kế vào năm 2011 thông qua các dự án hợp tác với
                    How2work. Vào năm 2015, Kasing đã tạo ra "The Monsters", đầu tiên là
                    một câu chuyện minh họa, sau đó là một loạt đồ chơi bằng nhựa vinyl xoay quanh nhân vật biểu tượng Labubu. Tác phẩm của Kasing được lấy cảm hứng từ nền tảng đa văn hóa của anh, kết hợp với cảm quan văn hóa đại chúng Đông Á và các yếu tố văn hóa dân gian Bắc Âu
                </p>
            </div>
        </div>
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #f69e9a" class="service-list__content-box">
                <img src="{{ asset('frontend/img/tintuc2.jpg')}}" alt="">
                <h3 class="h1-title">
                    3. DIMOO
                </h3>

                <p>
                    Ayan là một nghệ sĩ đến từ Trung Quốc đại lục chuyên về minh họa và thiết kế đồ chơi, được nhiều người biết đến với tự cách là nhà sáng tạo ra loạt đồ chơi DIMOO WORLD. Là người sáng lập YANSTUDIO, Ayan cũng là một trong những nghệ sĩ đấu tiền được POP MART ký hợp đông. Tác phẩm của có chữa đấy những huyền thoại nội tâm và xoay quanh Dimoo, một câu bé đang đối mặt với nỗi sợ hãi và sự bất định trong thế giới thực qua những giấc mơ.
                </p>
            </div>
        </div>

    </div>

    <div class="service-text mb30">
        <div class="service-text__content">
            <h2 class="h2-title">
                Cảm ơn bạn đã đến với Flora Store của chúng tôi!
            </h2><h2 class="h2-title">
                Chúng tôi rất hân hạnh và luôn sẵn sàng đón tiếp quý khách!</h2>
        </div>
    </div>
</div>
@endsection