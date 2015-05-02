		<html><head></head><body>
		

@extends('app')
 
@section('content')
    <h2>
        {!! link_to_route('citas.show', $cita->titol, [$cita->slug]) !!} 
         {{ $contacto->nom }}
    </h2>

<p>Nom: {{ $contacto->nom }}</p>
    <p>E-Mail: {{ $contacto->mail }}</p>
   <p>Descripció: {{ $contacto->descripcio }}</p>
<p>Telefon: {{ $contacto->telefon }}</p>
    <p>
         {!! link_to_route('citas.show', 'Torna a contactos', $cita->slug) !!} |
        {!! link_to_route('citas.index', 'Torna a citas') !!} |
        {!! link_to_route('citas.contactos.create', 'Crear Votant', $cita->slug) !!}
    </p>
@endsection

</body></html>