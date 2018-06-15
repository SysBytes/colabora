<div class="container-fluid ">
   <section class="section__1">
        <div class="cerrar">
            <i class="fa fa-times-circle-o fa-3x" aria-hidden="true"></i>
            <span>Cerrar</span>
        </div>
        <div class="video-container"></div>
        <div class="section-container">
            <div class="container-logo">
                <div class="logo-preview">
                    <div class="airplane animated bounceInLeft">
                        <img src="img/avion-2.png" class="img-responsive">
                    </div>
                    <div class="logo-complete animated fadeInDownBig">
                        <img src="img/logo_complete.png" class="img-responsive">    
                    </div>
                </div>
                <h1 class="logo animated fadeIn hidden">
                    <img src="img/logo_tbo.png" alt="The backoffice solution" title="The backoffice solution" class="img-responsive">
                </h1>
                <div class="play__video animated fadeIn hidden">
                    <h3>Conócenos</h3>
                    <div class="ico">
                        <i class="fa fa-play-circle-o fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
                
            </div>
            <p>
                <a href="#about" class="scroll-down">
                    <i class="fa fa-chevron-down fa-lg" aria-hidden="true"></i>
                </a>
            </p>
        </div>
   </section>

    <section class="section__2 container-fluid" id="about">
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-3 col-sm-offset-1 wow zoomInLeft">
                <img src="img/isotipo.png" class="img-responsive">
            </div> -->

            <div class="col-sm-10 col-sm-offset-1">
                <img src="img/isotipo.png" class="img-responsive wow zoomInLeft">
                <h2 class="title__nosotros wow lightSpeedIn">Nosotros</h2>
                <p>Entendemos que el principal enfoque del emprendedor es mejorar su producto/servicio, generar clientes y por ende DINERO!!</p>
                <p>Para el resto estamos nosotros, para apoyar al emprendedor en su día a día administrativo, contable, legal y demás labores que no dan “valor agregado” a la gestión, pero que deben hacerse.</p>
                <p>Queremos conocer muy bien su idea de negocio, para que MÁS que un Back Office, seamos aliados estratégicos y su principal apoyo en la puesta en marcha y crecimiento del emprendimiento.</p>

            </div>
        </div>
    </div>
    </section>


    <section class="section__3 container-fluid" id="do">
        <h2>Lo que hacemos</h2>

        <div class="content__hacemos hidden-xs">
            <?php include "hacemos.php"; ?>
        </div>

        <div class="content__hacemos-mobile visible-xs">
            <?php include "hacemos-mobile.php"; ?>
        </div>
    </section>

    <section class="section__4 container-fluid" id="client">
        <div class="container">
            <h2 class="wow bounceInDown">Nuestros Clientes</h2>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="quotes wow zoomIn">
                        <div class="quotes__item">
                            <div class="row quotes__client">
                                <div class="col-sm-2 client__pic">
                                    <img src="img/wikot.png" class="img-responsive">
                                </div>
                                <div class="col-sm-6">
                                    <p>Camilo Iturra</p>
                                    <p>CEO</p>
                                </div>
                                <div class="col-sm-4 client__start">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>"TBO nos ha permitido enfocarnos en el negocio mientras un equipo responsable y capaz se encarga del backoffice de la operación. Con ellos descansamos los temas de facturación, nómina e impuestos con la confianza de un socio de negocios"</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row quotes__control">
                <i class="fa fa-angle-double-left fa-lg arrow_prev" aria-hidden="true"></i>
                <i class="fa fa-angle-double-right fa-lg arrow_next" aria-hidden="true"></i>
            </div>
        </div>
    </section>

    <section class="section__5 container-fluid" id="contact">
        <div class="container">
            <h2 class="wow fadeInRight"><img src="img/ico-airplane.png">En qué te ayudamos</h2>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-xs-12 form__detail">
                    <form class="form-horizontal" id="formContact" role="form" action="" method="POST">
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-sm-6 contact__nombre wow zoomInLeft">
                                    <label for="nombre">* Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="col-sm-6 contact__apellido  wow zoomInLeft">
                                    <label for="apellido">* Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  wow zoomInLeft">
                            <label for="email">* Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group  wow zoomInLeft">
                            <label for="telefono">* Teléfono de contacto</label>
                            <p class="help-block">Por favor incluir indicativo de ciudad y país.</p>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group  wow zoomInLeft">
                            <label for="mensaje">* Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="7" required></textarea>
                        </div>
                        <div class="checkbox  wow zoomInLeft">
                            <p>* Por favor indica que has leído la información y aceptas la política de tratamiento de datos.</p>
                            <label>
                                <input type="checkbox" id="politica" name="politica" required> He leído la información y acepto la <a href="#" class="link">política de tratamiento de datos</a>
                            </label>
                        </div>
                        <div class="form-submit  wow zoomInLeft">
                            <button type="submit" class="btn btn-default btn-send">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="gracias hidden">
        <div class="gracias__mensaje">
            <h2>¡Gracias por tu mensaje!</h2>
            <h4>Pronto nos pondremos en contacto.</h4>
        </div>
    </div>
</div>