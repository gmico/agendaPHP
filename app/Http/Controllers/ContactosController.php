<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Cita;
use App\Contacto;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactosController extends Controller {


protected $rules = [

		'slug' => ['min:3'],
		'nom' => ['required','min:3'],
		
	];


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Cita $cita)
	{
		return view('citas.index', compact('cita'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Cita $cita)
	{
		return view('contactos.create', compact('cita'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Cita $cita, Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = Input::all();
		//$input['contacto_id'] = $cita->id;
		$input['slug']=str_replace(" ","-",strtolower($input['nom']));
		Contacto::create( $input );
 
		return Redirect::route('citas.show', $cita->slug)->with('Contacto created.');
	}

/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function add(Cita $cita, Request $request)
	{
		
		$contactos = Contacto::lists('nom');

		return Redirect::route('citas.show', $cita->slug)->with('Contacto added.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Cita $cita, Contacto $contacto)
	{
		return view('contactos.show', compact('cita', 'contacto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Cita $cita, Contacto $contacto)
	{
		return view('contactos.edit', compact('cita', 'contacto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Cita $cita, Contacto $contacto, Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = array_except(Input::all(), '_method');
		$contacto->update($input);
 
		return Redirect::route('citas.contactos.show', [$cita->slug, $contacto->slug])->with('message', 'contacto updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Cita $cita, Contacto $contacto)
	{
		$contacto->delete();
 
	return Redirect::route('citas.show', $cita->slug)->with('message', 'contacto deleted.');
	}

}
