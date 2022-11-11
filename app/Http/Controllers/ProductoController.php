<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::where('name','LIKE','%Gestión%')->paginate();

        $productos2 = Producto::where('name','NOT LIKE','%Gestión%')->get();
        /* Paginar ejemplo 1-15 page 1, 16-30 page 2, etc
        $productos = Productos::paginate();*/
        return view('productos.index', compact('productos','productos2'));
    }

    public function show(Producto $productos) {

        /* $productos = productos::find($id); */
        $numero=$productos->id;
        return view('productos.index',compact('productos'));
     }
}
