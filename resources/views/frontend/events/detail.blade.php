<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.head')
</head>

<body>
    <!-- Main Header Start -->
    @include('frontend.header')
    <!-- Main Header end -->

    <nav class="wrap t3-navhelper">
        <div class="container">
            <ol class="breadcrumb ">
                <li>
                    <a id="" class="pathway" href="/">Trang Chủ</a>
                </li>  
                <li>
                    <a id="" class="pathway">Sự Kiện</a>
                </li>
            </ol>
        </div>
    </nav>
    <div class="main">
        <div class="container t3-mainbody mainbody-magazin">
            <div class="equal-height">
                <div class="col t3-content col-md-9 event_data">
                    <div class="item-row row-main">
                        <div class="article-main">
                            <article class="article" style="background: url(../images/bg/article.png) #ffff; !important" itemscope itemtype="http://schema.org/Article">
                                <div style="box-sizing: border-box; color: rgb(0, 0, 128); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255); text-align: center;">
                                    <img src="{{$event->thumb}}" alt="{{$event->thumb}}" width="1000" height="488" border="0" style="box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto;"><br style="box-sizing: border-box;">
                                </div>
                                <section class="article-full">
                                    <h1 class="article-title" 
                                    style="background-color: #ffff;
                                    text-align: center;
                                    color: red;
                                    margin-top: 10px;" itemprop="headline">
                                        {{$event->name}}			
                                    </h1>
                                    <div class="article-content-main">
                                        <section class="article-content" itemprop="articleBody">
                                            <div style="text-align: justify;">
                                                <div style="box-sizing: border-box; color: rgb(0, 0, 128); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);">{{$event->content}}
                                                </div>
                                                <div style="margin-top:10px">
                                                    <div class="form-group" >
                                                        <b style="padding-right: 35px;">Ghi chú </b>
                                                        <span></span>
                                                    </div>
                                                    <div class="form-group ">
                                                        <b style="padding-right: 35px;">Ngày Đăng Kí</b>
                                                        <span>{{$event->date_sign_up}}</span>  
                                                    </div>
                                                    <div class="form-group ">
                                                        <b style="padding-right: 31px;">Ngày Tổ Chức</b>
                                                        <span>{{$event->date_begin}}</span>  
                                                    </div>
                                                    <div class="form-group ">
                                                        <b style="padding-right: 30px;">Ngày Kết Thúc</b>
                                                        <span>{{$event->date_end}}</span>  
                                                    </div>
                                                    <div class="form-group ">
                                                        <b style="padding-right: 68px;">Địa Điểm</b>
                                                        <span>{{$event->address}}</span>  
                                                    </div>
                                                    <div class="form-group ">
                                                        <b style="padding-right: 32px;">Điểm Tích Luỹ</b>
                                                        @foreach ($menus as $menu)
                                                            @if ($menu->id == $event->menu_id)
                                                                <span>{{$menu->number}}</span>
                                                            @endif    
                                                        @endforeach
                                                    </div>
                                                    <div class="form-group ">
                                                        <b style="padding-right: 61px;">Số Lượng</b>
                                                        <span>{{$event->number_student}}</span>  
                                                    </div>
                                                    <div>
                                                        <input type="hidden" value="{{$event->id}}" class="event_id">
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                    </div>
                                </section>
                            </article>
                            <div class="form-group">
                                <a id="" class="btn btn-success addToCartBtn" href="" style="display:inline-block;width:100%;">Đăng ký tham gia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col t3-sidebar t3-sidebar-right col-md-3 " style="
                    box-shadow: inset 0 0 0 1px #e5e5e5;
                    background: #f8f8f8;
                    padding: 0px;">
                    <div class="t3-module module visible-reading " style="
                        background: transparent;
                        color: inherit;
                        margin-bottom: 24px;
                        padding-bottom: 0;">
                        <div class="module-inner" style="padding: 0;">
                            <div class="module-ct" style="
                                background: inherit;
                                color: inherit;
                                padding: 0;">
                                <div class="custom visible-reading">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" style="
                                        padding-left: 0;
                                        margin-left: 0;
                                        background-color: #ddd;">
                                        <li class="active" style="margin: 0;"><a href="#profile" style="
                                            background-color: #002878;
                                            color: #ffffff;
                                            margin: 0;
                                            border: 0;
                                            font-weight: bold;
                                            border-right-color: #cc0000;
                                            " data-toggle="tab">
                                            CÁC CHUYÊN MỤC TƯƠNG TỰ</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane active">
                                            <div class="moduletable">
                                                <div class="section-inner ">
                                                    <div class="category-module magazine-links" style="margin: 0;">
                                                        @foreach ($events as $event)
                                                        <div class="magazine-item link-item" style="
                                                            border-bottom: 1px dotted #e5e5e5;
                                                            padding: 12px 12px;
                                                            padding-left: 0;">
                                                            <div class="col col-content" style="width: 100%;position: relative;float: left;min-height: 1px;padding-left: 12px;padding-right: 12px;">
                                                                <div class="article-title" style="
                                                                margin: 0;
                                                                text-align: justify;
                                                                font-size: 25px;
                                                                font-weight: bold;
                                                                line-height: 1.25;
                                                                color: #cc0000;
                                                                padding-bottom: 0;
                                                                border-bottom: 0;">
                                                                    <h3 itemprop="name" style="
                                                                    margin: 0;
                                                                    font-size: 14px !important;">
                                                                        <a style="
                                                                        color: #0a4181;
                                                                        font-family: "Roboto Slab",Cambria,Georgia,"Times New Roman",Times,serif;
                                                                        font-weight: 700;
                                                                        line-height: 1.5;" id="" href="/su-kien/{{$event->id}}-{{Str::slug($event->name, '-')}}.html" >
                                                                        <i class="fa fa-chevron-right"></i>{{$event->name}}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>         
                                                        @endforeach
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
