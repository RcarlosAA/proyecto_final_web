<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;


class PaginaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        
        return view('pagina.index',array('categorias'=>$categorias));
    }


    public function productos_categoria($id){

        $categoria = Categoria::find($id);

       
        $listaProductos = Producto::where('categoria_id', $id)->get();
        //dd($listaProductos);
        
        return view('pagina.productos',array('listaProductos'=>$listaProductos,'categoria'=>$categoria));
    }


    public function ver_producto($id){

        
       
        $listaProductos = Producto::find($id);;
        //dd($listaProductos);
        
        return view('pagina.verproducto',array('listaProductos'=>$listaProductos));
    }




}
