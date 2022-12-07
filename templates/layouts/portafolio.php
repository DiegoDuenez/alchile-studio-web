

<div class="portafolio__categories-list-outside">

    <ul>
        <li id="branding" class="portafolio__categories-item">Branding</li>
        <li id="fotografia" class="portafolio__categories-item">Fotografía</li>
        <li id="video" class="portafolio__categories-item">Video</li>
        <li id="diseño grafico" class="portafolio__categories-item">Diseño Gráfico</li>
        <li id="mkt" class="portafolio__categories-item">MKT</li>
        <li id="social media" class="portafolio__categories-item">Social Media</li>
        <li id="tomas con dron" class="portafolio__categories-item">Dron</li>
        <li id="diseño web" class="portafolio__categories-item">Diseño web</li>
        <li id="ads" class="portafolio__categories-item">ADS</li>
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
                    <li id="branding" class="portafolio__categories-item">Branding</li>
                    <li id="fotografia" class="portafolio__categories-item">Fotografía</li>
                    <li id="video" class="portafolio__categories-item">Video</li>
                    <li id="diseño grafico" class="portafolio__categories-item">Diseño Gráfico</li>
                    <li id="mkt" class="portafolio__categories-item">MKT</li>
                    <li id="social media" class="portafolio__categories-item">Social Media</li>
                    <li id="tomas con dron" class="portafolio__categories-item">Dron</li>
                    <li id="diseño web" class="portafolio__categories-item">Diseño web</li>
                    <li id="ads" class="portafolio__categories-item">ADS</li>

                </ul>
                
            </section>

        </div>

        

        <div class="portafolio__proyectos" id="proyectos">


            <?php foreach($portafolio['portafolio'] as $proyecto => $cliente): ?>

            <div class="portafolio__proyecto" data-aos="fade-left" id="<?php echo $cliente['id']; ?>">

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