

var nosotros = document.querySelector('#nosotros')


$(document).ready(function(){


    console.log($('#nosotros').position().top)

})


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {

    var currentScrollPos = window.pageYOffset;

    if(currentScrollPos > 50){

        if (prevScrollpos > currentScrollPos) {
            $('.nav').css('top', '0')
        } else {
            $('.nav').css('top', '-150px')

        }

        prevScrollpos = currentScrollPos;
    }


    // if(currentScrollPos >= $('#nosotros').position().top){
        
    //     clearDots($('#dot-nosotros'))
    // }
    
    if(currentScrollPos >= $('#inicio').position().top && currentScrollPos < $('#nosotros').position().top ){
        // $('#dot-nosotros').empty().append(`
        //     <div class="dots__dot-inner"></div>
        // `)
        clearDots($('#dot-inicio'))
    }
    else if(currentScrollPos >= $('#nosotros').position().top ){
        clearDots($('#dot-nosotros'))
    }
  
}


// $('.dots__dot-outer').click(function(){
//     clearDots(this)
// })

function clearDots(dot){

    let dots = document.getElementsByClassName("dots__dot-outer");
    for (i = 0; i < dots.length; i++) {
        $(dots[i]).empty()
    }
    $(dot).append(`
        <div class="dots__dot-inner"></div>
    `)
}


