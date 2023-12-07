<?php

namespace App\Controllers; 

use App\Controllers\BaseController;

class Reseña extends BaseController{
    protected $helpers = ['form'];

    // Método para mostrar todas las reseñas
    public function mostrar()
    {
        // Se obtienen todas las reseñas desde el modelo
        $reseñaModel = model('ReseñaModel');        
        $data['reseña'] = $reseñaModel->findAll(); 
    
        // Se cargan las vistas correspondientes
        echo view('common/head');
        echo view('common/menu');
        echo view('reseña/mostrar', $data);
        echo view('common/footer');
    }

    // Método para cargar la vista de agregar reseña
    public function agregar(){
        // Se devuelve la concatenación de las vistas correspondientes
        return 
        view('common/head') .
        view('common/menu') .
        view('reseña/agregar') .
        view('common/footer');
    }

    // Método para insertar una nueva reseña en la base de datos
    public function insert(){
        // Se obtienen los datos del formulario
        $reseñaModel = model('ReseñaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "titulo" => $_POST['titulo'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
            "calificacion" => $_POST['calificacion'],
            "comentario" => $_POST['comentario'],
            "fechaReseña" => $_POST['fechaReseña']
        ];

        // Se insertan los datos en la base de datos y se redirige a la vista de mostrar
        $reseñaModel->insert($data, false);
        return redirect('reseña/mostrar','refresh');
    }

    // Método para eliminar una reseña específica
    public function delete($id){
        // Se elimina la reseñacon el ID proporcionado y se redirige a la vista de mostrar
        $reseñaModel = model('ReseñaModel');
        $reseñaModel->delete($id);
        return redirect('reseña/mostrar','refresh');
    }
    
    // Método para cargar la vista de editar reseña 
    public function editar($id){
        // Se obtienen los datos de la reseña específico y se cargan las vistas correspondientes
        $reseñaModel = model('ReseñaModel');
        $data['reseña'] = $reseñaModel->find($id);

        return 
        view('common/head') .
        view('common/menu') .
        view('reseña/editar',$data) .
        view('common/footer');
    }

    // Método para actualizar los datos de una reseña en la base de datos
    public function update(){
        // Se obtienen los datos del formulario y se actualizan en la base de datos
        $reseñaModel = model('ReseñaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "titulo" => $_POST['titulo'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
            "calificacion" => $_POST['calificacion'],
            "comentario" => $_POST['comentario'],
            "fechaReseña" => $_POST['fechaReseña']
        ];
        $reseñaModel->update($_POST['id'],$data);

        // Se redirige a la vista de mostrar
        return redirect('reseña/mostrar','refresh');
    }

    // Método para buscar reseñas según criterios proporcionados
    public function buscar(){
        // Se obtienen los datos del formulario de búsqueda
        $reseñaModel = model('ReseñaModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre']; 
            $calificacion = $_GET['calificacion']; 

            // Se realizan consultas de búsqueda y se cargan las vistas correspondientes con los resultados
            $data['reseña'] = $reseñaModel->like('nombre', $nombre)
                            ->like('calificacion', $calificacion)
                            ->findAll();
        }
        else{
            $nombre ="";
            $calificacion ="";
            
            // Se cargan todas las reseñas si no se proporcionan criterios de búsqueda
            $data['reseña'] = $reseñaModel->findAll(); 
        }
    
        return 
        view('common/head') .
        view('common/menu') .
        view('reseña/buscar', $data) .
        view('common/footer');
    }

}
