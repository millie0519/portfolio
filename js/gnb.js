$(function(){
    const $mnu = $('header>nav>ul>li>a');
    $mnu.after('<div class="bg_lnb"></div>');
    const $bgmnu = $('header .bg_lnb');
    let nowIdx = 0;

    $('nav').on('mouseenter', function(){
        $('header ol').show();
        $('header .mnu_bg').show();
    });
    $('nav').on('mouseleave', function(){
        $('header ol').hide();
        $('header .mnu_bg').hide();
    });
    
    $mnu.on('mouseenter', function(){
        nowIdx = $mnu.index(this);
        let bgWidth = $mnu.eq(nowIdx).width();
        // console.log(bgWidth);

        $bgmnu.eq(nowIdx).stop().animate({
            width:bgWidth
        });
    });
    $mnu.parent('li').on('mouseleave', function(){
        $bgmnu.eq(nowIdx).stop().animate({
            width:0
        },200)
    });



});