<?php
require 'views/residente/layouts/header.php';
?>

<section class="vista-proyecto">
    <article class="vista-proyecto__content">
        <?php
        require 'views/residente/layouts/aside.php';
        ?>

        <div class="vista-proyecto__right">
            <div class="vista-proyecto__right__content">
                <div class="vista-proyecto__title">
                    <h2 class="vista-proyecto__txt">
                        Rendimiento de mano de obra
                    </h2>
                    <i class="fas fa-backspace atras"></i>
                </div>

                <div class="opciones-manoDeobra">
                    <a href="">Control de cuadrilla</a>
                    <a href="" style="font-weight: 400;">Registro de mano de obra</a>
                </div>

                <div class="vista-proyecto__table">
                    <div class="opciones-proyecto">
                        <div class="add-actividad">
                            <input type="text" placeholder="Buscar material" name="" id="" required>

                        </div>
                        <div class="icos-funciones">
                            <a href="actividad.html">
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="">
                                <i class="far fa-edit"></i>
                            </a>
                        </div>
                    </div>

                    <table class="">
                        <thead class="">
                            <tr class="">
                                <th>#</th>
                                <th>Metraje realizado</th>
                                <th>Rendimiento</th>
                                <th>Consumo</th>
                                <th>Observación</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <th class="oscuro">1</th>
                                <td>12345</td>
                                <td>Construcción segundo piso</td>
                                <td>Universidad Francisco de Paula Santander</td>
                                <td>Cuadrilla Dos</td>
                            </tr>
                            <tr>
                                <th class="oscuro">2</th>
                                <td>12345</td>
                                <td>Construcción segundo piso</td>
                                <td>Universidad Francisco de Paula Santander</td>
                                <td>Cuadrilla Dos</td>
                            </tr>
                            <tr>
                                <th class="oscuro">3</th>
                                <td>12345</td>
                                <td>Construcción segundo piso</td>
                                <td>Universidad Francisco de Paula Santander</td>
                                <td>Cuadrilla Dos</td>
                            </tr>
                            <tr>
                                <th class="oscuro">4</th>
                                <td>12345</td>
                                <td>Construcción segundo piso</td>
                                <td>Universidad Francisco de Paula Santander</td>
                                <td>Cuadrilla Dos</td>
                            </tr>
                            <tr>
                                <th class="oscuro">5</th>
                                <td>12345</td>
                                <td>Construcción segundo piso</td>
                                <td>Universidad Francisco de Paula Santander</td>
                                <td>Cuadrilla Dos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
</section>

<div class="modal">
    <div class="modal__content">
        <form action="" method="">
            <p>Agregar cuadrilla</p>
            <div>
                <input type="number" placeholder="Código proyecto" id="codeproyecto" name="codeproyecto" required>
            </div>
            <div>
                <input type="text" placeholder="Nombre" id="nombreproyecto" name="nombreproyecto" required>
            </div>
            <div>
                <input type="text" placeholder="Ubicación" id="ubicacion" name="ubicacion" required>
            </div>
            <div>
                <input type="text" placeholder="Cuadrilla" id="cuadrilla" name="cuadrilla" required>
            </div>
            <div>
                <input type="date" placeholder="Fecha" id="fecha" name="fecha" required>
            </div>
            <button class="btn-red" type="submit">Agregar</button>
            <button class="btn-gris" type="reset">Borrar información</button>
            <i class="fas fa-times-circle cerrar"></i>
        </form>
    </div>
</div>

<?php
require 'views/residente/layouts/footer.php';
?>