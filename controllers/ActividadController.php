<?php
require 'models/ActividadModel.php';
require 'models/ProyectoModel.php';

class ActividadController extends Controller
{
    private $actividadModel;

    public function __construct()
    {
        $this->actividadModel = $this->model('Actividad');
    }

    public function actionIndex($params = null)
    {
        $datos =  [
            'proyecto' => $this->obtenerProyecto($params[0]),
            'actividad' => $this->obtenerActividad($params[0]),
            'suministros' => $this->obtenerSuministrosPorActividad($params[0])
        ];
        $this->view('actividad/actividad', $datos);
    }

    private function obtenerProyecto($id_actividad)
    {
        $actividad = $this->actividadModel->obtenerPorId($id_actividad);

        $pModel = new ProyectoModel();
        return $pModel->obtenerPorId($actividad->getId_proyecto());
    }

    private function obtenerActividad($id_actividad)
    {
        return $this->actividadModel->obtenerPorId($id_actividad);
    }

    private function obtenerSuministrosPorActividad($id_actividad)
    {

    }
}
