$(document).ready(function(){
    $(window).scroll(function(){
        if (this.scrollY >20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
    });
    //toggle menu/nav-bar script//
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
        
    });

});