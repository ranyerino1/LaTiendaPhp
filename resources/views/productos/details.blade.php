@extends ('layouts.menu')

@section ('contenido')

    <div class="row">
        <h1>{{ $producto->nombre }}</h1>
    </div>
    <div class="row">
        <div class="col s8">

            <h3>Marca</h3>
            <p> {{ $producto->Marca->nombre }} </p>

            <h3>Categoria</h3>
            <p> {{ $producto->Categoria->nombre }} </p>

            <h3>Precio</h3>
            <p> ${{ $producto->precio }} </p>
            
            <h3>Descripcion</h3>
            <p> ${{ $producto->desc }} </p>

            <h3>Imagen</h3>
            @if($producto->imagen === null)
                <img src="{{ asset('img/no.jpg') }}" alt="">
            @else
                <img src="{{ asset('img/'.$producto->imagen) }}" alt="" style="width: 30rem; height: 15rem;">
            @endif

        </div>
        <div class="col s4">
            <div class="row">
                <h3>Añadir al carrito</h3>
                <div class="row">
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf 
                        <input type="hidden" name="prod_id" value="{{'$producto->id'}}">
                        <div class="row">
                            <div class="col s4 input-field">
                                <select name="cantidad" id="cantidad">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <label for="cantidad">Cantidad</label>
                            </div>
                            <div>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Añadir</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection