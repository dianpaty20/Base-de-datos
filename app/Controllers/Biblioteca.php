<?php

namespace App\Controllers; 

use App\Controllers\BaseController;

class Biblioteca extends BaseController
{
    protected $helpers = ['form'];

// Muestra todos lo que tiene nuetra tabla biblioteca
    public function mostrar()
    {
        $bibliotecaModel = model('BibliotecaModel');
        $data['biblioteca'] = $bibliotecaModel->findAll(); 
    
        echo view('common/head');
        echo view('common/menu');
        echo view('biblioteca/mostrar', $data);
        echo view('common/footer');
    }

// Muestra el formulario para agregar
    public function agregar(){

        return 
        view('common/head') .
        view('common/menu') .
        view('biblioteca/agregar') .
        view('common/footer');
    }

 // Inserta datos en la base de datos
    public function insert(){
        $bibliotecaModel = model('BibliotecaModel');
        $data = [
            "titulo" => $_POST['titulo'],
            "autor" => $_POST['autor'],
            "descripcion" => $_POST['descripcion'],
            "fecha_Publicacion" => $_POST['fecha_Publicacion'],
            "paginas" => $_POST['paginas'],
            "ciudad" => $_POST['ciudad'],
            "editorial" => $_POST['editorial'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
        ];
        $bibliotecaModel->insert($data, false);
        return redirect('biblioteca/mostrar','refresh');
    }

// Elimina uno de los dtaos que tiene la base de datos
    public function delete($id){
        $bibliotecaModel = model('BibliotecaModel');
        $bibliotecaModel->delete($id);
        return redirect('biblioteca/mostrar','refresh');
    }

// Muestra el formulario para editar un dato existente
    public function editar($id){
        $bibliotecaModel = model('BibliotecaModel');
        $data['biblioteca'] = $bibliotecaModel->find($id);

        return 
        view('common/head') .
        view('common/menu') .
        view('biblioteca/editar',$data) .
        view('common/footer');
    }

 // Actualiza la información de un dato en la base de datos
    public function update(){
        $bibliotecaModel = model('BibliotecaModel');
        $data = [
            "titulo" => $_POST['titulo'],
            "autor" => $_POST['autor'],
            "descripcion" => $_POST['descripcion'],
            "fecha_publicacion" => $_POST['fecha_publicacion'],
            "paginas" => $_POST['paginas'],
            "ciudad" => $_POST['ciudad'],
            "editorial" => $_POST['editorial'],
            "tipo" => isset($_POST['tipo']) ? $_POST['tipo'] : null,
        ]; // Recopilar datos del formulario de edición
        $bibliotecaModel->update($_POST['id'],$data);
        return redirect('biblioteca/mostrar','refresh');
    }

// Busca según el título y autor proporcionados
    public function buscar(){
        $bibliotecaModel = model('BibliotecaModel');
        if(isset($_GET['titulo'])){
            $titulo = $_GET['titulo']; 
            $tipo = $_GET['tipo']; 
            $data['bibliotecas'] = $bibliotecaModel->like('titulo', $titulo)
                                ->like('tipo', $tipo)
                                ->findAll();
        }
        else{
            $titulo ="";
            $autor ="";
            $data['bibliotecas'] = $bibliotecaModel->findAll(); 
        }

        return view('common/head') .
            view('common/menu') .
            view('biblioteca/buscar', $data) .
            view('common/footer');
    }


}
