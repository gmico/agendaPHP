<?php namespace App\Http\Controllers;


use Input;
use Redirect;
use App\Cita;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CitasController extends Controller {


protected $rules = [

		'slug' => ['min:3'],
		'titol' => ['required','min:3'],
		
	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$citas = Cita::all();
		return view('citas.index', compact('citas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('citas.create');
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
		$input['slug']=strtolower($input['titol']);
		Cita::create( $input );
 
		return Redirect::route('citas.index')->with('message', 'cita creada');
	}

/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function add(Cita $cita, Request $request)
	{
		
		$citas = Cita::lists('titulo');

		return Redirect::route('citas.show', $cita->slug)->with('Contacto added.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Cita $cita)
	{
		return view('citas.show', compact('cita'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Cita $cita)
	{
		return view('citas.edit', compact('cita'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Cita $cita, Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = array_except(Input::all(), '_method');
		$cita->update($input);
 
		return Redirect::route('citas.show', $cita->slug)->with('message', 'Cita updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Cita $cita)
{
	$cita->delete();
 
	return Redirect::route('citas.index')->with('message', 'citas deleted.');
}

}
