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
	
        <nav class="wrap t3-navhelper">
            <div class="container">
                <ol class="breadcrumb ">
                    <li>
                        <a id="" class="pathway" href="/">Trang chủ</a>
                    </li>  
                    <li>
                        <a id="" class="pathway">Thông tin hoạt động</a>
                    </li>
                </ol>
            </div>
        </nav>
        <div class="main">
            <div id="t3-mainbody" class="container t3-mainbody">
                <div id="t3-content" class="col t3-content col-lg-9 col-md-9" style="margin: 0 auto;">
                    <div class="form-group">
                        <div class="alert alert-warning fade in">
                            <strong> Các Hoạt động của Sinh viên sẽ được tích
                            điểm sau khi Ban Quản trị kiểm tra đối chiếu thông tin hoàn tất và cập nhật trên
                            hệ thống.</strong>
                        </div>
                    </div>
                    <div class="form-group">
                        <a id="" class="btn btn-info" href="/">Đăng ký Hoạt động</a>    
                    </div>
                    <div class="item-row row-main">
                        <div class="article-main">
                            
                            <h1 class="article-title"  style="text-align: center;text-transform: capitalize;">
                                Danh sách Hoạt động
                            </h1>  
                                 
                            </article>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">
                                            Mã sự kiện
                                        </th>
                                        <th style="text-align: center">
                                            Hoạt động
                                        </th>
                                        <th style="text-align: center">
                                            Điểm tích lũy
                                        </th>
                                        <th style="text-align: center">
                                            Người duyệt
                                        </th>
                                        <th style="text-align: center">
                                            Thời gian ghi
                                        </th>
                                        <th style="text-align: center">
                                            Trạng thái
                                        </th>
                                        <th style="text-align: center">
                                           Rút đăng ký
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($cartItem as $item)     
                                    <tr class="">
                                        <td align="center">
                                            {{$item->event_id}}
                                        </td>
                                        <td>
                                            {{$item->events->name}}
                                        </td>
                                        <td align="center" style="text-align: center;">
                                            10
                                        </td>
                                        <td align="center">
                                            Ban Truyền thông(5050065)
                                        </td>
                                        <td align="center">
                                            17g07p ngày 26/04/2021
                                        </td>
                                        <td align="center" style="text-align: center;">
                                            <img src="../../Images/checkk.png">
                                        </td>
                                        <td style="text-align: center;">
                                        
                                        </td>
                                    </tr> 
                                    @endforeach
                                        
                                    <tr>
                                        <td colspan="3" style="font-weight: bold; text-align: right">
                                            Tổng điểm đạt được:
                                        </td>
                                        <td align="center" style="text-align: center;">
                                            15
                                        </td>
                                        <td colspan="3">
                                            <i>Điểm tích lũy dùng để xét điểm rèn luyện, Đánh giá Sinh viên, Ưu tiên hoạt động cho
                                                sinh viên,...</i>
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        
                        </div>
                    </div>
                </div>
                <div class="col t3-sidebar t3-sidebar-right col-md-3">
                    
                    <div class="module-inner">
                        <div class="module-ct">
                            <div class="custom visible-reading">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active" style="width: 100%;"><a href="#profile" data-toggle="tab">Khám phá
                                        bản thân</a></li>
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
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalpopup1" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Thất bại</h4>
                    </div>
                    <div class="modal-body">
                        <p>Cập nhật thông tin thất bại!</p>
                        <p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                                Tắt cửa sổ
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalpopup2" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×</button>
                        <h4 class="modal-title">
                            Thành công</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            XÓa hoạt động thành công!</p>
                        <p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                                Tắt cửa sổ</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Footer start -->
    @include('frontend.footer')

</body>
</html>
    