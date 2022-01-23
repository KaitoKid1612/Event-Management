<footer id="t3-footer" class="wrap t3-footer">
    <div class="container">
        <section class="t3-footer-links col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <!-- FOOT NAVIGATION -->
                    <!-- SPOTLIGHT -->
                    <div class="t3-spotlight t3-footnav  row">
                        <div class=" col-lg-12 col-md-12  col-sm-12 col-xs-12">
                            <div class="t3-module module ">
                                <div class="module-inner">
                                    <h3 class="module-title "><span>Danh sách thành viên đang truy cập(0đang truy cập)</span></h3><div class="module-ct">
                                        <div class="col-lg-12 row ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="t3-copyright col-lg-12">
            <div class="row">
                <div class="col-md-8 copyright ">
                    <small>
                        Hệ thống Phần mềm Quản lý Chuyên trách Đoàn - Hội; Copyright © 2021.
                    </small>
                    <small>
                        Địa chỉ: số 48 Cao Thắng, TP. Đà Nẵng - Điện thoại: (0236) 3530590 - Email: <a href="mailto:utemediaonline@gmail.com">utemediaonline@gmail.com</a>
                    </small>
                </div>
                <div class="col-md-4 poweredby">
                    <a href="https://www.facebook.com/UTE.MEDIAONLINE/" title="Thiết kế Website" target="_blank">Thiết kế bởi <strong style="color:orange">Ban Truyền thông Đoàn trường</strong> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </section>
    </div>
</footer>
<!-- Footer end -->
    
<script type="text/javascript" src="/template/frontend/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="/template/frontend/js/jquery.magnific-popup.min.js"></script>

<script type="text/javascript" src="/template/frontend/js/css3-animate-it.js"></script>
<script type="text/javascript" src="/template/frontend/js/bootstrap-slider.js"></script>
<script type="text/javascript" src="/template/frontend/js/jquery.scrollUp.js"></script>
<script type="text/javascript" src="/template/frontend/js/classie.js"></script>


<!-- Custom script for all pages -->
<script type="text/javascript" src="/template/frontend/js/script.js"></script>
<script type="text/javascript" src="/template/frontend/js/public.js"></script>
<!-- Funfact START -->

<script type="text/javascript">

    (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-48346684-11', 'auto');
    ga('send', 'pageview');


    $(document).ready(function ($) {
        $(".des").hide();
        $(".read-more").click(function () {
            $(".des").toggle("slow");
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.addToCartBtn').click(function(e){
            e.preventDefault();
            var event_id = $(this).closest('.event_data').find('.event_id').val();
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type:"POST",
                url:"/student/add-to-cart",
                data:{
                    'event_id':event_id
                },
                success:function(response){
                    alert(response.status);
                }
            })
        });
    });
</script>