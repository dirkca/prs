<script  type="text/javascript">
 $(document).ready(function(){

    //Twitter hover in footer
    $('li.twitter').hover(function(){
        $(this).children('a.alias').toggle();
    });
    //mobile navigation tools
    var $menu = $('#header #main_nav'),
        $menulink = $('.menu-toggle');
    $menulink.click(function() {
        $menulink.toggleClass('toggled');
        $menu.toggleClass('toggled');
        return false;
    });
    if($(window).width() >= 800) {
        linkDropdowns(true);
    } else {
        linkDropdowns(false);
    }
    $("#header .logo_and_nav #main_nav ul li").each(function() {
        if($(this).find("ul").length){  
            $(this).append('<a href="#" class="dropdown-toggle">&darr;</a>').stop();
        }
    });
    $(".dropdown-toggle").click(function(e) {
        $(this).siblings("ul").slideToggle(200);
        e.preventDefault();
    });
    function linkDropdowns(hoverOn) {
        if(hoverOn) {
            $('#quicklinks li, #main_nav li').hover(function(){
                $(this).children('ul').stop(true, true).show();
            }, function(){
                $(this).children('ul').stop(true, true).hide();
            });

        } else {
            $('#quicklinks li, #main_nav li').unbind('mouseenter mouseleave');
        }
    }
    $(window).resize(function() {

        if($(window).width() >= 800) {

            linkDropdowns(true);

        } else {

            linkDropdowns(false);

        }

    }).resize();
    //mobile nav select take value of option and make window go there
    $('.select_contain select').change(function () {
        window.location.href = $(this).val();
    });

    //Fake Select Toggle
    $('.select_contain.dropdown .select_toggle, .select_contain.tag .select_toggle').click(function(e){
        e.stopPropagation();
        if($('.select_contain.dropdown .select_toggle, .select_contain.tag .select_toggle').hasClass('active'))
        {
            $('.select_contain.dropdown .select_toggle, .select_contain.tag .select_toggle').removeClass('active');
            $('.select_contain.dropdown .select_toggle, .select_contain.tag .select_toggle').next('ul.select').hide();
        }
        $(this).toggleClass('active');
        $(this).next('ul.select').toggle();
    });
    
    $('.select_contain.dropdown .select_toggle').keydown(function(e){
        if(e.keyCode == 13) {
            $(this).click();
        }
    });
    
    $('html').click(function(){
        if($('.select_contain.dropdown .select_toggle, .select_contain.tag .select_toggle').hasClass('active'))
        {
            $('.select_contain.dropdown .select_toggle, .select_contain.tag .select_toggle').removeClass('active');
            $('.select_contain.dropdown .select_toggle, .select_contain.tag .select_toggle').next('ul.select').hide();
        }
    });
    
    $('.select_contain.dropdown ul.select li.option').click(function() {
        $('ul.select li.option').removeClass('selected');
        $(this).addClass('selected');
        var to = $(this).attr('name');
        var title = $(this).html();
        $(this).parent('ul.select').next('input').val(to);
        $(this).parent('ul.select').prev('.select_contain.dropdown .select_toggle').html('<a>'+title+'</a>');
        $(this).parent().prev('.select_contain.dropdown .select_toggle').click();
        $(this).parent('ul.select').next('input').focus();
    });
    
    $('.select_contain.dropdown ul.select li.option').each(function(){
        if($(this).hasClass('selected')) {
            var title = $(this).html();
            $(this).parent('ul.select').prev('.select_contain.dropdown .select_toggle').html('<a>'+title+'</a>');
        }
    });
    
    
    //Set some initial rotations
    $('body.home #banner_images .img1').not('html.lte9 body.home #banner_images .img1').rotate(30);
    $('body.home #banner_images .img2').not('html.lte9 body.home #banner_images .img2').rotate(-45);
    $('body.home #banner_images .img3').not('html.lte9 body.home #banner_images .img3').rotate(30);

    $('body.inside #banner_images .img1').not('html.lte9 body.inside #banner_images .img1').rotate(30);
    $('body.inside #banner_images .img2').not('html.lte9 body.inside #banner_images .img2').rotate(-30);
    $('body.inside #banner_images .img3').not('html.lte9 body.inside #banner_images .img3').rotate(30);
    $('body.inside #banner_images .img4').not('html.lte9 body.inside #banner_images .img4').rotate(-45);
});

    
    
    
    
    //News carousel on home page
    $(".news-items").carouFredSel({
        width        : "100%",
        auto         : false,
        prev         : ".prev",
        next         : ".next",
        align        : "left",
        scroll        : {
            easing    : "easeOutCirc",
            wipe    : true,
            duration    : 600
        },
        scroll  : 1,
        items    : {
            visible : 3
        }
    });
    
    
$(window).load(function() {
    //Home Images
    $('body.home #banner_images .img1').animate({
        top: 80
    }, 800, 'easeOutCirc');
    
    $('body.home #banner_images .img1').not('html.lte9 body.home #banner_images .img1').rotate({
        duration:800,
        animateTo:0,
        easing: $.easing.easeOutCirc
    });
    
    setTimeout(function(){
        $('body.home #banner_images .img2').animate({
            top: 60
        }, 800, 'easeOutCirc');
        
        $('body.home #banner_images .img2').not('html.lte9 body.home #banner_images .img2').rotate({
            duration:800,
            animateTo:7,
            easing: $.easing.easeOutCirc
        });
    }, 200);
    
    setTimeout(function(){
        $('body.home #banner_images .img3').animate({
            top: 40
        }, 800, 'easeOutCirc');
        
        $('body.home #banner_images .img3').not('html.lte9 body.home #banner_images .img3').rotate({
            duration:800,
            animateTo:-7,
            easing: $.easing.easeOutCirc
        });
    }, 400);
    
    //Inside Images
    $('body.inside #banner_images .img1').animate({
        top: 20
    }, 800, 'easeOutCirc');
    
    $('body.inside #banner_images .img1').not('html.lte9 body.inside #banner_images .img1').rotate({
        duration:800,
        animateTo:0,
        easing: $.easing.easeOutCirc
    });
    
    setTimeout(function(){
        $('body.inside #banner_images .img2').animate({
            top: 60
        }, 800, 'easeOutCirc');
        
        $('body.inside #banner_images .img2').not('html.lte9 body.inside #banner_images .img2').rotate({
            duration:800,
            animateTo:10,
            easing: $.easing.easeOutCirc
        });
    }, 200);
    
    setTimeout(function(){
        $('body.inside #banner_images .img3').animate({
            top: 34
        }, 800, 'easeOutCirc');
        
        $('body.inside #banner_images .img3').not('html.lte9 body.inside #banner_images .img3').rotate({
            duration:800,
            animateTo:0,
            easing: $.easing.easeOutCirc
        });
    }, 400);
    
    setTimeout(function(){
        $('body.inside #banner_images .img4').animate({
            top: 44
        }, 800, 'easeOutCirc');
        
        $('body.inside #banner_images .img4').not('html.lte9 body.inside #banner_images .img4').rotate({
            duration:800,
            animateTo:-15,
            easing: $.easing.easeOutCirc
        });
    }, 600);
    
});
</script>

