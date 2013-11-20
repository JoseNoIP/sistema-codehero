@extends('plantilla')
@section('contenido')

    <div class="row marketing">
    	<h3>Crear producto</h3>

    	{{ Form::open(array('url' => 'producto')) }}
    		@if(Session::get('mensaje'))
    		    <div class="alert alert-succes">
    		    	{{ Session::get('mensaje') }}
    		    </div>
    		@endif

    		<div class="form-group">
    			{{ Form::label('descripcion', 'descripcion') }}
    			{{ Form::input('descripcion', Input::old('descripcion'), array('class' => 'form-control', 'placeholder' => 'Nombre vendedor', 'autocomplete' => 'off')) }}
    		</div>

    		@if($errors -> get('descripcion') )
    		    <div class="alert alert-danger">
    		    	@foreach($errors -> get('descripcion') as $error)
    		    	
    		    	    * {{ $error }} <br />
    		    	    
    		    	@endforeach
    		    </div>
    		@endif

    		<div class="form-group">
    			{{ Form::label('precio', 'precio') }}
    			{{ Form::input('precio', Input::old('precio'), array('class' => 'form-control', 'placeholder' => 'Apellido del vendedor', 'autocomplete' => 'off')) }}
    		</div>

    		@if($errors -> get('precio') )
    		    <div class="alert alert-danger">
    		    	@foreach($errors -> get('precio') as $error)
    		    	
    		    	    * {{ $error }} <br />
    		    	    
    		    	@endforeach
    		    </div>
    		@endif

    		<div class="form-group">
    			{{ Form::label('vendedor_id', 'Vendedor') }}
    			<select name="vendedor_id" id="" class="form-control">
    				@foreach($vendedores as $vendedor)
    				
    				    <option value="{{ $vendedor -> id }}">
    				    	{{ $vendedor -> nombre.' '.$vendedor -> apellido }}
    				    </option>
    				    
    				@endforeach
    			</select>
    		</div>

    		@if($errors -> get('vendedor_id'))
    		    <div class="alert alert-danger">
    		    	@foreach($errors -> get('vendedor_id') as $error)
    		    	
    		    	    * {{ $error }} <br />
    		    	    
    		    	@endforeach
    		    </div>
    		@endif

    		{{ Form::submit('Guardar', array('class' => 'btn btn-succes')) }}
    		{{ Form::reset('Resetear', array('class' => 'btn btn-default')) }}
    	{{ Form::close() }}

    </div>

     <h3>Productos</h3>
    <div class="list-group">
    	@foreach($productos as $producto)
    	
    	    <a href="#" class="list-group-item">
    	    	{{ $producto -> nombre.' '.$producto -> apellido }}
    	    </a>
    	    
    	@endforeach
    </div>
    
@stop