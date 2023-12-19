<?php
require_once('layout/header.php');
require_once('function/registerOrator.php');

$oradores = getOradores();

?>

<body>
    <!--Menú Superior-->
    <header class="header">
        <?php
        require_once('./layout/navbar.php');
        ?>
        <section class="Conf" id="Conferencias">
            <h1 class="h1">Conf. Bs.As.</h1>
            <p class="p1">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el
                conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a
                miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos
                para tí.
                ¡Te esperamos!</p>
            <div class="Pancarta">
                <a class="btnTransparent textBoton" href="#FormularioOrador">Quiero ser Orador</a>
                <a class="btnGreen textBoton" href="ticket.php">Comprar Tickets</a>
            </div>
        </section>
    </header>
    <!--Cuerpo de la Pagina-->
    <main class="main">
        <!--Seccion de Oradores-->
        <section id="Oradores">
            <h2>
                <div>CONOCE A LOS</div>ORADORES
            </h2>

            <div class="container text-center shadow-sm">
                <div class="row justify-content-md-center">
                    <?php
                    foreach ($oradores as $key => $orador) {
                    ?>
                        <div class="col-md-4">
                            <div class="card mx-auto">
                                <img src="<?= $orador['patch_file'] ?>" class="card-img-top img-fluid rounded-4" alt="...">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <?php
                                        $tags = explode('|', $orador['tags']);
                                        $badge = ['text-bg-primary', 'text-bg-danger', 'text-bg-success', 'text-bg-warning', 'text-bg-info', 'text-bg-light', 'text-bg-dark'];
                                        foreach ($tags as $key => $tag) {
                                            echo '<span class="badge ' . $badge[$key] . '">' . $tag . '</span>';
                                        }
                                        ?>
                                        <!-- <span class="badge text-bg-primary">Primary</span>
                                        <span class="badge text-bg-danger">Danger</span> -->
                                    </div>
                                    <div class="col-md-12">
                                        <p class="lead fw-bolder h3"><?= $orador['nombre'] . ' ' . $orador['apellido'] ?>.</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="lead"><?= $orador['tema'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!--Seccion de BsAs Octubre-->
        <section id="HorayFecha">
            <div class="seccion3">
                <div class="seccion3Imagen">
                    <img src="./imagenes_integrador_front/honolulu.jpg" width="600Px" height="" loading="lazy" alt="Mar de PLata">
                </div>
                <div class="Seccion3Texto">
                    <h2 class="h2">Bs As Octubre</h2>
                    <p class="p2">Buenos Aires es la provincia y localidad más grande del estado de Argentina. En los
                        Estados Unidos, Honolulu es la más sureña de entre las principales ciudades estadounidenses.
                        Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu,
                        la ciudad y el condado de Honolulu han formado una ciudad condado consolidada que cubre toda la
                        ciudad (aproximadamente 600 km2. de superficie).
                    </p>
                    <a href=""></a>
                </div>
            </div>
        </section>
        <!--Seccion de Formulario-->
        <section id="FormularioOrador" class="FormularioOrador pb-5">
            <div>
                <h2 class="title">
                    Conviertete en un <p>Orador</p>
                </h2>
                <p class="subTitle">Anótate como orador para dar una charla ignite. ¡Cuéntanos de qué quieres hablar!</p>
                <div class="col-md-12">
                    <div class="row g-3">

                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-1 col-md-12">
                                            <input name="nombre" type="text" class="form-control" id="floatingNombre" placeholder="Nombre" style="width: 100%;">
                                            <label for="floatingNombre">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-1 col-md-12">
                                            <input name="apellido" type="text" class="form-control" id="floatingApellido" placeholder="Apellido" style="width: 100%;">
                                            <label for="floatingApellido">Apellido</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-1">
                                    <input name="mail" type="email" class="form-control" id="floatingEmail" placeholder="Correo Electronico">
                                    <label for="floatingEmail">Email</label>
                                </div>
                                <div class="row">
                                    <div class="form-floating mb-1">
                                        <textarea name="tema" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="width: 100% !important; height: 100px"></textarea>
                                        <label for="floatingTextarea">Tema a tratar</label>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-6 offset-md-3 ">
                                        <button type="submit" name="enviar" value="registerOrator" class="btn btn-success col-md-12">Success</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=" col-md-3"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Pie de la Pagina-->
    <?php
    require_once('./layout/footer.php');
    ?>
</body>

</html>