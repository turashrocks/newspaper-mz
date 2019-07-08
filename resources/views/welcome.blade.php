
@extends('layouts.news')

@section('title')
Daily Manab Zamin:: The World's First and Largest Circulated Bengali Tabloid Daily
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
        <a href="{{ route('welcome')}}"><img class="img-responsive" src="{{ asset('mzamin/img/logos.png')}}"></a>
        <p style="margin-bottom:0; text-align:center;">ঢাকা, ২৮ জুন ২০১৯, শুক্রবার</p>
    </div>
    <div style="width:728px; height:90px; float:right; margin-top:5px;"></div>
</div>

@include('partials.search-partial')

@endsection


@section('content')

<div class="container">

        <script type="99fe79a2dc79cc376044af24-text/javascript">
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-15759254-1', 'auto');
            ga('send', 'pageview');
        </script>

        <script async src="{{ asset('mzamin/js/js_1')}}" type="99fe79a2dc79cc376044af24-text/javascript"></script>
        <script type="99fe79a2dc79cc376044af24-text/javascript">
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-15759254-1');
        </script>

        <script type="99fe79a2dc79cc376044af24-text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '{341057736337158}',
                    xfbml: true,
                    version: 'v2.11'
                });

                FB.AppEvents.logPageView();

            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <div class="row">
            <div class="col-sm-9" style="padding-left:0;">
                <div class="row">
                </div>
                <div style="height: 100px; width: 898px; margin-bottom: 30px;">
                    <a href="worldcupcricket.php"><img src="{{ asset('mzamin/img/wcb.jpg')}}"></a>
                </div>
                {{-- START of Section F1 --}}
                
                <div class="row" style="margin-bottom:30px;">
                    @foreach($posts->slice(0, 4) as $post)
                    <div class="col-sm-3">
                        <div class="top-image"><img class="img-responsive mzamin" src="<?php echo asset("storage/$post->image")?>" title="{{ $post->title }}">
                        <div class="top-caption"><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- END of Section F1 --}}

                
                <div class="col-sm-6" style="padding-left:0; padding-right:0;">
                {{-- START of Section FM --}}
                @foreach($posts as $post)
                    @if ($loop->last)
                        <a href="{{ route('news.show', $post->id) }}"><img class="img-responsive mzamin" src="<?php echo asset("storage/$post->image")?>" title="রানের চাকা সচল, তবুও স্বস্তি নেই লঙ্কান শিবিরে "></a>
                        <p class="subtitle"></p>
                        <p class="mainTitle"><a href="{{ route('news.show', $post->id) }}">{{ $post->title}} </a></p>
                        <p class="border-bottom">{{ $post->description}}</p>
                    @endif
                @endforeach
                    {{-- END of Section FM --}}

                {{-- START of Section F3 --}}
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-sm-6">
                            <div class="newsImg">
                                <img class="img-responsive mzamin" src="<?php echo asset("storage/$post->image")?>" title="{{ $post->title }}"></div>
                            <p class="subtitles"></p>
                            <p class="title"><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></p>
                        </div>
                        @endforeach
                    </div>
                    {{-- END of Section F3 --}}

                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 10px;">
                            <div class="fb-page" data-href="https://www.facebook.com/dailymanabzamin/" data-width="450" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false">
                                <blockquote cite="https://www.facebook.com/dailymanabzamin/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dailymanabzamin/">Daily Manab Zamin</a></blockquote>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6" style="padding-right:0;">
                  {{-- START of Section F2 --}}
                    <div class="row">
                        @foreach($posts->slice(5) as $post)
                        <div class="col-sm-6">
                            <div class="newsImg">
                                <img class="img-responsive mzamin" src="<?php echo asset("storage/$post->image")?>" title="{{ $post->title }}"></div>
                            <p class="subtitles"></p>
                            <p class="title"><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></p>
                        </div>
                        @endforeach
                    </div>
                    {{-- END of Section F2 --}}


                    {{-- START of Section F5--}}

                    <div class="col-sm-12" style="padding-right:0;">
           
                        @foreach($posts as $post)
                        <div class="sec-box-home">
                            <div class="col-sm-3">
                                <div class="sqr-img"><img class="img-responsive" src="<?php echo asset("storage/$post->image")?>" title=" ‘সঠিক পরিকল্পনা না থাকলে এগিয়ে যাওয়া সম্ভব হবে না’"></div>
                            </div>
                            <div class="col-sm-9">
                                <p class="subtitles">আলাপন</p>
                            <h4><a href="{{ route('news.show', $post->id) }}">{{ $post->title}}</a></h4></div>
                        </div>
                        @endforeach
               
                    </div>

                    {{-- END of Section F5--}}
                </div>

                <div class="row margin-top">
                    <div class="col-sm-12">
                        <div class="sec-box-home">
                            <div class="morenews">
                                <div class="col-sm-6">
                                    <ul>
                                        @foreach($posts as $post)
                                        <li>
                                            <p class="subtitles"></p>
                                            <a href="#">{{ $post->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li>
                                            <p class="subtitles">মানবতাবিরোধী অপরাধ</p>
                                            <a href="article.php?mzamin=178844">রণদা প্রসাদ হত্যায় টাঙ্গাইলের মাহবুবুরের ফাঁসির আদেশ</a>
                                        </li>
                                        <li>
                                            <p class="subtitles"></p>
                                            <a href="article.php?mzamin=178843">৭ রোহিঙ্গাকে পুলিশে দিলো পররাষ্ট্র মন্ত্রণালয়</a>
                                        </li>
                                        <li>
                                            <p class="subtitles"></p>
                                            <a href="article.php?mzamin=178842">ছাত্রদলের বিক্ষুব্ধদের আন্দোলনে মনোনয়নপত্র বিতরণ স্থগিত</a>
                                        </li>
                                        <li>
                                            <p class="subtitles">সিলেটে সংবাদ সম্মেলন</p>
                                            <a href="article.php?mzamin=178801"> ওসির বিরুদ্ধে অভিযোগ আওয়ামী লীগ নেতার</a>
                                        </li>
                                        <li>
                                            <p class="subtitles"></p>
                                            <a href="article.php?mzamin=178793"> পুলিশ নিয়োগে অনিয়মের অভিযোগে সাব-ইন্সপেক্টর বরখাস্ত: কনস্টেবল আটক</a>
                                        </li>
                                        <li>
                                            <p class="subtitles"></p>
                                            <a href="article.php?mzamin=178791"> খুলনয় জমিজমা নিয়ে বিরোধে এক বৃদ্ধ নিহত</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="height:auto; width: 300px;">
                    <div class="my-plugin-cricket-live-score"></div>
                </div>
                <div class="advert-cor" style="margin-top:0;"><ins data-adopt-zoneid="99" data-adopt-id="47214881145a1e254f726e01c27b1fa0"></ins>
                    <script async src="asyncjs.php" type="99fe79a2dc79cc376044af24-text/javascript"></script>
                </div>
                <div style="margin-bottom:20px;" id="Mzamin_Sidebar_Top"></div>
                {{-- START of Section Ad2 --}}
                <div class="advert-cor"><img src="{{ asset('mzamin/img/lalbagh.gif')}}"></div>
                {{-- END of Section Ad2 --}}

                {{-- START of Section Ad3 --}}
                <div class="advert-cor">
                    <a href="http://www.fsiblbd.com/" target="_blank"><img src="{{ asset('mzamin/img/fsib.gif')}}"></a>
                </div>
                {{-- END of Section Ad3 --}}

                <script id="GNR42969" type="99fe79a2dc79cc376044af24-text/javascript">
                    (function(i, g, b, d, c) {
                        i[g] = i[g] || function() {
                            (i[g].q = i[g].q || []).push(arguments)
                        };
                        var s = d.createElement(b);
                        s.async = true;
                        s.src = c;
                        var x = d.getElementsByTagName(b)[0];
                        x.parentNode.insertBefore(s, x);
                    })(window, 'gandrad', 'script', document, '//content.green-red.com/lib/display.js');
                    gandrad({
                        siteid: 5059,
                        slot: 42969
                    });
                </script>
                <div id="Mzamin_Sidebar_Mid"></div>

            </div>
        </div>
        <div class="row">
            <center>
                <div style="width:1190px; height: auto; margin:30px auto;">
                    <div id="Mzamin_MidView1"></div>
                </div>
            </center>
        </div>

    </div>

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

