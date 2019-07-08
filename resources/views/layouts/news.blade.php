
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
    @yield('title')
</title>
<meta name="keywords" content="manabzamin, mzamin, manab zamin, daily manabzamin, মানবজমিন, manob jomin, bangla newspaper, bangladeshi newspaper, bd newspaper, bangladesh newspaper, online newspaper, bangla tabloid, bengali tabloid, bangla daily, bangladesh news, bd online news, exclusive news, top news, bangla online news, breaking news, world news, politics, bangladesh, bangladesh cricket, sports, technology news, entertainment, health, mental health, sheikh hasina, Khaleda zia, awami league, bnp বাংলাদেশ, দৈনিক পত্রিকা, সংবাদপত্র, খবর, ট্যাবলয়েড, অনলাইন, সংবাদ, বাংলা সংবাদ, আজকের পত্রিকা, শেখ হাসিনা, খালেদা জিয়া, আওয়ামি লীগ, বিএনপি, খেলা, ক্রিকেট, ফুটবল, ইংলিশ প্রিমিয়ার লীগ, স্প্যানিশ লীগ, চ্যাম্পিয়ন্স লীগ, বিনোদন, ঢালিউড, বলিউড, রাজনীতি, বাণিজ্য, ভারত, দেশ, বিদেশ, প্রবাসী, মফস্বল, তথ্য প্রযুক্তি, সাস্থ্য, শরীর ও মন, সরকার, অপরাধ, দুর্ঘটনা,ক্রাইম, রোহিঙ্গা">
<meta name="description" content="Bangladesh-based Tabloid Daily Newspaper, ranked in the Top 500 in the World, offering the latest Politics, Entertainment and Sports news from around the globe.">
<link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="theme-color" content="#db5945">
<meta name="fb:app_id" property="fb:app_id" content="">
<meta property="fb:pages" content="302368019849442">

<script src="{{ asset('mzamin/js/jquery.min.js')}}" type="99fe79a2dc79cc376044af24-text/javascript"></script>
<link href="{{ asset('mzamin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('mzamin/css/custom.css')}}" rel="stylesheet">





<script async src="{{ asset('mzamin/js/js_2')}}" type="99fe79a2dc79cc376044af24-text/javascript"></script>
<script type="99fe79a2dc79cc376044af24-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126024988-1');
</script>


<script type="99fe79a2dc79cc376044af24-text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
		setTimeout(function(){
  		$('#myModal').modal('hide')
		}, 7000);
    });
</script>
<script type="99fe79a2dc79cc376044af24-text/javascript">
   // RITSADS
    window.pgjs = window.pgjs || {};
    pgjs.gdpr = pgjs.gdpr || {};
    pgjs.publisher = pgjs.publisher || {};
    pgjs.publisher.name = 'http://mzamin.com/';
    pgjs.publisher.privacyPolicy = 'http://mzamin.com/privacy-policy.php';
    pgjs.publisher.logo = 'http://mzamin.com/asset/images/logos.png';
    pgjs.gdpr.consentDuration = 90;
    pgjs.publisherCookieWrap = function() {
      pgjs.loadJS('//m2d.m2.ai/pghb.mzamin.desktop.homepage.js');
      pgjs.loadJS('https://www.googletagmanager.com/gtag/js?id=UA-126024988-1');
      window.dataLayer=window.dataLayer||[];
      function gtag(){ dataLayer.push(arguments); }
      gtag('js',new Date());
      gtag('config','UA-126024988-1');
    }
</script>
<script src="{{ asset('mzamin/js/pg.js')}}" type="99fe79a2dc79cc376044af24-text/javascript"></script>

<script async src="{{ asset('mzamin/js/live-score.min.js')}}" type="99fe79a2dc79cc376044af24-text/javascript"></script>
<script type="99fe79a2dc79cc376044af24-text/javascript">
        jQuery(document).ready(function($){$ ('.my-plugin-cricket-live-score').liveScore(); });
</script>
</head>


<body>
    @yield('header')

    {{-- START Container --}}
    
    @yield('content')

    {{-- END MainContainer --}}
    
    @yield('footer')
</body>
</html>
