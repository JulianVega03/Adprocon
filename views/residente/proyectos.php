<?php
require 'views/residente/layouts/header.php';
?>

<section class="panel-redisente">
    <article class="panel-redisente__content">
        <div class="panel-redisente__projects">
            <div class="panel-redisente__top">
                <h2 class="panel-redisente__projects--h2">Proyectos</h2>
            </div>
            <div class="panel-redisente__buscar">
                <input id="buscar" type="text" placeholder="Código de proyecto" name="buscar">
                <button type="submit">Buscar</button>
            </div>
            <div class="panel-redisente__bottom">
                <?php
                foreach ($proyectos as $proyecto) {
                ?>
                    <span class="panel-redisente__bottom__post" href="proyecto.html" style="padding:8px 3px">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt"><?= $proyecto->getNombre() ?> &nbsp;&nbsp; </p>
                            <a href="#" class="abriredit"><i class="far fa-edit"></i></a> &nbsp;
                            <a href="<?= URL ?>proyectos/eliminar/<?= $proyecto->getId_proyecto() ?>"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </span>

                    <div class="editar">
                        <div class="modal__content">
                            <form action="<?= URL ?>proyectos/nuevo" method="post">
                                <p>Editar proyecto</p>
                                <div>
                                    <input type="text" placeholder="Nombre" id="nombreproyecto" name="nombre" required>
                                </div>
                                <div style="display:flex; flex-direction:column;">
                                    <label for="">Responsable</label>
                                    <select name='responsable' class="form-control" required style="font-size:19px; margin-bottom: 10px">
                                        <?php
                                        foreach ($personas as $responsable) {
                                        ?>
                                            <option value="<?= $responsable->getCedula() ?>">
                                                <?= $responsable->getNombre() ?> <?= $responsable->getApellido() ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <input type="text" placeholder="descripcion" id="cuadrilla" name="descripcion" required>
                                </div>

                                <button class="btn-red" type="submit">Agregar</button>
                                <button class="btn-gris" type="reset">Borrar información</button>
                                <i class="fas fa-times-circle cerraredit"></i>
                            </form>
                        </div>
                    </div>


                <?php
                }
                ?>
            </div>
        </div>
        <div>
            <div class="agregar-proyecto">
                <div class="detalles-proyecto__content agregar-proyecto__content">
                    <div class="agregar-proyecto__title abrir">
                        <p>Agregar proyecto</p>
                        <!-- <span class="icon-notification"></span> -->
                        <p>
                            <i class="fas fa-plus"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="detalles-proyecto">
                <div class="detalles-proyecto__content">
                    <div class="detalles-proyecto__title">
                        <p>Detalles</p>
                        <!-- <span class="icon-notification"></span> -->
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <li><i class="fas fa-folder-open"></i>Proyecto</li>
                    <li><i class="fas fa-user"></i>Persona encargada</li>
                    <li><i class="far fa-file-alt"></i>Descripción</li>
                    <li><i class="far fa-calendar-alt"></i>Fecha creación</li>
                    <div class="acciones-proyecto">
                        <div>
                            <i class="fas fa-trash-alt"></i>
                            <i class="far fa-edit"></i>
                        </div>
                        <a href="">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<div class="modal">
    <div class="modal__content">
        <form action="<?= URL ?>proyectos/nuevo" method="post">
            <p>Agregar proyecto</p>
            <div>
                <input type="text" placeholder="Nombre" id="nombreproyecto" name="nombre" required>
            </div>
            <div style="display:flex; flex-direction:column;">
                <label for="">Responsable</label>
                <select name='responsable' class="form-control" required style="font-size:19px; margin-bottom: 10px">
                    <?php
                    foreach ($personas as $responsable) {
                    ?>
                        <option value="<?= $responsable->getCedula() ?>">
                            <?= $responsable->getNombre() ?> <?= $responsable->getApellido() ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div>
                <input type="text" placeholder="descripcion" id="cuadrilla" name="descripcion" required>
            </div>

            <button class="btn-red" type="submit">Agregar</button>
            <button class="btn-gris" type="reset">Borrar información</button>
            <i class="fas fa-times-circle cerrar"></i>
        </form>
    </div>
</div>

<br>
<br><br>
<br>
<br><br>
<br>
<br><br>

<script src="<?=URL?>public/"></script>
<?php
require 'views/residente/layouts/footer.php';
?>