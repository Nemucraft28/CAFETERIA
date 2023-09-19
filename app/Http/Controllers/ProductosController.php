<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {

        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required|numeric',
            'peso' => 'required|numeric',
            'categoria' => 'required',
            'stock' => 'numeric'
        ]);

        // Crea un nuevo producto en la base de datos
        $productos = new Productos([
            'nombre' => $request->input('nombre'),
            'referencia' => $request->input('referencia'),
            'precio' => $request->input('precio'),
            'peso' => $request->input('peso'),
            'categoria' => $request->input('categoria'),
            'stock' => $request->input('stock')
        ]);

        $productos->save();

        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }


    public function show($id)
    {
        $producto = Productos::find($id);

        return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Productos::find($id);

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required|numeric',
            'peso' => 'required|numeric',
            'categoria' => 'required',
            'stock' => 'numeric'
        ]);

        // Encuentra el producto por ID
        $producto = Productos::find($id);

        if (!$producto) {
            // Manejo de error si el producto no se encuentra
            abort(404);
        }

        // Actualiza los atributos del producto con los nuevos valores del formulario
        $producto->nombre = $request->input('nombre');
        $producto->referencia = $request->input('referencia');
        $producto->precio = $request->input('precio');
        $producto->peso = $request->input('peso');
        $producto->categoria = $request->input('categoria');
        $producto->stock = $request->input('stock');

        // Guarda los cambios en la base de datos
        $producto->save();

        // Redirige a la vista de detalles del producto u otra página según tu lógica
        return redirect()->route('productos.show', ['producto' => $producto->id]);
    }


    public function destroy($id)
    {
        // Busca el producto por su ID
        $producto = Productos::find($id);

        if (!$producto) {
            // Manejo de error si el producto no se encuentra
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }

        // Elimina el producto
        $producto->delete();

        // Redirige de vuelta a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente');
    }
}
