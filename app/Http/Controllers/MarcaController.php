<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;


class MarcaController extends Controller
{
    public function index(){
        $listaCat = Marca::all();
        return view('marcas.index',array('listaCat'=>$listaCat));
        
    }
    
    public function store(Request $r){
        //var_dump($r->all());
        
        $cat = new Marca();
        $cat->nombre = $r->input("nombre");
        $cat->save();
        return redirect('/marcas');
    }
    
    function edit($id)  
    {
        $cat = Marca::find($id);
        return view('marcas.editar',array('cat'=>$cat));
    }
    public function putedit(Request $r, $id){
        //var_dump($r->all());
        
        $cat = Marca::find($id);
        $cat->nombre = $r->nombre;
        
        $cat->save();
        return redirect('/marcas');
    }
    
    public function delete($id){
        //var_dump($r->all());
        
        $cat = Marca::find($id);
        $cat->delete();
        return redirect('/marcas');
        
    }
}
