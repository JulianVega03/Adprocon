<?php
require 'models/PersonaModel.php';

class ProyectosController extends Controller
{
    private $proyectoModel;

    public function __construct()
    {
        $this->proyectoModel = $this->model('Proyecto');
    }

    public function actionIndex()
    {
        $datos = [
            "titulo" => "Mis Proyectos",
            'personas' => $this->obtenerPersonas(),
            'proyectos' => $this->obtenerProyectos()
        ];
        $this->view('home/perfil', $datos);
    }

    public function actionNuevo()
    {
        if (isset($_POST['nombre'], $_POST['responsable'], $_POST['descripcion'])) {

            $nombre = $_POST['nombre'];
            $responsable = $_POST['responsable'];
            $descripcion = $_POST['descripcion'];

            $proyectoNuevo = new Proyecto(null, $nombre, $responsable, $descripcion);
            if ($this->proyectoModel->insertar($proyectoNuevo)) {
                header('location: ' . URL);
            } else {
                echo "NO se inserto el proyecto";
            }
        } else {
            header('location: ' . URL);
        }
    }

    public function actionEliminar($params)
    {
        if (isset($params)) {
            if ($this->proyectoModel->eliminar($params[0])) {
                header('location: ' . URL);
            } else {
                echo "no se pudo eliminar";
            }
        } else {
            header('location: ' . URL);
        }
    }

    public function actionEditar($params)
    {
        //no hay modal
    }

    public function actionIngresar($params)
    {
        header('location: ' . URL . 'proyecto/' . $params[0]);
    }

    private function obtenerPersonas()
    {
        $personaModel = new PersonaModel();
        return $personaModel->obtener();
    }

    private function obtenerProyectos()
    {
        return $this->proyectoModel->obtener();
    }
}
