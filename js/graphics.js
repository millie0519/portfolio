// 갤러리

$(function(){
    const $thumbs = $('.graphic-gallery>.content>.thumbs>li>a');
    $thumbs.on('click',function(evt){
        evt.preventDefault();
        
        const imgs = $(this).attr('href');
        $('.graphic-gallery .instagram>.maincut>p').css({
            backgroundImage : 'url('+ imgs +')'
        });
        $('.graphic-gallery .frame>p').css({
            backgroundImage : 'url('+ imgs +')'
        });
    });

    $(window).on('load', function(){
        if($('section').hasClass('graphic-gallery')){
            $('#wrap').css({backgroundColor: '#aaa'});
        }
    });
});