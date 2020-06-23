<?php
class ControlMaquinariaController extends Controller
{

    private $usuario;

    public function __construct()
    {
        // $this->usuario = $this->model('Usuario');
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Login App"];
        $this->view('cmaquinaria/controlmaquinaria', $datos);
    }
}
