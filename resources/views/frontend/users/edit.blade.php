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
                        {{-- <div class="col-lg-3 col-md-3 ">
                            <img id="" class="imgviewer form-control" src="Upload/AnhDaiDien/4244835_0160919090410.jpg" style="border-color:#EFEFEF;border-width:1px;border-style:solid;height:100%;width:100%;">
                            <input id="" name="" type="hidden" autocomplete="off" value="" isuploaderfield="1">
                            <img uniqueid="" namespace="CuteWebUI" root="/" verticks="633803280400000000" filetoolargemsg="{0} cannot be uploaded!
                            File size ({1}) is too large. The maximum file size allowed is set to: {2}." maxfileslimitmsg="The maximum number of files allowed to be uploaded is set to {0}." windowsdialoglimitmsg="Unable to select so many files at once. The total file name length cannot exceed 32kb." canceluploadmsg="Cancel upload" cancelallmsg="Hủy tất cả" uploadingmsg="...Đang tải ảnh..." dialogfilter="Image Files(*.PNG;*.JPG;*.GIF)|*.PNG;*.JPG;*.GIF" uploadtype="Auto" manualstartupload="1" numfilesshowcancelall="2" showprogressbar="1" showprogressinfo="1" panelwidth="360" barheight="20" infostyle="padding-left:3px;font:normal 11px Tahoma;" barstyle="Continuous" borderstyle="border:1px solid #444444;" postbackeventreference="__doPostBack('ctl00$ContentPlaceHolder1$UploadImage','')" insertbuttonid="ctl00_ContentPlaceHolder1_UploadImage__Insert" cancelbuttonid="ctl00_ContentPlaceHolder1_UploadImage__Cancel" progresstextid="ctl00_ContentPlaceHolder1_UploadImage__ProgressText" progressctrlid="ctl00_ContentPlaceHolder1_UploadImage__Progress" maxsizekb="500" inserttext="Chọn ảnh" inputboxcsstext="" contextvalue="!3wEWAQUgQzpcV2luZG93c1xURU1QXEFqYXhVcGxvYWRlclRlbXAgUgDdBQnM3szrvijS!1tHLpFkS!3CLEHD!3Hz72Zz8nrAA!2!2" id="ctl00_ContentPlaceHolder1_UploadImageImage_unique" resourcehandler="/CuteWebUI_Uploader_Resource.axd" onload="this.style.display=&quot;none&quot; ; CuteWebUI_AjaxUploader_Initialize(this.id);" onerror="this.onload()" src="/CuteWebUI_Uploader_Resource.axd?type=file&amp;file=continuous.gif" style="display:none;">
                            <input type="submit" name="ctl00$ContentPlaceHolder1$UploadImage$_Insert" value="Chọn ảnh" id="ctl00_ContentPlaceHolder1_UploadImage__Insert" class="form-control btn btn-success" style="font-size:14px;">
                            <div id="ctl00_ContentPlaceHolder1_UploadImage__Progress" style="display:none;">
                                <span id="" style="display: none;">Uploading...</span>
                                <input type="submit" name="" value="Cancel" id="" class="hrm_button" style="font-size: 11px; display: none;">
                            </div>
                            &nbsp;
                            <input type="submit" name="" value="Tải ảnh" onclick="return upload_click();" id="" class="form-control btn btn-danger"><br>
                            <img id="ctl00_ContentPlaceHolder1_imgQRCode" class="img-responsive" src="https://chart.googleapis.com/chart?cht=qr&amp;chs=300x300&amp;chl=1811505410241" style="border-width:0px;">
                        </div> --}}
                        <div class="col-lg-9 col-md-9">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>   
                            @endif
                            <form wire:submit.prevent="updateProfile">
                                <div class="form-group">
                                    <div class="form-group col-lg-6">
                                        <span class="left">Mã Sinh Viên: </span>
                                        <b>{{$user->roll_no}}</b>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <span class="left">Họ tên: </span>
                                        <b>
                                            <input type="text" value="{{$user->name}}" class="form-control" wire:model="name">
                                        </b>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <span class="left">Lớp Sinh hoạt: </span><b>
                                        <input type="text" class="form-control" wire:model="class_id">
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
                                        <input name="" type="text" id="" class="form-control " style="width:100%;" wire:model="phone">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <span class="left">Thư điện tử: </span>
                                        <input name="" type="text" value="{{$user->email}}" id="" disabled="disabled" class="right form-control " style="width:100%;">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <span class="left">Giới tính: </span>
                                        <input type="text" class="form-control" wire:model="gender">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <span class="left">Ngày sinh: </span>
                                        <input name="" type="text" id="" class="form-control " data-mask="99/99/9999" placeholder="dd/MM/yyyy" style="width:100%;" wire:model="dob">
                                        <input type="hidden" name="" id="">
                                    </div>
                                        <div class="form-group col-lg-6">
                                        <span class="left">Chức vụ: </span>
                                        <b>Sinh viên</b>
                                    </div>
                                
                                    <div class=" col-lg-12">
                                        <span class="left">&nbsp;</span> 
                                        <span class="right buttons">
                                            <span class="right buttons">
                                                <input type="submit" name="" value="Cập nhật thông tin" id="" class="blue edit btn btn-danger">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </form>
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
