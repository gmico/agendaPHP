<?php namespace App\Http\Controllers;
 
use Input;
use Redirect;
use App\Poblacion;
use App\Votant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
 
class VotantsController extends Controller {
	
	protected $rules = [


		'dni' => ['required','min:9'],
		'nom' => ['required','min:2'],
		'description' => ['required','max:1000'],
		'datanaixament' => ['required','date'],

	];
 
	/**
	 * Display a listing of the resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function index(Poblacion $poblacion)
	{
		return view('votants.index', compact('poblacion'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function create(Poblacion $poblacion)
	{
		return view('votants.create', compact('poblacion'));
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(Poblacion $poblacion, Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = Input::all();
		$input['poblacion_id'] = $poblacion->id;
		$input['slug']=str_replace(" ","-",strtolower($input['nom']));
		Votant::create( $input );
 
		return Redirect::route('poblacions.show', $poblacion->slug)->with('Votant created.');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function show(Poblacion $poblacion, Votant $votant)
	{
		return view('votants.show', compact('poblacion', 'votant'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function edit(Poblacion $poblacion, Votant $votant)
	{
		return view('votants.edit', compact('poblacion', 'votant'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Poblacion $poblacion, Votant $votant, Request $request)
	{
		$this->validate($request, $this->rules);
 
		$input = array_except(Input::all(), '_dni');
		$votant->update($input);
 
		return Redirect::route('poblacions.votants.show', [$poblacion->slug, $votant->slug])->with('message', 'Votant updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function destroy(Poblacion $poblacion, Votant $votant)
{
	$votant->delete();
 
	return Redirect::route('poblacions.show', $poblacion->slug)->with('message', 'Votant deleted.');
}
}