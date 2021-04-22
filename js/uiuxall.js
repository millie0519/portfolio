
// uiux concept도출
$(function(){
    
    const $mnu = $('#uiux-concept>.content>.mnu>ul>li');
    let nowIdx = 0;
    
    $mnu.on('click', function(evt){
        evt.preventDefault();
        
        let arrArticleTop = [];
    
        arrArticleTop[0] = $('#uiux-concept .content').offset().top;
        arrArticleTop[1] = $('#uiux-concept .scenario').offset().top+40;
        arrArticleTop[2] = $('#uiux-concept .contentplan').offset().top;

        nowIdx = $mnu.index(this);

        $('html,body').stop().animate({
            scrollTop : arrArticleTop[nowIdx]
        });
    });
});

// uiux 페이지 리뉴얼
$(function(){
    const $testList = $('#uiux-renewal .UItest>.txt>ul>li');

    const $mainTit = $('#uiux-renewal .UItest>.txt>.big>h5');
    const $mainEn = $('#uiux-renewal .UItest>.txt>.big>span');
    const $mainText = $('#uiux-renewal .UItest>.txt>.big>p');

    let nowIdx = 0;

    
    $testList.on('click', function(){
        nowIdx = $testList.index(this);
        
        $mainTit.text($testList.eq(nowIdx).children('.tit').text());
        $mainEn.text($testList.eq(nowIdx).children('.tit2').text());
        $mainText.text($testList.eq(nowIdx).children('p').text());
        
    });
});

//uiux 맛집앱 - 프로토타입 텍스트 체크박스
$(function(){
    const $exp = $('#uiux-app>.prototype>.txt>.content>.case>ul>li>.exp');
    const $check = $('#uiux-app>.prototype>.txt>.mnu>.checkbox>#exp');

    $check.on('click', function(){
        $exp.toggle();
    });
});

//uiux 맛집앱 - 프로토타입 case 전환
$(function(){
    const $mnu = $('#uiux-app>.prototype>.txt>.mnu>ol>li');
    const $case = $('#uiux-app>.prototype>.txt>.content>.case');
    const $shadow = $('#uiux-app>.prototype .shadow');

    let nowIdx = 0;

    $mnu.on('click', function(evt){
        evt.preventDefault();

        nowIdx = $mnu.index(this);
        $case.eq(nowIdx).fadeIn(1500).siblings().hide();
        $case.find('.shadow').hide();
        
        $(this).addClass('on').siblings().removeClass('on');
    });

});

//uiux 맛집앱 - 프로토타입 라이트박스
$(function(){
    const $prototype = $('#uiux-app>.prototype>.txt>.content>.case>ul>li');
    const $popImg = $('#uiux-app>.prototype>.txt>.content>.case>ul>li>.frame');

    $('#uiux-app>.prototype>.txt>.content>.case01>ul>li').last().after('<div class="shadow"></div>');
    $('#uiux-app>.prototype>.txt>.content>.case02>ul>li').last().after('<div class="shadow"></div>');
    const $shadow = $('#uiux-app>.prototype .shadow');

    const $clse = $('.clse');

    let nowIdx = 0;

    $popImg.on('mouseenter', function(){
        $(this).find('img').css({transform: 'scale(1.1)'});
    });
    
    $popImg.on('mouseleave', function(){
        $(this).find('img').css({transform: 'initial'});
    });

    $popImg.on('click', function(){
        nowIdx = $prototype.index(this);

        $(this).parent().find('.pop').show();
        $shadow.show();
        $(this).parent().find('.clse').show();

        $(this).css({'z-index':'1000'});
        $(this).parent().find('.pop').css({'z-index':'1000'});

        $(this).find('img').css({transform: 'scale(1.1)'});
        $(this).off('mouseleave');
    })

    const hides = function(){
        $clse.hide();
        $('.pop').hide();
        $shadow.hide();
    };

    const popFn = function(){
        $popImg.find('img').css({transform: 'initial'});
        $popImg.css({'z-index':'100'});
        $popImg.on('mouseleave', function(){
            $(this).find('img').css({transform: 'initial'});
        });
    };

    $shadow.on('click', function(){
        
        hides();
        popFn();        
    });
    $clse.on('click', function(evt){
        evt.preventDefault();

        hides();
        popFn();        
    });

});