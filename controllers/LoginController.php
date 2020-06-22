<?php
class LoginController extends Controller
{

    private $usuario;

    public function __construct()
    {
       $this->usuario = $this->model('Usuario');
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Login App"];
        $this->view('login', $datos);
    }

    public function actionLoggear()
    {
        if (isset($_POST['username'], $_POST['clave'])) {
            session_start();
            $user =  $_POST['username'];
            $pass = $_POST['clave'];

            if($this->usuario->existeUsuario($user, $pass)){
                $_SESSION['user'] = $user;
                header("location: " .URL ."proyectos" );

            }else{
                    echo "NO EXISTE";
            }

        }

    }

    public function actionLogout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . URL . 'login');
    }
}
