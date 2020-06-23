<?php
require 'views/residente/layouts/header.php';
?>

<section class="actividad">
    <article class="actividad__content">
        <div class="actividad-titles">
            <div class="actividad-titles__content">
                <!-- <div class="actividad-titles__project"> -->
                <h4 class="actividad-titles__project">
                    Proyecto:
                    <p><?= $proyecto->getNombre() ?></p>
                </h4>
                <!-- </div> -->
                <!-- <div class="actividad-titles__name"> -->
                <h1 class="actividad-titles__name">
                    <i class="fas fa-chevron-right"></i>
                    Actividad:
                    <span>
                        <p><?= $actividad->getNombre() ?></p>
                    </span>
                </h1>
                <!-- </div> -->
            </div>
            <i class="fas fa-backspace atras"></i>
        </div>
        <div class="opciones-actividad">
            <div class="opciones-actividad__content">
                <i class="fas fa-home"></i>
                <li>Suministro de concreto</li>
                <li>Mano de obra</li>
                <li>Consumos y perdidas</li>
            </div>
        </div>
        <div class="opciones-proyecto">
            <div class="add-actividad">
                <span>
                    <i class="fas fa-plus"></i>
                </span>
                <p class="abrir">Agregar suministro de concreto</p>
            </div>
            <!-- <div class="icos-funciones">
                <i class="far fa-file-pdf"></i>
                <i class="far fa-eye"></i>
                <i class="far fa-edit abriredit"></i>
                <i class="far fa-trash-alt"></i>
            </div> -->
        </div>
        <table class="">
            <thead class="">
                <tr class="">
                    <th>#</th>
                    <th>Id actividad</th>
                    <th>Empresa concretera</th>
                    <th>Elemnto vaciado</th>
                    <th>Fecha</th>
                    <th>Sello de seguridad</th>
                    <th>Hora salida</th>
                    <th>Hora fin</th>
                    <th>Volumen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <th class="oscuro">1</th>
                    <td>002</td>
                    <td>Palustre SA</td>
                    <td>Cemento Diamante</td>
                    <td>22/06/2020</td>
                    <td>064</td>
                    <td>06:34 am</td>
                    <td>07:23 am</td>
                    <td>200</td>
                    <td>
                    <div class="icos-funciones">
                        <i class="far fa-file-pdf"></i>
                        <i class="far fa-eye"></i>
                        <i class="far fa-edit abriredit"></i>
                        <i class="far fa-trash-alt"></i>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </article>
</section>

<div class="editar">
    <div class="modal__content">
        <form action="" method="">
            <p>Editar suministro</p>
            <div>
                <input type="number" placeholder="Id actividad" id="codeproyecto" name="codeproyecto" value="1" readonly required>
            </div>
            <div>
                <input type="text" placeholder="Empresa concretera" id="nombreproyecto" name="nombreproyecto" value="Palustre SA" required>
            </div>
            <div>
                <input type="text" placeholder="Elemnto vaciado" id="ubicacion" name="ubicacion" value="Cemento Diamante" required>
            </div>
            <div>
                <input type="date" placeholder="Fecha" id="cuadrilla" name="cuadrilla" value="22/06/2020" required>
            </div>
            <div>
                <input type="text" placeholder="Sello de seguridad" id="fecha" name="fecha" value="064" required>
            </div>
            <div>
                <input type="date" placeholder="Hora salida" id="cuadrilla" name="cuadrilla" value="06:34 am" required>
            </div>
            <div>
                <input type="date" placeholder="Hora fin" id="cuadrilla" name="cuadrilla" value="07:23 am" required>
            </div>
            <div>
                <input type="text" placeholder="Volumen" id="cuadrilla" name="cuadrilla" value="200" required>
            </div>
            <button class="btn-red" type="submit">Editar</button>
            <button class="btn-gris" type="reset">Borrar información</button>
            <i class="fas fa-times-circle cerraredit"></i>
        </form>
    </div>
</div>
<div class="modal">
    <div class="modal__content">
        <form action="" method="">
            <p>Agregar suministro</p>
            <div>
                <input type="number" placeholder="Id actividad" id="codeproyecto" name="codeproyecto" required>
            </div>
            <div>
                <input type="text" placeholder="Empresa concretera" id="nombreproyecto" name="nombreproyecto" required>
            </div>
            <div>
                <input type="text" placeholder="Elemnto vaciado" id="ubicacion" name="ubicacion" required>
            </div>
            <div>
                <input type="date" placeholder="Fecha" id="cuadrilla" name="cuadrilla" required>
            </div>
            <div>
                <input type="text" placeholder="Sello de seguridad" id="fecha" name="fecha" required>
            </div>
            <div>
                <input type="date" placeholder="Hora salida" id="cuadrilla" name="cuadrilla" required>
            </div>
            <div>
                <input type="date" placeholder="Hora fin" id="cuadrilla" name="cuadrilla" required>
            </div>
            <div>
                <input type="text" placeholder="Volumen" id="cuadrilla" name="cuadrilla" required>
            </div>
            <button class="btn-red" type="submit">Agregar</button>
            <button class="btn-gris" type="reset">Borrar información</button>
            <i class="fas fa-times-circle cerrar"></i>
        </form>
    </div>
</div>



<!-- <script src="../js/addproject.js"></script>
    <script src="../js/edit.js"></script> -->

    <script src="<?= URL ?>public/js/addproject.js"></script>
    <script src="<?= URL ?>public/js/edit.js"></script>

<?php
require 'views/residente/layouts/footer.php';
?>