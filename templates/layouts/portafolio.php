

<div class="portafolio__categories-list-outside">

    <ul>
        <li>Branding</li>
        <li>Fotografía</li>
        <li>Video</li>
        <li>Diseño Gráfico</li>
        <li>MKT</li>
        <li>Social Media</li>
    </ul>

</div>

<section class="portafolio" id="portafolio">

    <div class="portafolio__header">
        <h2 class="portafolio__title">
            Proyectos 
           <span>Recientes</span>
        </h2>
    </div>
    

    <div class="portafolio__container">

        <div class="portafolio__categories">
            
            <div class="portafolio__categories-header">

                <h3 class="portafolio__subtitle">Index.</h3>

            </div>

            <section class="portafolio__categories-list" id="portafolio-list">

                <ul>
                    <li>Branding</li>
                    <li>Fotografía</li>
                    <li>Video</li>
                    <li>Diseño Gráfico</li>
                    <li>MKT</li>
                    <li>Social Media</li>
                </ul>
                
            </section>

        </div>

        

        <div class="portafolio__proyectos">


            <?php foreach($portafolio['portafolio'] as $proyecto => $cliente): ?>

            <div class="portafolio__proyecto" data-aos="fade-left">

                <div class="portafolio__proyecto-header">
                   <div class="portafolio__proyecto-title">  <?php echo $proyecto ?></div> 
                   <div class="portafolio__proyecto-border"></div>
                </div>

                <div class="portafolio__proyecto-body">
                    
                    <div class="portafolio__proyecto-img">
                        <img src="<?php echo $cliente['img']; ?>" alt="<?php echo $cliente['imgAlt']; ?>">
                    </div>

                    <div class="portafolio__proyecto-descripcion">
                        <?php echo $cliente['descripcion']; ?>
                    </div>

                    <div class="portafolio__proyecto-info">

                        <div class="<?php echo $cliente['imgSize']; ?>">
                            <img src="<?php echo $cliente['imgLogo']; ?>" alt="<?php echo $cliente['imgAlt']; ?>">
                        </div>

                        <div class="portafolio__proyecto-lista">

                            <ul>
                                <?php foreach($cliente['listaServicios'] as $lista => $servicio): ?>
                                    <li> <?php echo $servicio; ?></li>
                                <?php endforeach; ?>
                                
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>