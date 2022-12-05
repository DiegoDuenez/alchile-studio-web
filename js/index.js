
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {

    var currentScrollPos = window.pageYOffset;

    if(currentScrollPos > 50){


        if (prevScrollpos > currentScrollPos) {
            $('.nav').css('top', '0').css('height', '4rem')
            $('.nav').css('background-color', 'var(--negro)')
        } else {
            $('.nav').css('top', '-150px')
            $('.nav').css('background-color', 'var(--negro)')

        }

        prevScrollpos = currentScrollPos;
    }
    else{
        $('.nav').css('height', '8rem')
        $('.nav').css('background-color', 'transparent')

    }
   

}



var $sections = $('section');
$(window).scroll(function () {
    var currentScroll = $(this).scrollTop();
    var $currentSection
    $sections.each(function () {
        var divPosition = $(this).offset().top;
        if (divPosition - 100 < currentScroll) {
            $currentSection = $(this);
        }
        if ($currentSection) {
            var id = $currentSection.attr('id');
            // if(id == 'portafolio-list' ){
            //     $('.portafolio__categories-list').hide()
            //     $('.portafolio__categories-list-outside').show()
        
            // }
            // else{
               
            // }
            
            if(id == 'portafolio-list' ){
                clearDots($('#dot-portafolio'))

                if(screen.width > 1185 ){
                    $('.portafolio__categories-list').hide()
                    $('.portafolio__categories-list-outside').show()
                }
                
            }
            else if(id == 'video'){
                clearDots($('#dot-portafolio'))
                if(screen.width > 1185 ){
                    $('.portafolio__categories-list').show()
                    $('.portafolio__categories-list-outside').hide()
                }
                
            }
            else{
                if(screen.width > 1185 ){
                    $('.portafolio__categories-list').show()
                    $('.portafolio__categories-list-outside').hide()
                }
                
                clearDots($('#dot-'+id))

            }
        }
    })

});



function clearDots(dot){

    let dots = document.getElementsByClassName("dots__dot-outer");
    for (i = 0; i < dots.length; i++) {
        $(dots[i]).empty()
    }
    $(dot).append(`
        <div class="dots__dot-inner"></div>
    `)
}


$('.menu__link').click(function(){
    clearLinks(this)
})

function clearLinks(link){

    let links = document.getElementsByClassName("menu__link");
    for (i = 0; i < links.length; i++) {
        $(links[i]).removeClass('menu__link--active')
    }
    $(link).addClass('menu__link--active')
}

