<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--===== HEADER START =====-->
    <?php include 'templates/header.html'; ?>
    <!--===== HEADER END =====-->
    
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
    <?php include 'templates/layouts/video.html'; ?>
    <!--===== VIDEO END =====-->

    <!--=====  CONTACTO START =====-->
    <?php include 'templates/layouts/contacto.php'; ?>
    <!--=====  CONTACTO END =====-->


    

<!-- 
<svg id="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" width="400" height="300" viewBox="-100 320 400 300">
  <path id="line" fill="none" stroke="#FF00E7" stroke-width="3" stroke-miterlimit="10" y="0" d="M2 0c0 56.57 100 103.43 100 160C102 216.57 2 263.43 2 320c0 56.57 100 103.43 100 160C102 536.57 2 583.43 2 640c0 56.57 100 103.43 100 160"/>
</svg> -->

<!-- <svg width="100%" height="20%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="myID" d=""/></svg> -->

    <!--=====  SCRIPTS START =====-->
    <?php include 'templates/scripts.html'; ?>
    <!--=====  SCRIPTS END =====-->
    
</body>
</html>