<?php
require_once('./layout/header.php');
require_once('./function/login.php');
?>

<body>
    <!--Menú Superior-->
    <header class="header">
        <?php
        require_once('./layout/navbar.php');
        ?>
    </header>
    <main class="main">
        <div class="container p-5">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInpuUser1" class="form-label">Usuario</label>
                            <input type="user" name="user" class="form-control" id="exampleInpuUser1" aria-describedby="userHelp">
                        </div>
                        <div class="mb-3 pb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div id="passwordHelp" class="form-text"><?php echo $msg; ?></div>
                        <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </main>
    <?php require_once('./layout/footer.php'); ?>

</body>

</html>