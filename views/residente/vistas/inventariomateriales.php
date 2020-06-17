<?php require 'views/residente/layouts/header.php';?>

<div class="modal">
    <div class="modal__content">
        <form action="" method="">
            <p>Agregar material a la actividad</p>
            <div>
                <input type="number"  placeholder="Código material" id="codematerial" name="codematerial" required>
            </div>
            <div>
                <input type="number"  placeholder="Código actividad" id="codeactividad" name="codeactividad" required>
            </div>
            <div>
                <input type="text"  placeholder="Unidad (UM)" id="unidadUM" name="unidadUM" required>
            </div>
            <div>
                <input type="text"  placeholder="Consumo de Material por UM" id="consumomaterial" name="consumomaterial" required>
            </div>
            <div>
                <input type="text"  placeholder="Costo Material" id="costomaterial" name="costomaterial" required>
            </div>
            <button class="btn-red" type="submit">Agregar</button>
            <button class="btn-gris" type="reset">Borrar información</button>
            <i class="fas fa-times-circle cerrar"></i>
        </form>
    </div>
</div>

<section class="vista-proyecto">
    <article class="vista-proyecto__content">
        <div class="vista-proyecto__left">
            <div class="vista-proyecto-menu">
                <h2 class="">Módulos del proyecto</h2>
                <div class="menu-modulos">
                    <a class="abrir-controlconcretos" href="">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                        Control de concretos premezclados.
                    </a>
                    <!-- <div class="sublista">
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Rendimiento de mano de obra
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Control de Materiales
                        </li>
                    </div> -->

                    <a class="abrir-manoDeObra" href="">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                        Mano de obra y consumo de material.
                    </a>
                    <div class="sublista sublista2">
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Rendimiento de mano de obra
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Control de Materiales
                        </li>
                    </div>

                    <a class="abrir-ControlAlquiler" href="">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                        Control de alquiler de maquinaria.
                    </a>
                    <div class="sublista sublista3">
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Rendimiento de mano de obra
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Control de Materiales
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <div class="vista-proyecto__right">
            <div class="vista-proyecto__right__content">
                <div class="vista-proyecto__title">
                    <h2 class="vista-proyecto__txt">
                        Control de Materiales
                    </h2>
                    <i class="fas fa-backspace atras"></i>
                </div>

                <div class="opciones-manoDeobra">
                    <a href="">Control de materiales</a>
                    <!-- <a href="">Registro de mano de obra</a> -->
                </div>

                <div class="vista-proyecto__table">
                    <div class="opciones-proyecto">
                        <div class="add-actividad">
                            <i class="fas fa-plus"></i>
                            <!-- <span>
                            </span> -->
                            <p class="abrir">Asignar material</p>
                        </div>
                        <div class="icos-funciones">
                            <a href="">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="">
                                <i class="fas fa-calculator"></i>
                            </a>
                            <a href="">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="">
                                <i class="far fa-trash-alt"></i>
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

<script src="<?= URL ?>public/js/main.js"></script>

<?php require 'views/residente/layouts/footer.php';?>