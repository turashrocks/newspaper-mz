@extends('layouts.news')


@section('title')

    {{$post->title}}

@endsection


@section('header')

<div id="fb-root"></div>
<script type="99fe79a2dc79cc376044af24-text/javascript">
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=341057736337158&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="99fe79a2dc79cc376044af24-text/javascript">
    if (screen.width <= 699) {
        document.location = "http://www.m.mzamin.com";
    }
</script>
<div class="banner">
    <div class="logo">
        <a href="/"><img class="img-responsive" src="{{ asset('mzamin/img/logos.png')}}"></a>
        <p style="margin-bottom:0; text-align:center;">ঢাকা, ২৮ জুন ২০১৯, শুক্রবার</p>
    </div>
    <div style="width:728px; height:90px; float:right; margin-top:5px;"></div>
</div>

@include('partials.search-partial')

@endsection


@section('content')

    <div class="container">

        <script type="5544d9256896664da8e3417c-text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-15759254-1', 'auto');
        ga('send', 'pageview');
        </script>


        <script async src="js_1" type="5544d9256896664da8e3417c-text/javascript"></script>
        <script type="5544d9256896664da8e3417c-text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-15759254-1');
        </script>
        <div class="row">
        <div class="col-sm-9">
        <div class="col-sm-9">
        <h1 style="font-size:50px;">{{ $post->title }}</h1>
        <p>প্রথম পাতা</p>
                <div class="details-source">
                <span style="color:#309AE5">ইশতিয়াক পারভেজ, বার্মিংহাম থেকে </span> | ২৮ জুন ২০১৯, শুক্রবার | সর্বশেষ আপডেট: ৬:১১ <div class="fb-share-button" style="float:right; margin-top:2px;" data-href="http://www.mzamin.com/article.php?mzamin=178847" data-layout="button"></div>
                </div>

                <div class="details-text" style="overflow:hidden;">
                    <div class="details-image"><img src="<?php echo asset("storage/$post->image")?>">
                    </div>
                    
                    {!!$post->content!!}
               
                </div>
                 <br>

                <div class="col-sm-12" style="background:#40505B; color:#fff; margin:30px 0;">
                    <h4>আপনার মতামত দিন</h4>
                </div>



                <div id="disqus_thread"></div>
                    <script>

         
                    var disqus_config = function () {
                    this.page.url = "{{ config('app.url') }}/news/{{ $post->id}}";  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = "{{ $post->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://human-land.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                      
            </div>
        <div class="col-sm-3">
            @foreach($posts as $post)
            <img class="img-responsive" src="<?php echo asset("storage/$post->image")?>"">
            <p class="title"><a href="#">{{ $post->title}}</a></p>
            @endforeach
        </div>
    </div>
    <div class="col-sm-3">
    <div style="width: 300px; height: 250px; float: left; margin-bottom: 20px;">
    <div id="Mzamin_Sidebar_Top"></div>
    </div>
    <div style="width: 300px; height: auto; float: left;">
    <div id="Mzamin_Sidebar_Mid"></div>
    </div>
    <div style="width:300px; height:600px; margin-top:20px; float:left;">
    <script id="GNR31596" type="5544d9256896664da8e3417c-text/javascript">
        (function (i,g,b,d,c) {
            i[g]=i[g]||function(){(i[g].q=i[g].q||[]).push(arguments)};
            var s=d.createElement(b);s.async=true;s.src=c;
            var x=d.getElementsByTagName(b)[0];
            x.parentNode.insertBefore(s, x);
        })(window,"gandrad","script",document,"//content.green-red.com/lib/display.js");
        gandrad({siteid:5059,slot:31596});
    </script>
    </div>
    <br><br>
    <br><br>
    <div id="taboola-right-rail-thumbnails"></div>
    <script type="5544d9256896664da8e3417c-text/javascript">
    window._taboola = window._taboola || [];
    _taboola.push({
        mode: 'thumbnails-rr',
        container: 'taboola-right-rail-thumbnails',
        placement: 'Right Rail Thumbnails',
        target_type: 'mix'
    });
    </script>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div style="width: 100%; padding: 10px; background: #f1f1f1; text-align: center; margin-top:20px;">
    <div id="Mzamin_Article_EndPost"></div>
    </div>
    </div>
    </div>
    <div class="row">
    <div id="taboola-mid-home-thumbnails"></div>
    <script type="5544d9256896664da8e3417c-text/javascript">
    window._taboola = window._taboola || [];
    _taboola.push({
        mode: 'thumbnails-b',
        container: 'taboola-mid-home-thumbnails',
        placement: 'Mid Home Thumbnails',
        target_type: 'mix'
    });
    </script>
    </div>
    </div>

    <div class="large-div"></div>
    <div class="totop">
    <div class="close_box"><span class="glyphicon glyphicon-remove-circle"></span></div>
    <div id="div-gpt-ad-1535019526000-0" style="height:250px; width:300px;">
    <script type="5544d9256896664da8e3417c-text/javascript">
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1535019526000-0'); });
    </script>
    </div>
    </div>

    <script type="5544d9256896664da8e3417c-text/javascript">
    window._taboola = window._taboola || [];
    _taboola.push({flush: true});
    </script>

@endsection


@section('footer')

<div class="footer">
        <div class="container">
            <div class="col-sm-1">
                <div class="logoFooter"><img class="img-responsive" src="{{ asset('mzamin/img/logos.png')}}"></div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <p>প্রধান সম্পাদক মতিউর রহমান চৌধুরী
                    <br> জেনিথ টাওয়ার, ৪০ কাওরান বাজার, ঢাকা-১২১৫ এবং
                    <br> মিডিয়া প্রিন্টার্স ১৪৯-১৫০ তেজগাঁও শিল্প এলাকা, ঢাকা-১২০৮ থেকে
                    <br> মাহবুবা চৌধুরী কর্তৃক সম্পাদিত ও প্রকাশিত।
                    <br> ফোন : ৮১৮৯১৬০-৬৩ ফ্যাক্স : ৮১২৮৩১৩, ৫৫০১৩৪০০
                    <br> ই-মেইল: <span style="color:#1067a0; font-family:Arial,Helvetica,sans-serif; font-size:14px;"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c32392b2f1c39313d323d3e263d313532723f3331">[email&#160;protected]</a></span></p>
            </div>
            <div class="col-sm-3">
                <div class="copyright">
                    Copyright © 2019
                    <br> All rights reserved www.mzamin.com</div>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="{{ asset('mzamin/js/email-decode.min.js')}}"></script>
    <script type="99fe79a2dc79cc376044af24-text/javascript" src="{{ asset('mzamin/js/bs.js')}}"></script>
    <script type="99fe79a2dc79cc376044af24-text/javascript">
        // for menu visible.
        $('.navigation').addClass('original').clone().insertAfter('.navigation').addClass('cloned').css('position', 'fixed').css('top', '0').css('margin-top', '0').css('z-index', '500').removeClass('original').hide();

        scrollIntervalID = setInterval(stickIt, 10);

        function stickIt() {
            var orgElementPos = $('.original').offset();
            orgElementTop = orgElementPos.top;

            if ($(window).scrollTop() >= (orgElementTop)) {
                // scrolled past the original position; now only show the cloned, sticky element.

                // Cloned element should always have same left position and width as original element.     
                orgElement = $('.original');
                coordsOrgElement = orgElement.offset();
                leftOrgElement = coordsOrgElement.left;
                widthOrgElement = orgElement.css('width');
                $('.cloned').css('left', leftOrgElement + 'px').css('top', 0).css('width', widthOrgElement).show();
                $('.original').css('visibility', 'hidden');
            } else {
                // not scrolled past the menu; only show the original menu.
                $('.cloned').hide();
                $('.original').css('visibility', 'visible');
            }
        }
    </script>
    <script type="99fe79a2dc79cc376044af24-text/javascript">
        // for sub menu visible
        $('.morenavigation').addClass('original').clone().insertAfter('.morenavigation').addClass('cloned').css('position', 'fixed').css('top', '0').css('margin-top', '43px').css('z-index', '500').removeClass('original').hide();

        scrollIntervalID = setInterval(stickIt, 10);

        function stickIt() {
            var orgElementPos = $('.original').offset();
            orgElementTop = orgElementPos.top;

            if ($(window).scrollTop() >= (orgElementTop)) {
                // scrolled past the original position; now only show the cloned, sticky element.

                // Cloned element should always have same left position and width as original element.     
                orgElement = $('.original');
                coordsOrgElement = orgElement.offset();
                leftOrgElement = coordsOrgElement.left;
                widthOrgElement = orgElement.css('width');
                $('.cloned').css('left', leftOrgElement + 'px').css('top', 0).css('width', widthOrgElement).show();
                $('.original').css('visibility', 'hidden');

            } else {
                // not scrolled past the menu; only show the original menu.
                $('.cloned').hide();
                $('.original').css('visibility', 'visible');
            }

        }
        $(document).ready(function() {
            $('#showmenu').click(function() {
                $('#mm').slideToggle("fast");
            });
        });
    </script>
    <script type="99fe79a2dc79cc376044af24-text/javascript">
        // for scroll advert div

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 1900) {
                jQuery('.totop').stop().animate({
                    right: '10px'
                }, {
                    duration: 200
                });
            } else {
                jQuery('.totop').stop().animate({
                    right: '-345px'
                }, {
                    duration: 200
                });
            }
        });
        $(document).on('click', '.close_box', function() {
            $(this).parent().fadeTo(300, 0, function() {
                $(this).remove();
            });
        });
    </script>

    <script type="99fe79a2dc79cc376044af24-text/javascript">
        $(document).ready(function() {

            // hide #back-top first
            $("#back-top").hide();

            // fade in #back-top
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });
                $('#back-top a').bind("mouseover", function() {
                        var color = $('#back-top').css("background-color");

                        $('#back-top').css("background", "");

                        $(this).bind("mouseout", function() {
                            $('#back-top').css("background", color);
                        })
                    })
                    // scroll body to 0px on click
                $('#back-top a').click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });

        });
    </script>
    <div id="back-top">
        <a href="#top"><span style="display: block;"><div class="scroll-to-top" style="display: block;"><span class="glyphicon glyphicon-menu-up"></span></div></span></a>
    </div>
    <script src="{{ asset('mzamin/js/rocket-loader.min.js')}}" data-cf-settings="99fe79a2dc79cc376044af24-|49" defer></script>


@endsection

