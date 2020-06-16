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

    public function actionRegistrar(){

        if(isset($_POST['nombre'],$_POST['apellido'])){

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];

            require_once 'models/UsuarioModel.php';

            $usuarioModelo = new UsuarioModel();

            if( $usuarioModelo->insertar($nombre, $apellido)){

                echo "el usuario ha sido registrado";

            }else{
                echo "el usuario y la contraseña no existe";

            }


        }else{

            header("location:" .URL."index");
        }

       

    }

   
}
