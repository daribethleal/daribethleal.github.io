<?php require_once('./layout/header.php'); ?>

<body>
    <!--Menú Superior-->
    <header class="header">
        <?php
        require_once('./layout/navbar.php');
        ?>
    </header>
    <main class="main">
        <!--Seccion de Cards de Descuentos-->
        <section id="ventas">
            <div class="contenedorVentas text-center">
                <div class="row p-3 m-0 border-0 bd-example m-0 border-0">
                    <div class="card1 col m-3" id="estudiante" onclick="calcularDescuento('estudiante')">
                        <div class="card-body" type="btn-primary">
                            <h3 class="card-title">Estudiante</h3> <br>
                            <p class="card-text">Tiene un Descuento de:</p> <br>
                            <h6>80%</h6> <br>
                            <p class="card-text">*Presente Documentación*</p>
                        </div>
                    </div>
                    <div class="card2 col m-3" id="trainee" onclick="calcularDescuento('trainee')">
                        <div class="card-body" type="btn-primary">
                            <h3 class="card-title">Trainee</h3> <br>
                            <p class="card-text">Tiene un Descuento de:</p> <br>
                            <h6>50%</h6> <br>
                            <p class="card-text">*Presente Documentación*</p>
                        </div>
                    </div>
                    <div class="card3 col m-3" id="junior" onclick="calcularDescuento('junior')">
                        <div class="card-body" type="btn-primary">
                            <h3 class="card-title">Junior</h3> <br>
                            <p class="card-text">Tiene un Descuento de:</p> <br>
                            <h6>15%</h6> <br>
                            <p class="card-text">*Presente Documentación*</p>
                        </div>
                    </div>
                </div>
            </div>
            <h2>
                <div class="display-6">Venta</div>Valor del Ticket: 200$
            </h2>
        </section>
        <!--Seccion de Formulario-->
        <section id="formularioVenta" class="formularioVenta">
            <div>
                <form action="">
                    <div>
                        <!--<label for="name"> Ingrese Su Nombre</label>-->
                        <input class="inputText" type="text" id="name" name="nombre" placeholder="Nombre" required>
                        <!--<label for="apellido"> Ingrese Su Apellido</label>-->
                        <input class="inputText" type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Ingrese su Email" required>
                    </div>
                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col">
                                Cantidad
                            </div>
                            <div class="col">
                                Categoria
                            </div>
                        </div>
                    </div>
                    <div>
                        <input class="inputCant" type="number" id="cantidad" name="cantidad" placeholder="Cantidad" required>
                        <select type="option" name="categoria" id="categoria" onchange="changeSelect(event)">
                            <option value="">--Por Favor Seleccione Categoria--</option>
                            <option value="noaplica">No Aplica</option>
                            <option value="estudiante">Estudiante</option>
                            <option value="trainee">Trainee</option>
                            <option value="junior">Junior</option>
                        </select>
                    </div>

                    <!--<div>
                        <input type="password" id="pass"  name="pass" placeholder="Contraseña" required>
                    </div>-->
                    <div>
                        <h4>Total a Pagar</h4>
                        <h2 id="totalAPagar">$0.00</h2>
                        <div>
                            <input class="BtnSubmit" type="submit" value="Resumen" required>
                            <input class="BtnSubmit" type="Reset" value="Borrar" required>
                            <!-- <input type="Reset" value="Limpiar Formulario" required>-->
                        </div>
                </form>
            </div>
        </section>
    </main>
    <!--Pie de la Pagina-->
    <?php require_once('./layout/footer.php'); ?>
    <script src="./js/ticket.js"></script>

</body>

</html>