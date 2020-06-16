<?php
class UsuarioController extends Controller
{

    public function __construct()
    {
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Perfil"];
        $this->view('perfil/index',$datos);
    }

   
}
