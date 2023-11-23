<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $listaRes = Producto::all();
        return view('productos.index',array('listaRes'=>$listaRes));
        
    }

    public function registrar(){
        
        $listaRes = Categoria::all();
        
        return view('productos.registrar',array('listaRes'=>$listaRes));


    }

    public function store(Request $r){
        //var_dump($r->all());
        
        $cat = new Producto();
        $cat->nombre = $r->input("nombre");
        $cat->color = $r->input("color");
        $cat->categoria_id = $r->input("categoria_id");
        $cat->precio = $r->input("precio");
        $cat->stock = $r->input("stock");
        $cat->peso = $r->input("peso");
        $cat->altura = $r->input("altura");
        $cat->ancho = $r->input("ancho");
        $cat->profundidad = $r->input("profundidad");
        $cat->descripcion = $r->input("descripcion");
        $cat->img = $r->img->store('images','pub');
        $cat->save();
        return redirect('/productos');
    }

    
    function edit($id)  
    {
        $prod = Producto::find($id);
        $listaRes = Categoria::all();
        return view('productos.editar',array('prod'=>$prod,'listaRes'=>$listaRes));
    }
    public function putedit(Request $r, $id){
        //var_dump($r->all());
        
        $cat = Producto::find($id);
        $cat->nombre = $r->nombre;
        $cat->color = $r->color;
        $cat->categoria_id = $r->categoria_id;
        $cat->precio = $r->precio;
        $cat->stock = $r->stock;
        $cat->peso = $r->peso;
        $cat->altura = $r->altura;
        $cat->ancho = $r->ancho;
        $cat->profundidad = $r->profundidad;
        $cat->descripcion = $r->descripcion;
        if ($r->hasFile('img')) {
            $cat->img = $r->img->store('images','pub');
        }
        $cat->save();
        return redirect('/productos');
    }
    
    public function delete($id){
        //var_dump($r->all());
        
        $cat = Producto::find($id);
        $cat->delete();
        return redirect('/productos');
        
    }



}
