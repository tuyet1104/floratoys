@extends('layout')
@section('content')

<div class="post-slider">
    <i class="fa fa-chevron-left prev" aria-hidden="true"></i>
    <i class="fa fa-chevron-right next" aria-hidden="true"></i>

    <div class="post-wrapper">
        <div class="post">
            <img src="{{ asset('frontend/img/banner2.jpg')}}" alt="">
        </div>
        <div class="post">
            <img src="{{ asset('frontend/img/banner1.jpg')}}" alt="">
        </div>
        <div class="post">
            <img src="{{ asset('frontend/img/banner3.jpg')}}" alt="">
        </div>
    </div>

</div>

<!-- Sản phẩm nổi bật -->
<div class="body">

    <div class="body__mainTitle">
        <h2>Sản phẩm nổi bật</h2>
    </div>

    <div class="post-slider2">
        <i class="fa fa-chevron-left prev2" aria-hidden="true"></i>
        <i class="fa fa-chevron-right next2" aria-hidden="true"></i>

        <div class="row">
            <div class="post-wrapper2">
                @foreach($sanphams as $sanpham)
                <div class="col-lg-2_5 col-md-4 col-6 post2">
                    <a href="{{ route('detail', ['id' => $sanpham->id_sanpham]) }}">
                        <div class="product">
                            <div class="product__img">
                                <img src="{{$sanpham->anhsp}}" alt="">
                            </div>
                            <div class="product__sale">
                                <div>
                                    @if($sanpham->giamgia)
                                        -{{$sanpham->giamgia}}%
                                    @else Mới
                                    @endif
                                </div>
                            </div>

                            <div class="product__content">
                                <div class="product__title">
                                    {{$sanpham->tensp}}
                                </div>

                                <div class="product__pride-oldPride">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($sanpham->giasp, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <div class="product__pride-newPride">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($sanpham->giakhuyenmai, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

<!-- khuyến mãi -->
<div class="banner">
    <div class="body__mainTitle">
        <h2>CHƯƠNG TRÌNH KHUYẾN MẠI </h2>
    </div>

    <div class="banner-top banner-top-2 row">

        <div class="col-md-3 col-sm-6">
            <img src="{{ asset('frontend/img/kmai1.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/kmai2.jpg')}}" alt="">
        </div>

    </div>
</div>

<!-- Dòng sản phẩm -->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        <h2>CÁC DÒNG MÔ HÌNH </h2>
    </div>
    <div class="dongsp">
        <ul>
            <li><a href="#">SKULLPANDA</a></li>
            <li><a href="#">CRYBABY </a></li>
            <li><a href="#">MOLLY </a></li>
            <li><a href="#">DIMOO </a></li>
            <li><a href="#">HACIPUPU </a></li>
        </ul>
    </div>
</div>

<div class="banner">
    <div class="banner-top">
        <img src="{{ asset('frontend/img/banner4.png')}}" />
    </div>
</div>

<!-- Sản phẩm sắp bán -->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        <h2>TIN TỨC HÀNG MỚI VỀ </h2>
    </div>

</div>

<div class="banner">

    <div class="row banner-top">
        <img class="col-md-4 col-sm-6" src="{{ asset('frontend/img/tin1.jpg')}}" />
        <img class="col-md-4 col-sm-6" src="{{ asset('frontend/img/tin2.jpg')}}" />
        <img class="col-md-4 col-sm-6" src="{{ asset('frontend/img/tin4.jpg')}}" />
    </div>
</div>

<!-- Tất cả sản phẩm -->
<div class="body">

    <div class="body__mainTitle">
        <h2>TẤT CẢ SẢN PHẨM</h2>
    </div>

    <div>
        <div class="row">
            @foreach($alls as $all)
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="{{ route('detail', ['id' => $all->id_sanpham]) }}">
                    <div class="product">
                        <div class="product__img">
                            <img src="{{$all->anhsp}}" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                @if($all->giamgia)
                                    -{{$all->giamgia}}%
                                @else Mới
                                @endif
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                {{$all->tensp}}
                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        {{ number_format($all->giasp, 0, ',', '.') }}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        {{ number_format($all->giakhuyenmai, 0, ',', '.') }}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <center>
            <a href="{{route('viewAll')}}" class="btn text-white" style="background: #d88782;">Xem thêm</a>
        </center>
    </div>

</div>

@endsection