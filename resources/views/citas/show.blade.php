		<html><head></head><body>
@extends('app')
 
@section('content')
    <h2>{{ $cita->titol }}</h2>
    <h4>Descripcio: {{ $cita->descripcio }}</h4>
    <h4>Lloc: {{ $cita->lloc }}</h4>
<h4>Contactos:</h4>
 
    @if ( !$cita->contactos->count() )
        La teva cita no té contactos
    @else
        <ul>
            @foreach( $cita->contactos as $contacto )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('citas.contactos.destroy', $cita->slug, $contacto->slug))) !!}
                        <h4><a href="{{ route('citas.contactos.show', [$cita->slug, $contacto->slug]) }}">{{ $contacto->nom }}</a></h4>
                        
                            <!--{!! link_to_route('citas.contactos.edit', 'Editar Contacto', array($cita->slug, $contacto->slug), array('class' => 'btn btn-info')) !!}
 -->
                            {!! Form::submit('Eliminar Contacto', array('class' => 'btn btn-danger')) !!}
                        

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('citas.index', 'Torna to citas') !!} |
        {!! link_to_route('citas.contactos.create', 'Añadir Contacto', $cita->id) !!}
    </p>
@endsection 

</body></html>