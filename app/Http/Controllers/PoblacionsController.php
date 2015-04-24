<?php namespace App\Http\Controllers;
 
use Input;
use Redirect;
use App\Poblacion;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
 
class PoblacionsController extends Controller {
	
	protected $rules = [

		'nom' => ['required','min:3'],
		'habitants' => ['required','regex:/^[0-9]*$/'],
	];
 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$poblacions = Poblacion::all();
		return view('poblacions.index', compact('poblacions'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('poblacions.create');
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = Input::all();
		$input['slug']=strtolower($input['nom']);
		Poblacion::create( $input );
 
		return Redirect::route('poblacions.index')->with('message', 'poblacion created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function show(Poblacion $poblacion)
	{
		return view('poblacions.show', compact('poblacion'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function edit(Poblacion $poblacion)
	{
		return view('poblacions.edit', compact('poblacion'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Poblacion $poblacion, Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = array_except(Input::all(), '_method');
		$poblacion->update($input);
 
		return Redirect::route('poblacions.show', $poblacion->slug)->with('message', 'Project updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function destroy(Poblacion $poblacion)
{
	$poblacion->delete();
 
	return Redirect::route('poblacions.index')->with('message', 'Project deleted.');
}
 
}