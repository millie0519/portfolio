//배너
$(function(){
    const $banr = $('section.aboutme-banr');
    const $h2 = $('section.aboutme-banr>h2');
    const $li = $('section.aboutme-banr>ul>li');
    const $txt_box = $('section.aboutme-banr>ul>li>.txt-box');
    const $txt1 = $('section.aboutme-banr>ul>li>.txt-box>p.txt1');
    const $txt2 = $('section.aboutme-banr>ul>li>.txt-box>p.txt2');

    let nowIdx = 0;

    $banr.on('mouseleave', function(){
        $h2.fadeIn();
        $('section.aboutme-banr>ul>li>.mouse').fadeIn();
        $txt_box.fadeOut();
    });
    
    $li.on('mouseenter', function(){
        $h2.fadeOut();
        nowIdx = $li.index(this);
        $('section.aboutme-banr>ul>li>.mouse').eq(nowIdx).fadeOut();

        $txt_box.eq(nowIdx).fadeIn();
        $txt1.eq(nowIdx).css({top:-30,opacity:0}).stop().animate({
            top:0,opacity:1
        },400,"easeInOutCubic");
        $txt2.eq(nowIdx).css({top:100,opacity:0}).stop().animate({
            top:40,opacity:1
        },400,"easeInOutCubic");
    });
});


//좌우명
$(function(){
    const $name = $('.aboutme-content>.intro>.iam01>.motto>.name>p');
    const $cursor = $('.aboutme-content>.intro>.iam01>.motto>.finger');
    const $poem = $('.aboutme-content>.intro>.iam01>.motto>.poem>p');

    let idx = 0;
    let auto = null;

    $name.on('mouseenter', function(){
        idx = $(this).index();
        
        $(this).css({opacity:'80%'});
        $cursor.hide();
        $poem.eq(idx).fadeIn(500);

        auto = setTimeout(function(){
            $poem.fadeOut();
            $name.css({opacity:'100%'});
            $cursor.show();
        },4000);
    });
    
});
