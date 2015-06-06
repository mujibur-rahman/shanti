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
use App\Models\Tag;
use App\Models\ArticleTags;
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
	private $tags;
	private $atags;

	 /**
     * Constructor.
     *
     * @param ArticleCategory $articleCategory
     */
    public function  __construct(ArticleCategory $articleCategory, 
    	Divisions $divisions, Districts $districts, Thanas $thanas,
    	Countries $country, Articles $articles, ArticleLanguages $articleLanguages,
    	Language $language, Addresses $address, Tag $tags, ArticleTags $atags)
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
       	$this->tags = $tags;
       	$this->atags = $atags;
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
					//->with('article_category')
					//->whereIsActive(1)
					->paginate($limit);
		//dd($articles);
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
		$tags = $this->tags->all();
		$url = "www.localhost.com";
		return view('articles.create', compact('category','division', 'district', 'thana', 'country','url', 'tags'));
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
		$featured = 0;
		$more_from_tag = 0;
		$list_tag = 0;
		$media = '';
		$review = 0;
		$editor_choice = 0;
		if( $request['active'] )
			$activate = 1;
		if( $request['featured'] )
			$featured = 1;
		if( $request['more_from_dhaka'] )
			$more_from_tag = 1;
		if( $request['list_tag'] )
			$list_tag = 1;
		if( $request['review'] )
			$review = 1;
		if( $request['editorChoice'] )
			$editor_choice = 1;
		
		$address = $this->address->create([
			'location' 	=> 	$request['address'],
			'thana_id' 	=> 	$request['thana'],
			'district_id' 	=> 	$request['district'],
			'division_id' 	=> 	$request['division'],
			'country_id' 	=>	$request['country'],
			'is_active' 	=> 	$activate
		]);

		$lastAddressId = $address->id;
		$destinationPath = "images/articles/";
		if( $request->hasFile('media') ){
			$date = date('Y-m-d H.i.s') ;
			$unix_date = strtotime($date) + rand(5, 15);
			$fileName =  $request->file('media')->getClientOriginalName();
			$request->file('media')->move($destinationPath, $unix_date . '-' . $fileName);
			$media = $unix_date . '-' . $fileName;
		}
		$article = $this->articles->create([
			'article_category_id' 	=> 	$request['category'],
			'title' 			=> 	$request['title'],
			'short_detail' 			=> 	$request['shortDetails'],
			'details' 			=> 	$request['details'],
			'meta_keyword' 			=> 	$request['keyword'],
			'meta_description' 		=> 	$request['description'],
			'website' 			=> 	$request['website'],
			'phone' 			=> 	$request['phone'],
			'email'				=> 	$request['email'],
			'rating'			=> 	$request['rating'],
			'is_reviewing'			=>  	$review,
			'is_active' 			=> 	$activate,
			'address_id' 			=> 	$lastAddressId,
			'media'				=> 	$media,
			'featured'			=>	$featured,
			'featured_title'		=>	$request['featured_title'],
			'price'				=>	$request['price'],
			'strike_price'			=>	$request['strike_price'],
			'featured_details'		=> 	$request['featured_details'],
			'bn_featured_title'		=>	$request['bn_featured_title'],
			'bn_price'			=>	$request['bn_price'],
			'bn_strike_price'		=>	$request['bn_strike_price'],
			'bn_featured_details'		=>	$request['bn_featured_details'],
			'more_from_dhaka'		=> 	$more_from_tag,
			'list_tag'			=> 	$list_tag,
			'editorChoice'			=>	$editor_choice,
			'bnTitle'			=>	$request['bengaliTitle'],
			'bnShort_detail'		=>	$request['bengaliShortDetails'],
			'bnDetails'			=>	$request['bengaliDetails']
			]);
		$lastInsertedArticleId = $article->id;

		$this->articleLanguages->create([
			'article_id' 			=> $lastInsertedArticleId,
			'title' 				=> $request['bengaliTitle'],
			'short_detail' 			=> $request['bengaliShortDetails'],
			'details' 				=> $request['bengaliDetails'],
			'meta_keyword' 			=> $request['bengaliKeyword'],
			'meta_description' 		=> $request['bengaliDescription'],
			'language_id' 			=> 2, //Todo: Mujib: Used 2 for Bengali 
			'is_active' 			=> $activate
		]);
		if(count($request['tags']) > 0){
			foreach ($request['tags'] as $key => $tag) {
				$this->atags->create([
					'article_id' => $article->id,
					'tag_id' => $tag
					]);
			}
		}

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
		$article  = $this->articles->find($id);
									//->with('address')
									//->with('article_category')
									//->first();
		$articleLang = $this->articleLanguages
							->with('articles')
							->whereArticleId($id)
							->first();
		
		$arr = array();
		$artags =$this->atags->whereArticleId($id)->get();
		foreach ($artags as $key => $value) {
			array_push($arr, $value->tag_id);
		}
		$tags = $this->tags->whereNotIn('id', $arr)->get();
		$atags = $this->tags->whereIn('id', $arr)->get();
		$url = "www.localhost.com";
		return view('articles.edit', compact('category','division', 'district', 'thana', 'country','article', 'articleLang', 'url', 'tags', 'atags')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ArticleStoreRequest $request, $id)
	{
		$ExistingArticle = $this->articles->findOrFail($id);
		$ExistingArticleLang = $this->articleLanguages->whereArticleId($id);
		$ExistingAddress = $this->address->findOrFail( $ExistingArticle->address_id );

		$media = '';
		$featured = 0;
		$activate = 0;
		$more_from_tag = 0;
		$list_tag = 0;
		$review = 0;
		$editor_choice = 0;
		if( $request['active'] )
			$activate = 1;
		if( $request['featured'] )
			$featured = 1;
		if( $request['more_from_dhaka'] )
			$more_from_tag = 1;
		if( $request['list_tag'] )
			$list_tag = 1;
		if( $request['review'] )
			$review = 1;
		if( $request['editorChoice'] )
			$editor_choice = 1;
		$address  = [];
		$address['location']  	= $request['address'];
		$address['thana_id']  	= $request['thana'];
		$address['district_id'] = $request['district'];
		$address['division_id'] = $request['division'];
		$address['country_id']  = $request['country'];
		//$address['is_active']  	= $activate;
		$this->address->where('id', $ExistingAddress->id)->update( $address);
		
		$destinationPath = "images/articles/";
		if( $request->hasFile('media') ){
			$date = date('Y-m-d H.i.s') ;
			$unix_date = strtotime($date) + rand(5, 15);
			$fileName =  $request->file('media')->getClientOriginalName();
			$request->file('media')->move($destinationPath, $unix_date . '-' . $fileName);
			$media = $unix_date . '-' . $fileName;
		}

		$articles = [];
		$articles['article_category_id']		= 	$request['category'];
		$articles['title'] 				= 	$request['title'];
		$articles['short_detail'] 			= 	$request['shortDetails'];
		$articles['details'] 				= 	$request['details'];
		$articles['meta_keyword'] 			= 	$request['keyword'];
		$articles['meta_description'] 			= 	$request['description'];
		$articles['website'] 				= 	$request['website'];
		$articles['phone'] 				= 	$request['phone'];
		$articles['is_active'] 				= 	$activate;
		$articles['address_id'] 			= 	$ExistingAddress->id;
		$articles['is_reviewing']			= 	$review;
		if( $media )
			$articles['media']			= 	$media;
		$articles['featured']				=	$featured;
		$articles['featured_title']			=	$request['featured_title'];
		$articles['price']				=	$request['price'];
		$articles['strike_price']			=	$request['strike_price'];
		$articles['featured_details']			= 	$request['featured_details'];

		$articles['bn_featured_title']			=	$request['bn_featured_title'];
		$articles['bn_price']				=	$request['bn_price'];
		$articles['bn_strike_price']			=	$request['bn_strike_price'];
		$articles['bn_featured_details']		= 	$request['bn_featured_details'];

		$articles['more_from_dhaka']			= 	$more_from_tag;
		$articles['list_tag']				= 	$list_tag;
		$articles['editorChoice']			= 	$editor_choice;
		$articles['bnTitle']				=	$request['bengaliTitle'];
		$articles['bnShort_detail']			=	$request['bengaliShortDetails'];
		$articles['bnDetails']				=	$request['bengaliDetails'];
		$articles['email']				= 	$request['email'];
		$articles['rating']				= 	$request['rating'];

		$this->articles->where('id', $id)->update( $articles );

		$articleLangs = [];
		$articleLangs['title']				= $request['bengaliTitle'];
		$articleLangs['short_detail'] 			= $request['bengaliShortDetails'];
		$articleLangs['details'] 			= $request['bengaliDetails'];
		$articleLangs['meta_keyword'] 			= $request['bengaliKeyword'];
		$articleLangs['meta_description'] 		= $request['bengaliDescription'];
		$articleLangs['language_id'] 			= 2;
		$articleLangs['is_active'] 			= $activate;
		$articleLangs['article_id']			= $id;

		$this->articleLanguages->where('article_id', $id)->update( $articleLangs );
		$this->atags->whereArticleId($id)
							->delete();
		if(count($request['tags']) > 0){
			foreach ($request['tags'] as $key => $tag) {
				$this->atags->create([
					'article_id' => $id,
					'tag_id' => $tag
					]);

			}
		}

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
