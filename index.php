<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--===== HEADER START =====-->
    <?php include 'templates/header.html'; ?>
    <!--===== HEADER END =====-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HZS7D36V2F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HZS7D36V2F');
</script>

    
</head>
<body>


    <!--===== BACKGROUND START =====-->
    <?php include 'templates/components/background.html'; ?>
    <!--===== BACKGROUND END =====-->


    <!--===== MENU START =====-->
    <?php include 'templates/components/menu.html'; ?>
    <!--===== MENU END =====-->

    <!--===== NAV START =====-->
    <?php include 'templates/components/nav.html'; ?>
    <!--=====NAV END =====-->

    <!--===== DOTS START =====-->
    <?php include 'templates/components/dots.html'; ?>
    <!--===== DOTS END =====-->

    <!--===== INICIO START =====-->
    <?php include 'templates/layouts/inicio.html'; ?>
    <!--===== INICIO END =====-->

    <!--===== NOSOTROS START =====-->
    <?php include 'templates/layouts/nosotros.html'; ?>
    <!--===== NOSOTROS END =====-->

    <!--===== PORTAFOLIO START =====-->
    <?php $portafolio = include 'config/portafolio.php'; ?>
    <?php include 'templates/layouts/portafolio.php'; ?>
    <!--===== PORTAFOLIO END =====-->

    <!--===== VIDEO START =====-->
    <?php /*include 'templates/layouts/video.html';*/ ?>
    <!--===== VIDEO END =====-->

    <!--=====  CONTACTO START =====-->
    <?php include 'templates/layouts/contacto.php'; ?>
    <!--=====  CONTACTO END =====-->

    <!--=====  SCRIPTS START =====-->
    <?php include 'templates/scripts.html'; ?>
    <!--=====  SCRIPTS END =====-->
    
</body>
</html>