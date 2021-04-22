// 배너
$(function(){
    const $slides = $('#webpofol>.portfolio>.visual>ul');
    const $pagination = $('#webpofol>.portfolio>.visual>.pagebox>.pagination>li');
    const $btnPrev = $('#webpofol>.portfolio>.visual>.pagebox>.btn>.prev');
    const $btnNext = $('#webpofol>.portfolio>.visual>.pagebox>.btn>.next');

    let nowIdx = 0;
    let oldIdx = nowIdx;

    //슬라이드 개수
    let totalSlide = 3;

    //슬라이드 개수에 따른 너비 조정
    slideWidth = function(){
        $slides.css({
            width:1100*totalSlide
        });
    };

    //이전 인덱스번호 추출
    const prevIdx = function(){
        oldIdx = nowIdx;

        if(nowIdx<1){
            nowIdx = totalSlide-1;
        }else{
            nowIdx--;
        }
    };
    //다음 인덱스번호 추출
    const nextIdx = function(){
        oldIdx = nowIdx;

        if(nowIdx<totalSlide-1){
            nowIdx++;
        }else{
            nowIdx=0;
        }
    };

    const pageNum = function(){
        $pagination.eq(nowIdx).show().siblings().hide();
    };
    const moveSlide = function(){
        $slides.stop().animate({
            left:-1100*nowIdx
        });
    };


    /* 작업과정 */
    const $prssBtn = $('#webpofol>.portfolio>.visual>ul>li>.btn>.prssBtn');
    const $cover = $('#webpofol>.portfolio>.visual-bottom>.cover');
    const $prssCont = $('#webpofol>.portfolio>.visual-bottom>.processlist>.box');


    const prssShow = function(){
        $cover.hide();
        $prssCont.eq(nowIdx).fadeIn().siblings().hide();
    };
    const coverShow = function(){
        $prssCont.hide();
        $cover.fadeIn();
    };

    $prssBtn.on('click', function(evt){
        evt.preventDefault();

        prssShow();
    });


    // 버튼 이벤트
    $btnPrev.on('click', function(evt){
        evt.preventDefault();
        
        prevIdx();
        moveSlide();

        pageNum();
        coverShow();
    });
    $btnPrev.on({
        'mouseover': function(){
            $(this).children().stop().animate({
                right:5
            });
        },
        'mouseleave': function(){
            $(this).children().stop().animate({
                right: 0
            });
        }
    });

    
    $btnNext.on('click', function(evt){
        evt.preventDefault();
        
        nextIdx();
        moveSlide();

        pageNum();
        coverShow();
    });
    $btnNext.on({
        'mouseover': function(){
            $(this).children().stop().animate({
                left:5
            });
        },
        'mouseleave': function(){
            $(this).children().stop().animate({
                left: 0
            });
        }
    });

});



//사전면접 리스트
$(function(){
    const $tit = $('#webpofol .apply>dl>dt>a');

    $tit.on('click', function(evt){
        evt.preventDefault();

        $(this).parent().toggleClass('on').next().slideToggle();
    });
});