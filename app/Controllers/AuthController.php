<?php
namespace App\Controllers;

class AuthController extends BaseController
{
    public function logout()
    {
        
        return redirect()->to('usuario/login'); //redireccion a usuario login o inicio de sesion 
    }
}