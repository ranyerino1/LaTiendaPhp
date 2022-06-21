@extends ('layouts.menu')

@section ('contenido')
@if(session('mensaje'))
<div class="row">
    <strong>
        {{session('mensaje')}}
        <a href="{{route('cart.index')}}">
        Ir al carrito
        </a>
    </strong>
</div>
@endif
    <div>
        <h1> Catalogo de productos </h1>
    </div>

    @foreach($productos as $producto)
    
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    @if($producto->imagen === null)
                    <img src="{{ asset('img/no.jpg') }}" alt="">
                    @else
                    <img src="{{ asset('img/'.$producto->imagen) }}" alt="">
                    @endif
                </div>
                <span class="card-title" style="color:#000"> {{ $producto->nombre }} </span>
                <div class="card-content">
                    <p> {{ $producto->desc }} </p>
                </div>
                <div class="card-action">
                    <a href="{{ route('producto.show', $producto->id) }}"> ver detalles </a>
                </div>
            </div>
        </div>
    </div>

    @endforeach

@endsection
