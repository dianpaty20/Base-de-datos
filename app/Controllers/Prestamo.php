<?php

namespace App\Controllers; 

use App\Controllers\BaseController;

class Prestamo extends BaseController
{
    protected $helpers = ['form'];

// Muestra todos los prestamos
    public function mostrar()
    {
        $prestamoModel = model('PrestamoModel');
        $data['prestamo'] = $prestamoModel->findAll(); 
    
        echo view('common/head');
        echo view('common/menu');
        echo view('prestamo/mostrar', $data);
        echo view('common/footer');
    }

// Muestra el formulario para agregar una nuevo prestamo
    public function agregar(){
        return 
        view('common/head') .
        view('common/menu') .
        view('prestamo/agregar') .
        view('common/footer');
    }

// Inserta un nuevo prestamo en la base de datos 
    public function insert(){
        $prestamoModel = model('PrestamoModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "edad" => $_POST['edad'],
            "titulo" => $_POST['titulo'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
            "fechaPrestamo" => $_POST['fechaPrestamo'],
            "direccion" => $_POST['direccion'],
            "ocupacion" => $_POST['ocupacion'],
            "telefono" => $_POST['telefono']
        ];
        $prestamoModel->insert($data, false);
        return redirect('prestamo/mostrar','refresh');
    }

// Elimina un prestamo de la base de datos 
    public function delete($id){
        $prestamoModel = model('PrestamoModel');
        $prestamoModel->delete($id);
        return redirect('prestamo/mostrar','refresh');
    }
    

// Muestra el formulario para editar un prestamo existente
    public function editar($id){
        $prestamoModel = model('PrestamoModel');
        $data['prestamo'] = $prestamoModel->find($id);

        return 
        view('common/head') .
        view('common/menu') .
        view('prestamo/editar',$data) .
        view('common/footer');
    }

// Actualizar la informacion de un prestamo en la base de datos
    public function update(){
        $prestamoModel = model('PrestamoModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "edad" => $_POST['edad'],
            "titulo" => $_POST['titulo'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
            "fechaPrestamo" => $_POST['fechaPrestamo'],
            "direccion" => $_POST['direccion'],
            "ocupacion" => $_POST['ocupacion'],
            "telefono" => $_POST['telefono']
        ]; // Recopila datos del formulario de edición 
        $prestamoModel->update($_POST['id'],$data);
        return redirect('prestamo/mostrar','refresh');
    }

// Busca prestamo segun el tipo de nombre y fecha del prestamo
    public function buscar(){
        $prestamoModel = model('PrestamoModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre']; 
            $fechaPrestamo = $_GET['fechaPrestamo']; 
            $data['prestamo'] = $plibroModel->like('nombre', $nombre)
                            ->like('fechaPrestamo', $fechaPrestamo)
                            ->findAll();
        }
        else{
            $nombre ="";
            $fechaPrestamo ="";
            $data['prestamo'] = $prestamoModel->findAll(); 
        }

        return 

        view('common/head') .
        view('common/menu') .
        view('prestamo/buscar', $data) .
        view('common/footer');
    }

}