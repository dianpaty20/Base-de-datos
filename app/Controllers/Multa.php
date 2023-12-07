<?php

namespace App\Controllers; 

use App\Controllers\BaseController;

class Multa extends BaseController
{
    protected $helpers = ['form'];

// Muestra todas las Multas 
    public function mostrar()
    {
        $multaModel = model('MultaModel');
        $data['multa'] = $multaModel->findAll(); 
    
        echo view('common/head');
        echo view('common/menu');
        echo view('multa/mostrar', $data);
        echo view('common/footer');
    }

// Muestra el formulario para agregar una nueva multa
    public function agregar(){
        return 
        view('common/head') .
        view('common/menu') .
        view('multa/agregar') .
        view('common/footer');
    }

// Inserta una nueva multa en la base de datos 
    public function insert(){
        $multaModel = model('MultaModel');
        $data = [
            "nombreCliente" => $_POST['nombreCliente'],
            "titulo" => $_POST['titulo'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
            "fechaSalida" => $_POST['fechaSalida'],
            "fechaEntrega" => $_POST['fechaEntrega'],
            "diasRetraso" => $_POST['diasRetraso'],
            "pagoMulta" => $_POST['pagoMulta']
        ];
        $multaModel->insert($data, false);
        return redirect('multa/mostrar','refresh');
    }

// Eliminar una multa de la base de datos
    public function delete($id){
        $multaModel = model('MultaModel');

        $session = session();
        // Verificar si el usuario ha iniciado sesion
        if($session->get('logged_in')!=TRUE){ 
            // Redireccionar a la pagina de mostrar libros si no ha iniciado sesión
            return redirect('usuario/login','refresh');  
        }
        
        $multaModel->delete($id);
        return redirect('multa/mostrar','refresh');
    }
    
// Muestra el formulario para editar multa 
    public function editar($id){
        $multaModel = model('MultaModel');
        $data['multa'] = $multaModel->find($id);

        return 
        view('common/head') .
        view('common/menu') .
        view('multa/editar',$data) .
        view('common/footer');
    }

// Actualiza la informacion de la muulta en la base de datos
    public function update(){
        $multaModel = model('MultaModel');
        $data = [
            "nombreCliente" => $_POST['nombreCliente'],
            "titulo" => $_POST['titulo'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
            "fechaSalida" => $_POST['fechaSalida'],
            "fechaEntrega" => $_POST['fechaEntrega'],
            "diasRetraso" => $_POST['diasRetraso'],
            "pagoMulta" => $_POST['pagoMulta']
        ]; // Recopilar datos del formulario de edición 
        $multaModel->update($_POST['id'],$data);
        return redirect('multa/mostrar','refresh');
    }

// Busca multa segun el nombre del cliente y el pago de multa
    public function buscar()
{
    $multaModel = model('MultaModel');
    if (isset($_GET['nombreCliente']) && isset($_GET['pagoMulta'])) {
        $nombreCliente = $_GET['nombreCliente'];
        $pagoMulta = $_GET['pagoMulta'];
        $data['multa'] = $multaModel->like('nombreCliente', $nombreCliente)
            ->like('pagoMulta', $pagoMulta)
            ->findAll();
    } else {
        $nombreCliente = "";
        $pagoMulta = "";
        $data['multa'] = $multaModel->findAll();
    }

    return
        view('common/head') .
        view('common/menu') .
        view('multa/buscar', $data) .
        view('common/footer');
}


}