<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;



use App\Http\Requests\Tags;

use App\Models\Tag;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
class TagsController extends Controller {

	private $tags;

	public function  __construct(Tag $tag){

	 	$this->tags = $tag;
	 	$this->middleware('auth');

	 }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$tags = $this->tags->paginate(10);
		//dd($tags);
		//print "sdsdsdd" . $tags;
		return view('tags.index', compact('tags'));
		//return \View::make('tags.index', compact('tags'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags = $this->tags->all();
		return view('tags.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Tags $request)
	{
		//dd($request);
		$tag = $this->tags->create([
			'tag' 			=> 	$request['tag'],
			'tagBengali' 	=> 	$request['bengaliTag']
			]);
		return redirect()->route('tags.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tag  = $this->tags->find($id);
		return view('tags.edit', compact('tag'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Tags $request, $id)
	{
		//dd($request);
		$tag = [];
		$tag['tag'] = $request['tag'];
		$tag['tagBengali'] 	= 	$request['bengaliTag'];
		$this->tags->where('id', $id)->update( $tag );
		return redirect()->route('tags.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
