<?php
require_once('./layout/header.php');
require_once('./function/oradores.php');

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

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tema</th>
                            <?php if ($_SESSION['user']['rol'] == 'administrador') { ?>
                                <th scope="col">Acciones</th>
                            <?php  } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach (getOradores() as $key => $value) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $value['nombre'] ?></th>
                                <td><?php echo $value['apellido'] ?></td>
                                <td><?php echo $value['mail'] ?></td>
                                <td><?php echo $value['tema'] ?></td>
                                <?php if ($_SESSION['user']['rol'] == 'administrador') { ?>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="editar_oradores.php?id=<?= $value['id_orador'] ?>" class="btn btn-outline-primary">Editar</a>
                                            <a href="del_oradores.php?id=<?= $value['id_orador'] ?>" class="btn btn-outline-primary">Borrar</a>
                                        </div>
                                    </td>
                                <?php  } ?>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!--Pie de la Pagina-->
    <?php
    require_once('./layout/footer.php');
    ?>
</body>