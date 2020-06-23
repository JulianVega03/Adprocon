<?php
require 'models/ActividadModel.php';
require 'models/CuadrillaModel.php';

class ProyectoController extends Controller
{
    private $proyectoModel;
    private $proyecto;

    public function __construct()
    {
        $this->proyectoModel = $this->model('Proyecto');
    }

    public function actionIndex($params = null)
    {
        if (isset($params[0])) {
            $this->proyecto = $this->obtenerProyecto($params[0]);
            $datos = [
                "id_proyecto" => $this->proyecto->getId_proyecto(),
                "nombre_proyecto" => $this->proyecto->getNombre(),
                'cuadrillas' => $this->obtenerCuadrillas(),
                'listado_actividades' => $this->obtenerActividadesDelProyecto($this->proyecto->getId_proyecto())
            ];
            $this->view('proyecto/proyecto', $datos);
        }
    }

    public function actionNuevaActividad()
    {
        if (isset($_POST['proyecto'], $_POST['nombre'], $_POST['ubicacion'], $_POST['cuadrilla'], $_POST['fecha'])) {

            $aModel = new ActividadModel();

            $id_proyecto = $_POST['proyecto'];
            $nombre = $_POST['nombre'];
            $ubicacion = $_POST['ubicacion'];
            $id_cuadrilla = $_POST['cuadrilla'];
            $fecha = $_POST['fecha'];

            if ($aModel->insertar(new Actividad(null, $id_proyecto, $nombre, $ubicacion, $id_cuadrilla, $fecha))) {
                header('location: ' . URL . 'proyecto/' . $id_proyecto);
            } else {
                echo "no se inserto la actividad";
            }
        }
    }

    public function actionEditar(){
        if (isset($_POST['codigo'],$_POST['proyecto'], $_POST['nombre'], $_POST['ubicacion'], $_POST['cuadrilla'], $_POST['fecha'])) {

            $aModel = new ActividadModel();

            $id_proyecto = $_POST['proyecto'];
            $nombre = $_POST['nombre'];
            $ubicacion = $_POST['ubicacion'];
            $id_cuadrilla = $_POST['cuadrilla'];
            $fecha = $_POST['fecha'];

            if ($aModel->actualizar(new Actividad($_POST['codigo'], $id_proyecto, $nombre, $ubicacion, $id_cuadrilla, $fecha))) {
                header('location: ' . URL . 'proyecto/' . $id_proyecto);
            } else {
                echo "no se inserto la actividad";
            }
        }else{
            echo "faltan datos";
        }
    }

    public function actionEliminar($params)
    {
        if (isset($params)) {
            $aModel = new ActividadModel();
            if ($aModel->eliminar($params[0])) {
                header('location: ' . URL . 'proyecto/' . $params[1]);
            } else {
                echo "no se pudo eliminar";
            }
        } else {
            header('location: ' . URL);
        }
    }

    private function obtenerProyecto($id)
    {
        return $this->proyectoModel->obtenerPorId($id);
    }

    private function obtenerActividadesDelProyecto($id)
    {
        $aModel = new ActividadModel();
        return $aModel->obtenerPorIdProyecto($id);
    }
    private function obtenerCuadrillas()
    {
        $cModel = new CuadrillaModel();
        return $cModel->obtener();
    }
}
