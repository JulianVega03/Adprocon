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
                    <p>Gestion de Obras civiles</p>
                </h4>
                <!-- </div> -->
                <!-- <div class="actividad-titles__name"> -->
                <h1 class="actividad-titles__name">
                    <i class="fas fa-chevron-right"></i>
                    Actividad:
                    <span>
                        <p>Construcción segundo piso</p>
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
            <div class="icos-funciones">
                <i class="far fa-file-pdf"></i>
                <i class="far fa-eye"></i>
                <i class="far fa-edit"></i>
                <i class="far fa-trash-alt"></i>
            </div>
        </div>
        <table class="">
            <thead class="">
                <tr class="">
                    <th>#</th>
                    <th>Código Proyecto</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Cuadrilla</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <th class="oscuro">1</th>
                    <td>12345</td>
                    <td>Construcción segundo piso</td>
                    <td>Universidad Francisco de Paula Santander</td>
                    <td>Cuadrilla Dos</td>
                    <td>2020/06/09</td>
                </tr>
                <tr>
                    <th class="oscuro">2</th>
                    <td>12345</td>
                    <td>Construcción segundo piso</td>
                    <td>Universidad Francisco de Paula Santander</td>
                    <td>Cuadrilla Dos</td>
                    <td>2020/06/09</td>
                </tr>
                <tr>
                    <th class="oscuro">3</th>
                    <td>12345</td>
                    <td>Construcción segundo piso</td>
                    <td>Universidad Francisco de Paula Santander</td>
                    <td>Cuadrilla Dos</td>
                    <td>2020/06/09</td>
                </tr>
                <tr>
                    <th class="oscuro">4</th>
                    <td>12345</td>
                    <td>Construcción segundo piso</td>
                    <td>Universidad Francisco de Paula Santander</td>
                    <td>Cuadrilla Dos</td>
                    <td>2020/06/09</td>
                </tr>
                <tr>
                    <th class="oscuro">5</th>
                    <td>12345</td>
                    <td>Construcción segundo piso</td>
                    <td>Universidad Francisco de Paula Santander</td>
                    <td>Cuadrilla Dos</td>
                    <td>2020/06/09</td>
                </tr>
            </tbody>
        </table>
    </article>
</section>
<div class="modal">
    <div class="modal__content">
        <form action="" method="">
            <p>Agregar suministro</p>
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