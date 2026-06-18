<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return view('productos.index',[
            'productos'=>Producto::all()
        ]);
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        Producto::create($request->all());

        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.edit',compact('producto'));
    }

    public function update(Request $request,$id)
    {
        $producto = Producto::findOrFail($id);

        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        Producto::destroy($id);

        return redirect()->route('productos.index');
    }
}