//slide
$(function(){
    const $slides = $('.uiux-banr>ul');
    const $pagination = $('.uiux-banr>ol.pagination>li');
    const $btnPrev = $('.uiux-banr>.prev');
    const $btnNext = $('.uiux-banr>.next');

    let nowIdx = 0;
    let intervalKey = null;
    let noEventTime = 0;
    let aniChk = false;

    //시간체크 함수
    const timeCheck = function(){
        setInterval(function(){
            noEventTime++;

        	// console.log("noEventTime=",noEventTime);

            if(noEventTime>4){
                autoPlay();
            }
        },1000);
    };
    

    //슬라이드 이동 함수
    const moveSlide = function(){

        noEventTime = 0;
        aniChk = true;

        $slides.stop().animate({
            left:-1100*nowIdx
        },1000);
        
        $pagination.eq(nowIdx).addClass('on').siblings().removeClass('on');
    };


    //자동재생정지 함수
    const autoPlay = function(){
        noEventTime = 0;
        
        intervalKey = setInterval(function(){
            if(nowIdx<3){
                nowIdx++;
            }else{
                nowIdx = 0
            }
            moveSlide();            
        },3500);
    };
    const autoStop = function(){
        clearInterval(intervalKey);
    };


    // 클릭이벤트
    $pagination.on('click', function(evt){
        evt.preventDefault();
        nowIdx = $pagination.index(this);
        
        autoStop();
        moveSlide();
    });
    $btnPrev.on('click', function(evt){
        evt.preventDefault();
        
        autoStop();

        if(nowIdx>0){
            nowIdx--;
        }else{
            nowIdx = 3
        }
        moveSlide();
    });
    $btnNext.on('click', function(evt){
        evt.preventDefault();
        
        autoStop();
        
        if(nowIdx<3){
            nowIdx++;
        }else{
            nowIdx = 0
        }
        moveSlide();
    });


    // 마우스 움직임
    $slides.on("mouseenter mousemove", function(){
        autoStop();
        noEventTime = 0;
    });
    
    
    // 새로고침
    $(window).on('load', function(){
        clearInterval(intervalKey);
        
        autoPlay();
        timeCheck();
    });

});