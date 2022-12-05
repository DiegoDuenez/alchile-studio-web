

$('.portafolio__categories-item').click(function(){

    var category = this.id

    $([document.documentElement, document.body]).animate({
        scrollTop: $("#proyectos").offset().top
    }, 0);


     $.ajax({
        type: "POST",
        url: 'config/categorias.php',
        data: JSON.stringify({
            category,
        }),
        dataType: "json",
        success: function (response) {

            $('.portafolio__proyecto').css({
                "display":"none"
            })

            for(let i in response.categorias){

                $('.portafolio__proyecto#' +  response.categorias[i]).css({
                    "display":"flex"
                })

            }

            AOS.refresh();


        },
        error: function (e) {
        },
      });

})