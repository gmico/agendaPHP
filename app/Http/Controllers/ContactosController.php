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
	public function index(Contacto $contacto)
	{
		$contactos = Contacto::all();
		return view('contactos.index', compact('contactos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Contacto $contacto)
	{

		$contactos = Contacto::lists('nom','nom');
		return view('contactos.create', compact('contactos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = Input::all();
		//$input['contacto_id'] = $cita->id;
		$input['slug']=str_replace(" ","-",strtolower($input['nom']));
		Contacto::create( $input );
 
		return Redirect::route('contactos.index')->with('message', 'Contacto creat');
	}

/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function add()
	{
		
$citas = Cita::lists('titol','titol');


return view('contactos.add', compact('citas'));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Contacto $contacto)
	{
		return view('contactos.show', compact('contacto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Contacto $contacto, Cita $cita)
	{
		return view('contactos.edit', compact('cita', 'contacto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Contacto $contacto, Cita $cita, Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = array_except(Input::all(), '_method');
		$contacto->update($input);
 
		return Redirect::route('contactos.show', [$cita->slug, $contacto->slug])->with('message', 'contacto updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Contacto $contacto, Cita $cita)
	{
		$contacto->delete();
 
	return Redirect::route('contactos.show', $contacto->slug)->with('message', 'contacto deleted.');
	}

}
