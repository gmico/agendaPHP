		<html><head></head><body>
		

@extends('app')
 
@section('content')
    <h2>
        {!! link_to_route('poblacions.show', $poblacion->nom, [$poblacion->slug]) !!} 
         {{ $votant->nom }}
    </h2>

<p>Nom: {{ $votant->nom }}</p>
    <p>DNI: {{ $votant->dni }}</p>
   <p>Descripció: {{ $votant->description }}</p>
<p>Data de naixament: {{ $votant->datanaixament }}</p>
    <p>
         {!! link_to_route('poblacions.show', 'Torna a Votants', $poblacion->slug) !!} |
        {!! link_to_route('poblacions.index', 'Torna a Poblacions') !!} |
        {!! link_to_route('poblacions.votants.create', 'Crear Votant', $poblacion->slug) !!}
    </p>
@endsection

</body></html>