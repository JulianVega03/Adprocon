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
                        Proyecto:
                        <p>Gestión de Obras Civiles</p>
                    </h2>
                    <i class="fas fa-backspace atras"></i>
                </div>

                <div class="vista-proyecto__table">
                    <div class="opciones-proyecto">
                        <div class="add-actividad">
                            <span>
                                <i class="fas fa-plus"></i>
                            </span>
                            <p class="abrir">Crear equipo</p>
                        </div>
                        <div class="icos-funciones">
                            <a href="">
                                <i class="far fa-file-pdf"></i>
                            </a>
                            <a href="">
                                <i class="far fa-eye"></i>
                            </a>
                            <a class="abriredit" href="">
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
                                <th>Código Maquina</th>
                                <th>Código Operario</th>
                                <th>Código Proyecto</th>
                                <th>Hora inicio</th>
                                <th>Hora fin</th>
                                <th># Recibo</th>
                                <th>Costo</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <th class="oscuro">4</th>
                                <td>12345</td>
                                <td>12345</td>
                                <td>12345</td>
                                <td>12PM</td>
                                <td>6PM</td>
                                <td>54321</td>
                                <td>20200609</td>
                                <td>True</td>
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
            <p>Crear equipo</p>
            <div>
                <input type="number" placeholder="Código máquina" id="codemaquina" name="codemaquina" required>
            </div>
            <div>
                <input type="number" placeholder="Código operario" id="codeoperario" name="codeoperario" required>
            </div>
            <div>
                <input type="number" placeholder="Código proyecto" id="codeproyecto" name="codeproyecto" required>
            </div>
            <div>
                <input type="text" placeholder="Hora inicio" id="horainicio" name="horainicio" required>
            </div>
            <div>
                <input type="text" placeholder="Número recibo" id="numerorecibo" name="numerorecibo" required>
            </div>
            <div>
                <input type="text" placeholder="Hora fin" id="horafin" name="horafin" required>
            </div>
            <div>
                <input type="number" placeholder="Costo" id="costo" name="costo" required>
            </div>
            <div>
                <input type="number" placeholder="Estado" id="estado" name="estado" required>
            </div>
            <button class="btn-red" type="submit">Agregar</button>
            <button class="btn-gris" type="reset">Borrar información</button>
            <i class="fas fa-times-circle cerrar"></i>
        </form>
    </div>
</div>

<div class="editar">
    <div class="modal__content">
        <form action="" method="">
            <p>Editar equipo</p>
            <div>
                <input type="number" placeholder="Código máquina" id="codemaquina" name="codemaquina" required>
            </div>
            <div>
                <input type="number" placeholder="Código operario" id="codeoperario" name="codeoperario" required>
            </div>
            <div>
                <input type="number" placeholder="Código proyecto" id="codeproyecto" name="codeproyecto" required>
            </div>
            <div>
                <input type="text" placeholder="Hora inicio" id="horainicio" name="horainicio" required>
            </div>
            <div>
                <input type="text" placeholder="Número recibo" id="numerorecibo" name="numerorecibo" required>
            </div>
            <div>
                <input type="text" placeholder="Hora fin" id="horafin" name="horafin" required>
            </div>
            <div>
                <input type="number" placeholder="Costo" id="costo" name="costo" required>
            </div>
            <div>
                <input type="number" placeholder="Estado" id="estado" name="estado" required>
            </div>
            <button class="btn-red" type="submit">Agregar</button>
            <button class="btn-gris" type="reset">Borrar información</button>
            <i class="fas fa-times-circle cerraredit"></i>
        </form>
    </div>
</div>


<?php
require 'views/residente/layouts/footer.php';
?>