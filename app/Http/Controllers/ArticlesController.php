<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleAjaxRequests;
use App\Repositories\ArticleRepository;
use App\Services\Medias;

use App\Models\ArticleCategory;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Thanas;
use App\Models\Countries;

class ArticlesController extends Controller {

	private $articleCategory;
	private $country;
	private $divisions;
	private $districts;
	private $thanas;

	 /**
     * Constructor.
     *
     * @param ArticleCategory $articleCategory
     */
    public function  __construct(ArticleCategory $articleCategory, 
    	Divisions $divisions, Districts $districts, Thanas $thanas,
    	Countries $country)
    {
        $this->articleCategory = $articleCategory;
        $this->country = $country;
        $this->divisions = $divisions;
        $this->districts = $districts;
        $this->thanas = $thanas;
        //$this->articleCategoriesLanguage = $articleCategoriesLanguage;
       // $this->language = $language;
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$category = $this->articleCategory->all()->lists('title', 'id');
		$division = $this->divisions->all()->lists('title', 'id');
		$district = $this->districts->all()->lists('title', 'id');
		$thana = $this->thanas->all()->lists('title', 'id');
		$country = $this->country->all()->lists('title', 'id');
		$url = "www.localhost.com";
		return view('articles.create', compact('category','division', 'district', 'thana', 'country','url'));
		//$url = "www.localhost.com";//Medias::getUrl($this->user_gestion);
		//return view('articles.create')->with(compact('url'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

	public function getLists( ArticleAjaxRequests $request, $id, $name ){
		
		if( $name == "district" && $id ){
			$district = $this->districts->whereDivisionId( $id )->lists('title', 'id');
			return response()->json([
				'list' => $district
			]);
		}

		if( $name == "thana" && $id ){
			$thanas = $this->thanas->whereDistrictId( $id )->lists('title', 'id');
			return response()->json([
				'list' => $thanas
			]);
		}

		return response()->json([
				'list' => ''
			]);
		
	}

}
