@extends('master')
@section('contenedor')

<h2>Add Producto</h2>

<form action="{{route('producto.store')}}" method="post">

    @if (session()->has('estado'))
        
    <div class="alert alert-success" role="alert">
       {{session('estado')}}
      </div>
    @endif
    
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert"> 
          <p>Errores del formulario...</p>
          <ul>
              @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
              @endforeach              
          </ul>
        </div>
    @endif


    <div class="form-group">        
        <input type="number" name="codigo" class="form-control" id="numCodigo" placeholder="Ingrese codigo" value="{{old('codigo')}}" >
        <span>{{ $errors->first('codigo') }}</span>        
      </div>
    <div class="form-group">        
        <input type="text" name="nombre" class="form-control" id="txtNombre" placeholder="Ingrese nombre" value="{{old('nombre')}}">        
        <span>{{ $errors->first('nombre') }}</span>
    </div>
    <div class="form-group">        
        <input type="number" name="precio" class="form-control" id="numprecio" placeholder="Ingrese precio" value="{{old('precio')}}">        
        <span>{{ $errors->first('precio') }}</span>
      </div>
      <div class="form-group">        
        <input type="text" name="descripcion" class="form-control" id="txtDescripcion" placeholder="Ingrese descripcion" value="{{old('descripcion')}}">        
        <span>{{ $errors->first('descripcion') }}</span>
      </div>
      <button type="submit" class="btn btn-primary" value="Add Producto">Submit</button>
      
      {{csrf_field()}}

</form>

    
@endsection