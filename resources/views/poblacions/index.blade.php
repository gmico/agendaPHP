<html><head></head><body>
@extends('app')
 
@section('content')
    <h2>Poblacions</h2>
 
    @if ( !$poblacions->count() )
        No tens poblacions
    @else
        <ul>
            @foreach( $poblacions as $poblacion )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('poblacions.destroy', $poblacion->slug))) !!}
                        <h4><a href="{{ route('poblacions.show', $poblacion->slug) }}">{{ $poblacion->nom }}</a></h4>
                        
                            {!! link_to_route('poblacions.edit', 'Editar Població', array($poblacion->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Eliminar Població', array('class' => 'btn btn-danger')) !!}
                        
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('poblacions.create', 'Crear poblacio') !!}
    </p>
@endsection
</body></html>

