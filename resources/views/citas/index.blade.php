<html><head></head><body>
@extends('app')
 
@section('content')
    <h2>Citas</h2>
 
    @if ( !$citas->count() )
        No tens citas
    @else
        <ul>
            @foreach( $citas as $cita )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('citas.destroy', $cita->slug))) !!}
                        <h4><a href="{{ route('citas.show', $cita->slug) }}">{{ $cita->titol }}</a></h4>
                        
                            <!--{!! link_to_route('citas.edit', 'Editar cita', array($cita->slug), array('class' => 'btn btn-info')) !!}-->
                            {!! Form::submit('Eliminar cita', array('class' => 'btn btn-danger')) !!}
                        
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('citas.create', 'Crear Cita') !!}
    </p>
@endsection
</body></html>

