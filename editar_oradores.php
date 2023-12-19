<?php
require_once('./layout/header.php');
require_once('./function/oradores.php');

$orator = getOradoresById();
$tags = explode('|', $orator['tags']);

?>

<body>
    <!--Menú Superior-->
    <header class="header">
        <?php
        require_once('./layout/navbar.php');
        ?>
    </header>
    <!--Cuerpo de la Pagina-->
    <main class="main">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="" method="post">
                        <div class="mb-3 row">
                            <label for="staticOrador" class="col-md-2 col-form-label">Id Orador</label>
                            <div class="col-md-4">
                                <input type="hidden" name="id_orador" value="<?= $orator['id_orador'] ?>">
                                <span class="form-text"><?= $orator['id_orador'] ?></span>
                            </div>
                            <label for="staticEmail" class="col-md-2 col-form-label"></label>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputnombre" class="col-md-2 col-form-label">Nombre</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputnombre" name="nombre" value="<?= $orator['nombre'] ?>">
                            </div>
                            <label for="inputApellido" class="col-md-2 col-form-label">Apellido</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputApellido" name="apellido" value="<?= $orator['apellido'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputmail" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputmail" name="mail" value="<?= $orator['mail'] ?>">
                            </div>
                        </div>
                        <div class="row g-3 ">

                            <div class="form-check form-switch col-md-2">
                                <input class="form-check-input col-md-1" name="Tags[Javascrit]" <?php echo (in_array('Javascrit', $tags)) ? 'checked': '' ?>  type="checkbox" role="switch" id="flexSwitchCheckJavascript">
                                <label class="form-check-label col-md-2" for="flexSwitchCheckJavascript">Javascrit</label>
                            </div>
                            <div class="form-check form-switch col-md-2">
                                <input class="form-check-input col-md-1" name="Tags[React]" <?php echo (in_array('React', $tags)) ? 'checked': '' ?>  type="checkbox" role="switch" id="flexSwitchCheckReact">
                                <label class="form-check-label col-md-2" for="flexSwitchCheckReact">React</label>
                            </div>
                            <div class="form-check form-switch col-md-2">
                                <input class="form-check-input col-md-1" name="Tags[Vue]" <?php echo (in_array('Vue', $tags)) ? 'checked': '' ?>  type="checkbox" role="switch" id="flexSwitchCheckVue">
                                <label class="form-check-label col-md-2" for="flexSwitchCheckVue">Vue</label>
                            </div>

                            <div class="form-check form-switch col-md-2">
                                <input class="form-check-input col-md-1" name="Tags[Angular]" <?php echo (in_array('Angular', $tags)) ? 'checked': '' ?>  type="checkbox" role="switch" id="flexSwitchCheckAngular">
                                <label class="form-check-label col-md-2" for="flexSwitchCheckAngular">Angular</label>
                            </div>

                            <div class="form-check form-switch col-md-2">
                                <input class="form-check-input col-md-1" name="Tags[Negocios]" <?php echo (in_array('Negocios', $tags)) ? 'checked': '' ?>  type="checkbox" role="switch" id="flexSwitchCheckNegocios">
                                <label class="form-check-label col-md-2" for="flexSwitchCheckNegocios">Negocios</label>
                            </div>

                            <div class="form-check form-switch col-md-2">
                                <input class="form-check-input col-md-1" name="Tags[Startups]" <?php echo (in_array('Startups', $tags)) ? 'checked': '' ?>  type="checkbox" role="switch" id="flexSwitchCheckStartups">
                                <label class="form-check-label col-md-2" for="flexSwitchCheckStartups">Startups</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tema a Tratar</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tema"><?= $orator['tema'] ?></textarea>
                        </div>
                        <div class="mb-3 row">
                            <button type="submit" name="enviar" value="EditOrador" class="btn btn-primary col-md-4 offset-md-4 ">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
    <!--Pie de la Pagina-->
    <?php
    require_once('./layout/footer.php');
    ?>
</body>