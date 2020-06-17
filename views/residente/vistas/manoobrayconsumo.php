<?php require 'views/residente/layouts/header.php';?>

<div class="modal">
    <div class="modal__content">
        <form action="" method="">
            <p>Agregar cuadrilla</p>
            <div>
                <input type="number"  placeholder="Código proyecto" id="codeproyecto" name="codeproyecto" required>
            </div>
            <div>
                <input type="text"  placeholder="Nombre" id="nombreproyecto" name="nombreproyecto" required>
            </div>
            <div>
                <input type="text"  placeholder="Ubicación" id="ubicacion" name="ubicacion" required>
            </div>
            <div>
                <input type="text"  placeholder="Cuadrilla" id="cuadrilla" name="cuadrilla" required>
            </div>
            <div>
                <input type="date"  placeholder="Fecha" id="fecha" name="fecha" required>
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
                    <div class="sublista">
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Rendimiento de mano de obra
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Control de Materiales
                        </li>
                    </div>

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
                        Control de materiales
                    </h2>
                    <i class="fas fa-backspace atras"></i>
                </div>

                <div class="opciones-manoDeobra">
                    <!-- <a href="">Control de materiales</a> -->
                    <a href="">Inventario de materiales</a>
                </div>

                <div class="vista-proyecto__table">
                    <div class="opciones-proyecto">
                        <form action="" class="buscar" method="">
                            <input type="text" placeholder="Buscar material" name="" id="" required>
                            <button type="submit">Buscar</button>
                        </form>
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
                        <div class="mpup">
                            <li>Material</li>
                            <li>Proyectado</li>
                            <li>Utilizado en obra</li>
                            <li>Perdidas</li>
                        </div>
                        <div class="namedatos">
                            <div class="">
                                <p>Nombre</p>
                                <p>UM</p>
                            </div>
                            <div class="">
                                <p>Cantidad</p>
                                <p>Costo</p>
                            </div>
                            <div class="">
                                <p>Cantidad</p>
                                <p>Costo</p>
                            </div>
                            <div class="">
                                <p>Cantidad</p>
                                <p>Costo</p>
                            </div>
                        </div>
                        <div class="datostabla">
                            <div class="">
                                <p>Cemento</p>
                                <p>45.2 KG</p>
                            </div>
                            <div class="">
                                <p>13</p>
                                <p>$ 300.000</p>
                            </div>
                            <div class="">
                                <p>45</p>
                                <p>900000</p>
                            </div>
                            <div class="">
                                <p>30</p>
                                <p>$ 600.000</p>
                            </div>
                        </div>
                        <div class="datostabla">
                            <div class="">
                                <p>Cemento</p>
                                <p>45.2 KG</p>
                            </div>
                            <div class="">
                                <p>13</p>
                                <p>$ 300.000</p>
                            </div>
                            <div class="">
                                <p>45</p>
                                <p>900000</p>
                            </div>
                            <div class="">
                                <p>30</p>
                                <p>$ 600.000</p>
                            </div>
                        </div>
                        <div class="datostabla">
                            <div class="">
                                <p>Cemento</p>
                                <p>45.2 KG</p>
                            </div>
                            <div class="">
                                <p>13</p>
                                <p>$ 300.000</p>
                            </div>
                            <div class="">
                                <p>45</p>
                                <p>900000</p>
                            </div>
                            <div class="">
                                <p>30</p>
                                <p>$ 600.000</p>
                            </div>
                        </div>
                        <div class="datostabla">
                            <div class="">
                                <p>Cemento</p>
                                <p>45.2 KG</p>
                            </div>
                            <div class="">
                                <p>13</p>
                                <p>$ 300.000</p>
                            </div>
                            <div class="">
                                <p>45</p>
                                <p>900000</p>
                            </div>
                            <div class="">
                                <p>30</p>
                                <p>$ 600.000</p>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </article>
</section>

<script src="<?= URL ?>public/js/main.js"></script>

<?php require 'views/residente/layouts/footer.php';?>