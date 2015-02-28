<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleAjaxRequests;
use App\Repositories\ArticleRepository;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Services\Medias;

use App\Models\ArticleCategory;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Thanas;
use App\Models\Countries;
use App\Models\Articles;
use App\Models\ArticleLanguages;
use App\Models\Language;
use App\Models\Addresses;

class ArticlesController extends Controller {

	private $articleCategory;
	private $country;
	private $divisions;
	private $districts;
	private $thanas;
	private $articles;
	private $articleLanguages;
	private $languages;
	private $address;
	 /**
     * Constructor.
     *
     * @param ArticleCategory $articleCategory
     */
    public function  __construct(ArticleCategory $articleCategory, 
    	Divisions $divisions, Districts $districts, Thanas $thanas,
    	Countries $country, Articles $articles, ArticleLanguages $articleLanguages,
    	Language $language, Addresses $address)
    {
        $this->articleCategory = $articleCategory;
        $this->country = $country;
        $this->divisions = $divisions;
        $this->districts = $districts;
        $this->thanas = $thanas;
       	$this->language = $language;
       	$this->articleLanguages = $articleLanguages;
       	$this->articles = $articles;
       	$this->address = $address;
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
		$articles = $this->articles
									->with('address')
									->with('article_category')
									->whereIs_active(1)
									->paginate($limit); 
		return view('articles.index', compact('articles'));
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
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleStoreRequest $request)
	{
		$activate = 0;
		if( $request['active'] )
			$activate = 1;
		$address = $this->address->create([
			'location' 		=> 	$request['address'],
			'thana_id' 		=> 	$request['thana'],
			'district_id' 	=> 	$request['district'],
			'division_id' 	=> 	$request['division'],
			'country_id' 	=>	$request['country'],
			'is_active' 	=> 	$activate
		]);

		$lastAddressId = $address->id;

		$article = $this->articles->create([
			'article_category_id' 	=> $request['category'],
			'title' 				=> $request['title'],
			'short_detail' 			=> $request['shortDetails'],
			'details' 				=> $request['details'],
			'meta_keyword' 			=> $request['keyword'],
			'meta_description' 		=> $request['description'],
			'website' 				=> $request['website'],
			'phone' 				=> $request['phone'],
			//'email'		=> 		$request['email'],
			'is_active' 			=> $activate,
			'address_id' 			=> $lastAddressId,
			''
			]);
		$lastInsertedArticleId = $article->id;

		$this->articleLanguages->create([
			'article_id' 			=> $lastInsertedArticleId,
			'title' 				=> $request['bengaliTitle'],
			'short_detail' 			=> $request['bengaliShortDetails'],
			'details' 				=> $request['bengaliDetails'],
			'meta_keyword' 			=> $request['bengaliKeyword'],
			'meta_description' 		=> $request['bengaliDescription'],
			'language_id' 			=> 1, //Todo: Mujib: Used 1 for Bengali 
			'is_active' 			=> $activate
		]);
		return redirect()->route('articles.index');
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
		$category = $this->articleCategory->all()->lists('title', 'id');
		$division = $this->divisions->all()->lists('title', 'id');
		$district = $this->districts->all()->lists('title', 'id');
		$thana 	  = $this->thanas->all()->lists('title', 'id');
		$country  = $this->country->all()->lists('title', 'id');
		$article  = $this->articles->findOrFail($id)
									->with('address')
									->with('article_category')
									->first();
		$articleLang = $this->articleLanguages
							->whereArticle_id($id)
							->first();
		//print "<pre>"; print_r($article->id);print "</pre>";		
		//print($article[0]);
		$url = "www.localhost.com";				
		return view('articles.edit', compact('category','division', 'district', 'thana', 'country','article', 'articleLang', 'url')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ArticleStoreRequest $request, $id)
	{
		print $id;
		//dd($request);
		$ExistingArticle = $this->articles->findOrFail($id);
		$ExistingArticleLang = $this->articleLanguages->whereArticle_id($id)->first();
		$ExistingAddress = $this->address->findOrFail( $ExistingArticle->address_id );
		
		$activate = 0;
		if( $request['active'] )
			$activate = 1;
		$address  = [];
		$address['location']  	= $request['address'];
		$address['thana_id']  	= $request['thana'];
		$address['district_id'] = $request['district'];
		$address['division_id'] = $request['division'];
		$address['country_id']  = $request['country'];
		$address['is_active']  	= $activate;
		$ExistingAddress->update( $address );

		$articles = [];
		$articles['article_category_id']	= $request['category'];
		$articles['title'] 					= $request['title'];
		$articles['short_detail'] 			= $request['shortDetails'];
		$articles['details'] 				= $request['details'];
		$articles['meta_keyword'] 			= $request['keyword'];
		$articles['meta_description'] 		= $request['description'];
		$articles['website'] 				= $request['website'];
		$articles['phone'] 					= $request['phone'];
		$articles['is_active'] 				= $activate;
		$ExistingArticle->update( $articles );

		$articleLangs = [];
		$articleLangs['title']				= $request['bengaliTitle'];
		$articleLangs['short_detail'] 		= $request['bengaliShortDetails'];
		$articleLangs['details'] 			= $request['bengaliDetails'];
		$articleLangs['meta_keyword'] 		= $request['bengaliKeyword'];
		$articleLangs['meta_description'] 	= $request['bengaliDescription'];
		$articleLangs['language_id'] 		= 1;
		$articleLangs['is_active'] 			= $activate;


		$ExistingArticleLang->update( $articleLangs );

		return redirect()->route('articles.index');
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ExistingArticle = $this->articles->findOrFail($id);
		$ExistingArticleLang = $this->articleLanguages
									->whereArticleId($id)
									->delete();
		$ExistingArticle->delete();
		$ExistingAddress = $this->address
								->findOrFail( $ExistingArticle->address_id )
								->delete();
		return redirect()->route('articles.index');
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
