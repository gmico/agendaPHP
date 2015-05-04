		<html><head></head><body>
		

@extends('app')
 
@section('content')
    <h2>
       
         {{ $contacto->nom }}
    </h2>

<p>Nom: {{ $contacto->nom }}</p>
    <p>E-Mail: {{ $contacto->mail }}</p>
   <p>Descripció: {{ $contacto->descripcio }}</p>
<p>Telefon: {{ $contacto->telefon }}</p>

<h4>citas:</h4>
 
    @if ( !$contacto->citas->count() )
        El contacte no te cites
    @else
        <ul>
            @foreach( $contacto->citas as $cita )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactos.destroy', $contacto->slug, $cita->slug))) !!}
                        <h4><a href="{{ route('citas.show', [$cita->slug]) }}">{{ $cita->titol }}</a><span style="font-size:12px;">  ({{ $cita->datacita }})</span></h4>
                        
                            
                            {!! Form::submit('Eliminar cita', array('class' => 'btn btn-danger')) !!}
                        

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        <!-- {!! link_to_route('citas.create', 'añadir a cita', $contacto->id) !!} -->

    </p>
@endsection

</body></html>