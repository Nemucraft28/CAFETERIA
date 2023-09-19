<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedidos;

class PedidosController extends Controller
{

    public function index()
    {
        $pedidos = Pedidos::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function edit($id)
    {
        $pedidos = Pedidos::find($id);

        return view('pedidos.edit', compact('pedidos'));
    }

    public function update(Request $request, $id)
    {
        // Valida los datos del formulario según tus necesidades
        $request->validate([
            'mesa' => 'required|string',
            'estado' => 'required|string',
            'forma_pago' => 'required|string'
        ]);

        // Encuentra el producto por ID
        $pedidos = Pedidos::find($id);

        if (!$pedidos) {
            // Manejo de error si el producto no se encuentra
            abort(404);
        }

        // Actualiza los atributos del producto con los nuevos valores del formulario
        $pedidos->mesa = $request->input('mesa');
        $pedidos->estado = $request->input('estado');
        $pedidos->forma_pago = $request->input('forma_pago');
        $pedidos->total = '20000';

        // Guarda los cambios en la base de datos
        $pedidos->save();

        // Redirige a la vista de detalles del producto u otra página según tu lógica
        $pedidos = Pedidos::all();
        return view('pedidos.index', compact('pedidos'));
    }


    public function store(Request $request)
    {

        // Valida los datos del formulario según tus necesidades
        $request->validate([
            'mesa' => 'required|string',
            'estado' => 'required|string',
            'forma_pago' => 'required|string'
        ]);
    
        // Crea un nuevo pedido con los datos del formulario
        $pedidos = new Pedidos([
            'mesa' => $request->input('mesa'),
            'estado' => $request->input('estado'),
            'forma_pago' => $request->input('forma_pago'),
            'total' => '20000',
        ]);

        $pedidos->save();

        $pedidos = Pedidos::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function destroy($id)
    {
        // Busca el producto por su ID
        $pedidos = Pedidos::find($id);

        if (!$pedidos) {
            // Manejo de error si el producto no se encuentra
            return redirect()->route('pedidos.index')->with('error', 'Producto no encontrado');
        }

        // Elimina el producto
        $pedidos->delete();

        // Redirige de vuelta a la lista de productos con un mensaje de éxito
        return redirect()->route('pedidos.index')->with('success', 'Producto eliminado correctamente');
    }
}
