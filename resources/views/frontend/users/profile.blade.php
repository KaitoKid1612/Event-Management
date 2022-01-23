<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.head')
</head>

<body>
    <!-- Main Header Start -->
    @include('frontend.header')
    <!-- Main Header end -->

    <div id="">
	
        <input type="hidden" name="" id="" value="145">
        <input type="hidden" name="" id="" value="1811505410241">
        <input type="hidden" name="" id="" value="4244835_0160919090410.jpg">
        <nav class="wrap t3-navhelper">
            <div class="container">
                <ol class="breadcrumb ">
                    <li>
                        <a id="" class="pathway" href="./">Trang chủ</a>
                    </li>  
                    <li>
                        <a id="" class="pathway">Thay đổi thông tin cá nhân</a>
                    </li>
                </ol>
            </div>
        </nav>
        <div class="main">
            <div id="t3-mainbody" class="container t3-mainbody">
                <div id="t3-content" class="col t3-content col-lg-9 col-md-9" style="margin: 0 auto;">
                    <div class="item-row row-main">
                        <div class="article-main">
                            <article class="article" itemscope="" itemtype="http://schema.org/Article">
                                <header class="article-header clearfix">
                                    <h1 class="article-title" itemprop="headline" style="text-align: center;text-transform: capitalize;">
                                    Điều chỉnh thông tin cá nhân
                                    </h1>  
                                </header>  
                            </article>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-lg-9 col-md-9">
                            <div class="form-group">
                                <div class="form-group col-lg-6">
                                    <span class="left">Mã Sinh Viên: </span>
                                    <b>{{$user->roll_no}}</b>
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="left">Họ tên: </span>
                                    <b>
                                        <span style="text-transform:uppercase">{{$user->name}}</span>
                                    </b>
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="left">Lớp Sinh hoạt: </span><b>
                                    <span id="" class="right req">{{$user->class_id}}</span></b>
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="left">Trạng thái Sổ đoàn: </span>
                                    <b>
                                        <span id="" class="right req">
                                            <font color="blue">
                                                <b>Đã nộp</b>
                                            </font>
                                        </span>
                                    </b>
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="left">Số điện thoại: </span>
                                    <input name="" type="text" value="{{$user->phone}}" id="" class="right form-control " style="width:100%;">
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="left">Thư điện tử: </span>
                                    <input name="" type="text" value="{{$user->email}}" id="" disabled="disabled" class="right form-control " style="width:100%;">
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="left">Giới tính: </span>
                                    
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="left">Ngày sinh: </span>
                                    <input name="" type="text" value="{{$user->dob}}" id="" class="right form-control " data-mask="99/99/9999" placeholder="dd/MM/yyyy" style="width:100%;">
                                    <input type="hidden" name="" id="">
                                </div>
                                    <div class="form-group col-lg-6">
                                    <span class="left">Chức vụ: </span>
                                    <b>Sinh viên</b>
                                </div>
                            
                                <div class=" col-lg-12">
                                    <a href="{{route('student.editprofile')}}" class="btn btn-info pull-right">Cập Nhật</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col t3-sidebar t3-sidebar-right col-md-3 ">
                    
                    <div class="module-inner">
                        <div class="module-ct">
                            <div class="custom visible-reading">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active" style="width: 100%;">
                                        <a href="#profile" data-toggle="tab">Khám phá bản thân</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        <div class="moduletable">
                                            <div class="section-inner ">
                                                <div class="category-module magazine-links">
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="/Account/Thong-Tin-Hoat-Dong.aspx">Thông tin Hoạt động </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="/Thay-Doi-Thong-Tin.html">Thông tin cá nhân </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="/Account/Quan-Ly-Doan-Vien.aspx">Thông tin Đoàn - Hội phí </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="/Account/Quan-Ly-Sinh-Vien.aspx">Quản lý Sinh viên </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="/Hoc-Tap/Quan-Ly-Khoa-Hoc.aspx">Khóa học trực tuyến </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="/Account/Quan-Ly-Van-Ban.aspx">Văn bản - Biểu mẫu </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="../">Sản phẩm của Đoàn - Hội </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="magazine-item link-item">
                                                        <div class="col col-content" style="width: 100%;">
                                                            <div class="article-title">
                                                                <h3 itemprop="name">
                                                                    <a href="../">Thông tin Khen thưởng </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>


    <!-- Footer start -->
    @include('frontend.footer')

</body>
</html>
