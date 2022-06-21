<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar la variable de session 'cart'
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //estructurar la informacion del producto en un arreglo 
        $producto = [
            [
                "nombre" => $request->prod_nom,
                "id" => $request->prod_id,
                "cantidad" => $request->cantidad,
                "precio" => $request->prod_pre
            ]
        ];
        if(!session('cart')){
            //no existe la variable de session
            //crear el estado de session 'cart'
            $auxiliar[] = $producto;
            session([ 'cart' => $auxiliar ]);
        }else{
            //existe la variable de session
            //extraer el contenido de la variable de session 
            $auxiliar = session('cart');
            //agregar el nuevo item en el arreglo
            $auxiliar[] = $producto;
            //volver a crear la variable de session'cart'
            //con el contenido añadido
            session(['cart' => $auxiliar]);
        }
        //redireccionar al catalogo de productos con un mensaje de exito
        return redirect('producto') -> with('mensaje', 'producto añadido al carrito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar la session 'cart'
        session()->forget('cart');
        return redirect('cart') -> with('mensajeEliminado', "carrito eliminado");
    }
}
