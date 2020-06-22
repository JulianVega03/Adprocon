<?php
class IndexController extends Controller
{

    public function __construct()
    {
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Bienvenidos"];
        $this->view('index',$datos);
    }
    
}
