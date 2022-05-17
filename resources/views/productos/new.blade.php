@extends ('layouts.menu')

@section ('contenido')
<div class="row">
    <h1 class=" indigo-text text-accent-4">Nuevo producto</h1>
</div>
<div class="row">
    <form class="col s8" method="post" action="{{ route('producto.store') }}">
        @csrf
            <div class="row">
                <div class="input-field col s8">
                    <label for="nombre">Nombre de producto</label>
                    <input type="text" placeholder="Nombre de producto" id="nombre" name="nombre">
                </div>
            </div> 
            <div class="row">
                <div class="input-filed col s8">
                <label for="desc">Descripcion de producto</label>
                <textarea class="materialize-textarea" placeholder="Descripcion de producto" id="desc" name="desc"></textarea>
                </div>
            </div>     
            <div class="row">
                <div class="input-filed col s8">
                    <label for="precio">Precio de producto</label>
                    <textarea class="materialize-textarea" placeholder="Precio de producto" id="precio" name="precio"></textarea>
                </div>
            </div>
             <div class="row">
                <div class="input-field col s8">
                    <select name="marca" id="marca">
                        <option>Marcas</option>
                        @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="marca">Marca</label>
                </div>
             </div>
             <div class="row">
                <div class="input-field col s8">
                    <select name="categoria" id="categoria">
                        <option>Categorias</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                        </select>
                    <label for="categoria">Categorias</label>
                </div>
             </div>
             
            <div class="row">
                <div class="file-field input-field col s8">
                    <div class="btn">
                        <span>imagen...</span>
                        <input type="file" name="imagen">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>   
            </div>  
                <div class="row">
                    <div class="s8">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                        </button>
                </div>
            </div>
    </form>
</div>
@endsection