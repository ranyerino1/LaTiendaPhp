@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1>Carrito de compras</h1>
</div>
@if(session('cart'))
<div class="row">
    <div class="col s8">
        <table>
            <thead>
                <tr>
                    <th>Nombre producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $producto)
                <tr>
                    <td>{{ $producto[0]["nombre"] }}</td>
                    <td>{{ $producto[0]["cantidad"]  }}</td>
                    <td>{{ $producto[0]["precio"]  }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<strong>
    No hay items en el carrito
</strong>
@endif
<div class="row">
    <form action="{{ route('cart.destroy', 1) }}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn waves-effect waves-light" type="submit">Eliminar carrito</button>
    </form>
</div>



@endsection