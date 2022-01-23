<div class="col-md-8">
    @foreach ($events as $event)
        
    <div class="entry">
        <div class="row">
            <div class="col-md-4">
                <div class="image-area">                
                    <a href="/su-kien/{{$event->id}}-{{Str::slug($event->name, '-')}}.html">
                        <img src="{{$event->thumb}}" class="img-responsive" alt="">
                    </a>
                </div>
                <!--image area-->
            </div>
    
            <div class="col-md-8">
                <h2 class="entry-title">
                    <a href="/su-kien/{{$event->id}}-{{Str::slug($event->name, '-')}}.html">{{$event->name}}</a>
                </h2>
                <div class="entry-meta">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>{{$event->date_begin}}</a>
                        </li>
                    </ul>
                </div>
                <!--entry meta-->
                <div class="entry-text">
                    <p>
                        {{$event->content}}
                    </p>
                </div>
                <!--entry-text-->
                <span class="read-more">
                    <a href="/su-kien/{{$event->id}}-{{Str::slug($event->name, '-')}}.html">Xem thêm</a>
                </span>
    
            </div>
        </div>
    </div>

    @endforeach
    
    <div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore">
        <input type="hidden" value="1" id="page">
        <a onclick="loadMore()" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
            Load More
        </a>
    </div>

</div>