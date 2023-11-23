<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Marca;

class CategoriaController extends Controller
{
    public function index(){
        $listaCat = Categoria::all();
        
        return view('categoria.index',array('listaCat'=>$listaCat));
        
    }
    public function registrar(){
        
        $listaMarca = Marca::all();
        
        return view('categoria.registrar',array('listaMarca'=>$listaMarca));


    }
    
    public function store(Request $r){
        //var_dump($r->all());
        
        $cat = new Categoria();
        $cat->nombre = $r->input("nombre");
        $cat->marca_id = $r->input("marca_id");
        $cat->descripcion = $r->input("descripcion");
        $cat->img = $r->img->store('images','pub');
        $cat->save();
        return redirect('/categorias');
    }
    
    function edit($id)  
    {
        $cat = Categoria::find($id);
        $listaMarca = Marca::all();
        return view('categoria.editar',array('cat'=>$cat,'listaMarca'=>$listaMarca));
    }
    public function putedit(Request $r, $id){
        //var_dump($r->all());
        
        $cat = Categoria::find($id);
        $cat->nombre = $r->nombre;
        $cat->descripcion = $r->descripcion;
        $cat->marca_id = $r->marca_id;
        if ($r->hasFile('img')) {
            $cat->img = $r->img->store('images','pub');
        }
        $cat->save();
        return redirect('/categorias');
    }
    
    public function delete($id){
        //var_dump($r->all());
        
        $cat = Categoria::find($id);
        $cat->delete();
        return redirect('/categorias');
        
    }
    
    
    
}
