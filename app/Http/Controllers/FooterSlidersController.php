<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FooterSliderRequest;
use App\Models\FooterSliders;
class FooterSlidersController extends Controller {
	
		private $footersliders;
	

	public function __construct(FooterSliders $footersliders){
		$this->footersliders = $footersliders;
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$limit = 10;
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->paginate($limit);

		return view('footersliders.index', compact('footersliders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('footersliders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FooterSliderRequest $request)
	{
		$activate 	= 0;
		
		$destinationPath = "images/";
		if( $request['active'] ) 		$activate = 1;
		

	
		
		$footersliders = $this->footersliders->create([
			'title' 		=> 	$request['title'],
			'is_active' 		=> 	$activate
		]);

	
			$fileName =  $request->file('image')->getClientOriginalName();
			$request->file('image')->move($destinationPath, $footersliders->id . '-' . $fileName);
			$content = $footersliders->id . '-' . $fileName;
		
		$this->footersliders->where('id', $footersliders->id)->update([
				'image' => 	$content
		]);
		return redirect()->route('footersliders.index');
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
			$footerslider = $this->footersliders->findOrFail( $id );
						//->with('ad_position');
						//->first();
		//print "<pre>"; print_r($ad); print "</pre>";
		return view('footersliders.edit', compact('footerslider'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(FooterSliderRequest $request,$id)
	{
		$ExistingFooterslider = $this->footersliders->findOrFail($id);

		$activate 	= 0;
		
		$content = "";
		$destinationPath = "images/";
		if( $request['active'] ) 		$activate = 1;
		if($request->file('image')){
			$fileName =  $request->file('image')->getClientOriginalName();
			$request->file('image')->move($destinationPath, $ExistingFooterslider->id . '-' . $fileName);
			$content = $ExistingFooterslider->id . '-' .$fileName;
		}else{
			$content = $ExistingFooterslider->image;
		}

		$footerslider = [];
		$footerslider['image'] 		= 	$content;
		$footerslider['title'] 		= 	$request['title'];
		
		$footerslider['is_active'] 	= 	$activate;

		$this->footersliders->where('id', $id)->update( $footerslider );

		return redirect()->route('footersliders.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$footersliders = $this->footersliders->findOrFail($id);
		$footersliders->delete();
		return redirect()->route('footersliders.index');
	}

}
