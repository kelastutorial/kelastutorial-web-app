<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="description" content="<?php if($git_item['meta_desc']== ""){ echo $git_item['meta_desc'];}else{ echo $git_item['meta_desc'];} ?>">
            <meta name="google-site-verification" content="vx2BKrtMZlDr6RDQC3axVBKO_ppNiuUboR6I2tM93Bw"/>
            <meta name="robots" content="index,follow">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
            <meta name="author" content="Kelastutorial">
	        <meta name="language" content="Indonesia">
            <title>Kelastutorial - Belajar cepat dan mudah</title><script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
            <script type="text/javascript" src="<?php echo site_url('assets/js/materialize.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('assets/js/highlight.pack.js'); ?>"></script>
            <link rel="shortcut icon" href="<?php echo site_url('images/favicon.png'); ?>" type="image/x-icon" />
            <link rel="stylesheet" href="<?php echo site_url('assets/css/materialize.min.css'); ?>"/>
            <link rel="stylesheet" href="<?php echo site_url('assets/css/styles/atom-one-dark.css'); ?>"/>
            <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>"/>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
            <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
            <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'/>
            <script>
                //starting highlight.js
                hljs.initHighlightingOnLoad();
                
                //jquery
                $(document).ready(function(){
                    $(".button-collapse").sideNav();
                    var s = $(".left-sidebar-container");
                    var pos = s.position();                    
                    $(window).scroll(function() {
                        var windowpos = $(window).scrollTop();
                
                        if (windowpos >= pos.top) {
                            s.addClass("floating-sidebar");
                        } else {
                            s.removeClass("floating-sidebar"); 
                        }
                    });
                });        
                        
         		 //Google Analytics Code
        		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
          		ga('create', 'UA-90417889-1', 'auto');
          		ga('send', 'pageview');
            </script>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper navigation white ">
                <!--<a href="#!" class="brand-logo">KT</a>-->
                <div class="row">
                    <div class="col s12 m12 l8 input-field">
                        <div class="navigation-logo hide-on-tablet" style="border-right:0.5px solid #e0e0e0;height:64px;padding-top:11px;padding-right:30px;">
                            <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url('images/kelastutorial-logo.svg'); ?>" height="40px"/></a>
                        </div>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text" style="margin-left:-10px;">menu</i></a>
                        <form class="navigation-search-form">&nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true"></i>
                            <input class="hoverable" id="navigationsearchinput" style="border-radius:3px;background-color:#fff;padding:10px 10px 10px 10px;font-size:15px;" type="text" placeholder="CARI TUTORIAL"/>
                        </form>
                    </div>
                      
                    <div class="col s0 m0 l4 navigation-menu hide-on-tablet">
                        <a href="<?php echo site_url('tutorials'); ?>"  style="margin-right:30px;color:#000;">SEMUA TUTORIAL</a>
                        <!--
                        <a class="waves-effect red darken-1 white-text waves-light" style="margin-right:-12px;margin-bottom:-1px;padding:0 50px 0 50px;">MASUK</a>-->
                    </div>
                    
                </div>
            </div>
        </nav>