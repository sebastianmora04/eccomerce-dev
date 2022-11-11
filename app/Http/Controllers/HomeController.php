<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::select('name','id','tipo')->get();

        /*$name=$productos->name;
        $id=$productos->id;
        $tipo=$productos->tipo; */

        /*$productos2 = Productos::where('name','NOT LIKE','%Gestión%')->get();

        /* Paginar ejemplo 1-15 page 1, 16-30 page 2, etc
        $productos = Productos::paginate();*/

        return view('productos.index', compact('productos'));
    }
}
