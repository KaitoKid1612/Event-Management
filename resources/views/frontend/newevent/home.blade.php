<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.head')
</head>

<body>
    <!-- Main Header Start -->
    @include('frontend.header')
    <!-- Main Header end -->

    <section class="irs-inner-page-heading irs-layer-black article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="irs-inner-heading">
                        <a href="tin-hoat-dong-dtn">
                            <h2>TIN TỨC SỰ KIỆN</h2>
                        </a>
                            <i class="icofont icofont-notification"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="irs-blog-field left-img">
        <div class="container">
            <div class="row">
                @include('frontend.events.list')
                <!--blog entry col end-->
                <div class="col-md-4">
                    <div class="irs-side-bar">
                        <div class="irs-search-box">
                            <form name="search_box" target="_blank" action="/tin-tuc-su-kien/search">
                                <div class="input-group">
                                    
                                    <input placeholder="Tìm kiếm..." class="form-control" name="q" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
    
                        <div class="irs-post">
                            <h3 class="irs-sidebar-title">Tin tiêu điểm</h3>
                        </div>
    
                        <div class="irs-video">
                            <h3 class="irs-sidebar-title">Video giới thiệu
                            </h3>
                            <div>        
                                <iframe src="https://www.youtube.com/embed/qseQBNT2hXY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                        </div>
    
                    </div>
                </div>
                <!--sidebar col end-->
            </div>
        </div>
    </section>


    <!-- Footer start -->
    @include('frontend.footer')

</body>
</html>
