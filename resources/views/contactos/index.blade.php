<html><head></head><body>
@extends('app')
 
@section('content')
    <h2>Contactos</h2>
 
    @if ( !$contactos->count() )
        No tens contactos
    @else
        <ul>
            @foreach( $contactos as $contacto )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactos.destroy', $contacto->slug))) !!}
                        <h4><a href="{{ route('citas.contactos.show', $contacto->slug) }}">{{ $contacto->nom }}</a></h4>
                        
                            {!! link_to_route('contactos.edit', 'Edit', array($contacto->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('contactos.create', 'Crear Poblacio') !!}
    </p>
@endsection
</body></html>