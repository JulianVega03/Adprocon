<?php
require 'views/residente/layouts/header.php';
?>

<section class="vista-proyecto">
    <article class="vista-proyecto__content">
        <div class="vista-proyecto__left">
            <div class="vista-proyecto-menu">
                <h2 class="">Módulos del proyecto</h2>
                <div class="menu-modulos">
                    <a class="abrir-controlconcretos" href="">
                        <i class="fas fa-arrow-alt-circle-down"></i> Control de concretos premezclados.
                    </a>
                    <div class="sublista">
                        <li>
                            <i class="fas fa-chevron-right"></i> Rendimiento de mano de obra
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i> Control de Materiales
                        </li>
                    </div>

                    <a class="abrir-manoDeObra" href="">
                        <i class="fas fa-arrow-alt-circle-down"></i> Mano de obra y consumo de material.
                    </a>
                    <div class="sublista sublista2">
                        <li>
                            <i class="fas fa-chevron-right"></i> Rendimiento de mano de obra
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i> Control de Materiales
                        </li>
                    </div>

                    <a class="abrir-ControlAlquiler" href="">
                        <i class="fas fa-arrow-alt-circle-down"></i> Control de alquiler de maquinaria.
                    </a>
                    <div class="sublista sublista3">
                        <li>
                            <i class="fas fa-chevron-right"></i> Rendimiento de mano de obra
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i> Control de Materiales
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <div class="vista-proyecto__right">
            <div class="vista-proyecto__right__content">
                <div class="vista-proyecto__title">
                    <h2 class="vista-proyecto__txt">
                        Proyecto:
                        <p><?= $nombre_proyecto ?></p>
                    </h2>
                    <i class="fas fa-backspace atras"></i>
                </div>

                <div class="vista-proyecto__table">
                    <div class="opciones-proyecto">
                        <div class="add-actividad abrir">
                            <span>
                                <i class="fas fa-plus"></i>
                            </span>
                            <p>Agregar actividad al proyecto</p>
                        </div>
                    </div>

                    <table class="">
                        <thead class="">
                            <tr class="">
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Ubicación</th>
                                <th>Cuadrilla</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            foreach ($listado_actividades as $actividad) {
                            ?>
                                <tr>
                                    <th class="oscuro"><?= $actividad->getId() ?></th>
                                    <td><?= $actividad->getNombre() ?></td>
                                    <td><?= $actividad->getUbicacion() ?></td>
                                    <td><?= $actividad->getId_cuadrilla() ?></td>
                                    <td><?= $actividad->getFecha() ?></td>
                                    <td>
                                        <a href="">
                                            <i class="far fa-file-pdf"></i>
                                        </a>&nbsp;&nbsp;
                                        <a href="<?= URL ?>actividad/<?= $actividad->getId() ?>">
                                            <i class="far fa-eye"></i>
                                        </a>&nbsp;&nbsp;
                                        <a href="">
                                            <i class="far fa-edit"></i>
                                        </a>&nbsp;&nbsp;
                                        <a href="<?= URL ?>proyecto/eliminar/<?= $actividad->getId() ?>/<?= $actividad->getId_proyecto() ?>">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
</section>
<div class="modal">
    <div class="modal__content">
        <form action="<?= URL ?>proyecto/nuevaActividad" method="post">
            <p>Agregar actividad</p>
            <div>
                <input type="number" placeholder="Código proyecto" id="codeproyecto" name="proyecto" value="<?= $id_proyecto ?>" required style="display: none;">
            </div>
            <div>
                <input type="text" placeholder="Nombre" id="nombreproyecto" name="nombre" required>
            </div>
            <div>
                <input type="text" placeholder="Ubicación" id="ubicacion" name="ubicacion" required>
            </div>
            <div style="display:flex; flex-direction:column;">
                <label for="">Cuadrilla</label>
                <select name='cuadrilla' class="form-control" required style="font-size:19px; margin-bottom: 10px">
                    <?php
                    foreach ($cuadrillas as $cuadrilla) {
                    ?>
                        <option value="<?= $cuadrilla->getId() ?>">
                            <?= $cuadrilla->getId() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
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