<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    // Método para mostrar el formulario de inicio de sesión y procesar los datos del formulario
    public function index()
    {
        // Se inicializa un array de datos con el título y la instancia de validación
        $data['title'] = "Agregar Usuario";
        $validation = \Config\Services::validation();
        
        // Verifica si la solicitud es de tipo GET
        if (strtolower($this->request->getMethod()) === 'get') {
            // Muestra las vistas correspondientes para el formulario de inicio de sesión
            return view('common/head') .
                view('usuario/login') .
                view('common/footer');
        }

        // Reglas de validación para el formulario de inicio de sesión
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        // Verifica si los datos del formulario no cumplen con las reglas de validación
        if (!$this->validate($rules)) {
            // Si no cumple, muestra las vistas del formulario de inicio de sesión
            return view('common/head') .
                view('usuario/login') .
                view('common/footer');
        } else {
            // Si pasa las reglas de validación
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userModel = model('UserModel');

            // Busca un usuario en la base de datos que coincida con el email y la contraseña proporcionados
            $data['usuario'] = $userModel->like('email', $email)
                ->like('password', $password)
                ->findAll();

            // Si se encuentra al menos un usuario
            if (count($data['usuario']) > 0) {
                // Configura la sesión con los datos del usuario autenticado
                $session = session();
                $newdata = [
                    'id' => $data['usuario'][0]->id,
                    'nombre'  => $data['usuario'][0]->nombre,
                    'email'     => $data['usuario'][0]->email,
                    'logged_in' => true,
                ];

                // Establece los datos de sesión y redirige a la página de agregar libros
                $session->set($newdata);
                return redirect()->to('biblioteca/agregar');
            } else {
                // Si no se encuentra el usuario, redirige de nuevo a la página de inicio de sesión
                return redirect('usuario/login', 'refresh');
            }
        }
    }

    
}
