//Starting highlight.js
hljs.initHighlightingOnLoad();

//Jquery
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