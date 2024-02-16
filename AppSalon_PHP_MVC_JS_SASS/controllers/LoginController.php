<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class LoginController
{
    public static function login(Router $router)
    {
        $router->render("auth/login");
    }
    public static function logout()
    {
        echo "Desde el logout";
    }
    public static function olvide(Router $router)
    {
        $router->render("auth/olvide-password", []);
    }
    public static function recuperar()
    {
        echo "Desde recuperar";
    }
    public static function crear(Router $router)
    {
        $usuario = new Usuario;
        //Alertas vacias
        $alertas = [];
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            //Revisar que alertas este vacio
            if (empty($alertas)) {
                //Verificar que el usuarop no este registrado
                $resultado = $usuario->existeUsiario();

                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    //Hashear el password
                    $usuario->hashPassword();

                    //Generar un token unico
                    $usuario->crearToken();

                    // Enviar el Email
                    $email = new Email($usuario->nombre, $usuario->email, $usuario->token);
                    $email->enviarConfirmacion();

                    //crear el usuario
                    $resultado = $usuario->guardar();
                    if ($resultado) {
                        header("Location: /mensaje");
                    }
                }
            }
        }
        $router->render("auth/crear-cuenta", [
            "usuario" => $usuario,
            "alertas" => $alertas
        ]);
    }

    public static function mensaje(Router $router)
    {
        $router->render("auth/mensaje");
    }
    public static function confirmar(Router $router)
    {
        $alertas = [];
        $token = s($_GET["token"]);
        $usuario = Usuario::where("token", $token);

        if (empty($usuario)) {
            //Mostrar mensaje de error
            Usuario::setAlerta("error", "Token no valido");
        } else {
            //Modificar a usuario confirmado
            $usuario->confirmado = "1";
            $usuario->token = null;
            $usuario->guardar();
            Usuario::setAlerta("exito", "Cuenta comprobada correctamente");
        }

        $alertas = Usuario::getAlertas();

        //Renderizar la vista
        $router->render("auth/confirmar-cuenta", [
            "alertas" => $alertas
        ]);;
    }
}
