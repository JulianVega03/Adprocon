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
                        Control de materiales
                    </h2>
                    <i class="fas fa-backspace atras"></i>
                </div>

                <div class="modal__content" style="background-color: #f2f2f2;">
                    <form style="background: white;" action="" method="">
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