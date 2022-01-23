<header class="irs-main-header">

    <div class="irs-header-nav scrollingto-fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav class="navbar navbar-default irs-navbar">
                        <div class="container-fluid" style="padding-right: 0px">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                        aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/">
                                    <img src="/template/frontend/images/header-ute.png" alt="Đại học Sư phạm Kỹ Thuật Đà Nẵng">
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                
                                <ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="flipInY">
                                    <li class="active">
                                        <a href="#"><i class="fas fa-home" aria-hidden="true" style="font-size: 20px"></i></a> 
                                    </li>
                                    <li class="dropdown">
                                        <a href="/">Trang chủ</a>           
                                    </li> 
                                        <li class="dropdown">
                                        <a href="#">Hướng dẫn sư dụng hệ thống</a>
                                        </li>                                       
                                    <li>
                                        <a href="/loaisukien">Loại sự kiện</a>
                                    </li>
                                    <li>
                                        <a href="/thong-bao-dtn">Tin hoạt động</a>
                                    </li>
                                    <li class="dropdown">
                                        @if (Auth::guard('student')->check())
                                            <a class="active" href="/student/profile">{{Auth::guard('student')->user()->name}}</a>
                                            <ul class="dropdown-menu">
                                                <li class="active">
                                                    <a href="/student">Đổi mật khẩu</a>
                                                </li>
                                                <li class="active">
                                                    <a href="/student/profile">Thông tin cá nhân</a>
                                                </li>
                                                <li class="active">
                                                    <a href="/student/Thong-Tin-Hoat-Dong">Thông tin hoạt động</a>
                                                </li>
                                                <li class="active"> 
                                                    <a href="/dang-xuat">Đăng Xuất</a>
                                                </li>
                                                @else
                                                <li class="active">
                                                    <a href="/dang-nhap">Đăng Nhập</a>
                                                </li>
                                            </ul>
                                        @endif
                                            
                                    {{--@if (Auth::guard('student')->check())
                                        <li class="active">
                                            <a href="/student/profile">{{Auth::guard('student')->user()->name}}</a>
                                        </li>
                                        <li class="active"> 
                                            <a href="/dang-xuat">Đăng Xuất</a>
                                        </li>
                                    @else
                                        <li class="active">
                                            <a href="/dang-nhap">Đăng Nhập</a>
                                        </li>
                                    @endif--}}
                                    
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>