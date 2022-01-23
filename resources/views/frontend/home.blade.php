<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.head')
</head>

<body>
    <!-- Main Header Start -->
    @include('frontend.header')
    <!-- Main Header end -->

<section class="irs-main-slider">
    <div class="container">
        <div id="myCarousel" class="carousel fade-carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <a href="" title=""><img src="/template/frontend/images/anh2.png" alt=""></a> 
                </div>
                <div class="item slides ">
                    <a href="" title=""><img src="/template/frontend/images/anh3.jpg" alt=""></a>   
                </div>
                <div class="item slides ">
                    <a href="" title=""><img src="/template/frontend/images/anh4.jpg" alt=""></a> 
                </div>
                <div class="item slides ">
                    <a href="" title=""><img src="/template/frontend/images/anh5.jpg" alt=""></a> 
                </div>
                <div class="item slides ">
                    <a href="" title=""><img src="/template/frontend/images/anh6.jpg" alt=""></a> 
                </div>
            </div>

            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Quay lại</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Tiếp theo</span>
            </a>
        </div>        
    </div>
</section>


<!-- Blog start -->
<section class="irs-blog-field">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="irs-section-title">
                    <h2>
                        <a href="/tin-tuc-su-kien"><span>Tin Tức Sự Kiện</span></a>
                    </h2>
                    <div class="irs-title-line">
                        <div class="irs-title-icon">
                            <i class="icofont icofont-news"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row animatedParent animateOnce">
            <div class="container">
                <div class="row">
                    @foreach ($events as $event)
                        
                    <div class="col-md-3">
                        <div class="irs-courses-col animated fadeInLeftShort slow delay-250">
                            <div class="irs-courses-img" id="index-img">
                                <a href="/su-kien/{{$event->id}}-{{Str::slug($event->name, '-')}}.html" title="{{$event->name}}">
                                    <img src="{{$event->thumb}}" alt="IMG-Event">
                                </a>
                            </div>
                            <div class="irs-courses-content" id="index-content-no-head">
                                <p style="white-space: nowrap; 
                                width: 230px; 
                                overflow: hidden;
                                text-overflow: ellipsis; ">
                                    <a href="/su-kien/{{$event->id}}-{{Str::slug($event->name, '-')}}.html" title="{{$event->name}}}">{{$event->name}}</a>
                                </p>
                                <div class="form-group">
                                    <a href="/su-kien/{{$event->id}}-{{Str::slug($event->name, '-')}}.html" class="btn btn-info" style="display:inline-block;width:100%;">Xem Chi Tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                <!--<div class="col-md-3 event-hightlight">
                    <div class="event-title-highlight" style="border-bottom:none;">
                    </div>
                        <a href="/vn/tin-hoat-dong-dtn"><h3 class="irs-sidebar-title"> * TIN TIÊU ĐIỂM</h3></a>
                        <a href="/">
                            <img src="/template/frontend/images/anh1.jpg" alt="">
                       </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog end -->
<!--<section class="irs-blog-field">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="irs-section-title">
                    <h2>
                        <a href="/vn/thong-bao-dtn">
                            <span>Th&#244;ng b&#225;o</span>
                        </a>
                    </h2>
                    <div class="irs-title-line">
                        <div class="irs-title-icon">
                            <i class="icofont icofont-notification"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">

                <div class="irs-blog-single-col">
                    <div class="irs-blog-col">
                        <div id="index-img">
                            <a  >
                                 <img src="/template/frontend/images/anh8.png" alt="" >
                            </a>
                        </div>

                        <div class="irs-courses-content">
                            <h4>
                                <a href="http://media.ute.udn.vn/The-Le-Cuoc-Thi.aspx" title="Kết quả cuộc thi trực tuyến &quot;Chọn Đại học C&#244;ng nghiệp H&#224; Nội - Kiến tạo cho tương lai&quot;">Kết quả cuộc thi trực tuyến &quot;Chọn Đại học C&#244;ng nghiệp H&#224; Nội - Kiến tạo cho tương lai&quot;</a>
                            </h4>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="irs-blog-single-col">
                    <div class="irs-side-bar">
                        <div class="irs-post">
                                    <div class="irs-post-item">
                                        <a href="Ngày hội hiến máu tình nguyện " title="Ngày hội hiến máu tình nguyện">
                                            <p>Ngày hội hiến máu tình nguyện " Chủ nhật đỏ" năm 2022 do Thành Đoàn tổ chức</p>
                                        </a>
                                    </div>
                                    <div class="irs-post-item">
                                        <a href="Cuộc thi viết về “Võ Nguyên Giáp – Đại tướng của Nhân dân" title="Cuộc thi viết về “Võ Nguyên Giáp – Đại tướng của Nhân dân”">
                                            <p>Cuộc thi viết về “Võ Nguyên Giáp – Đại tướng của Nhân dân</p>
                                        </a>
                                    </div>
                                    <div class="irs-post-item">
                                        <a href="Hướng dẫn Đại hội Chi đoàn Khóa mới 2021-2022" title="Hướng dẫn Đại hội Chi đoàn Khóa mới 2021-2022">
                                            <p>Hướng dẫn Đại hội Chi đoàn Khóa mới 2021-2022</p>
                                        </a>
                                    </div>
                                    <div class="irs-post-item">
                                        <a href="Thiết kế thiệp mừng Lời tri ân gửi đến thầy, cô nhân dịp 20/11 " title="Thiết kế thiệp mừng Lời tri ân gửi đến thầy, cô nhân dịp 20/11">
                                            <p>Thiết kế thiệp mừng Lời tri ân gửi đến thầy, cô nhân dịp 20/11</p>
                                        </a>
                                    </div>
                            <!-- <div class="col-md-12 visible-xs">
                                <a class="btn btn-default irs-btn-transparent-two btn-read-more" href="/vn/thong-bao-dtn" role="button">Xem thêm</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</section>

<!-- Liên kết website-->

<section class="irs-about-field">
    <div class="container">
        <div class="row">
            <div class="carousel slide" id="link-web" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-md-2 col-sm-4 col-xs-6 link-web">
                            <a href="http://daotao.ute.udn.vn/">
                                <img src="/template/frontend/images/dao-tao.png" alt="hop-tac-quoc-te" class="img-responsive">
                                <p class="text-center">Đào Tạo</p>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 link-web">
                            <a href="https://ute.udn.vn/upload/TCHC/Qui%20che%20to%20chuc%20va%20hoat%20dong%20DHSPKT.pdf">
                                <img src="/template/frontend/images/quy-dinh-chung.jpg" alt="hop tac doanh nghiep va dao tao ngan han" class="img-responsive">
                                <p class="text-center">Quy Định Chung</p>
                            </a>
                        </div>
                        
                   
                        <div class="col-md-2 col-sm-4 col-xs-6 link-web">
                            <a href="https://www.facebook.com/UTE.MEDIAONLINE">
                                <img src="/template/frontend/images/lien-he.png" alt="hoat dong 5s" class="img-responsive">
                                <p class="text-center">Liên Hệ</p>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 link-web">
                            <a href="http://sotaysinhvien.ute.udn.vn/default.html">
                                <img src="/template/frontend/images/so-tay-sinh-vien.jpg" alt="quy khuyen hoc nguyen thanh binh" class="img-responsive">
                                <p class="text-center">Sổ Tay Sinh Viên<br></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Liên kết website-->
<script type="text/javascript">
    var oiInteraction = new _interactionCore.init(1, 0, 0);
</script>

<!-- Footer start -->
    @include('frontend.footer')

</body>
</html>
