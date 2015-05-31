<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\HomeAjaxRequest;
use App\Http\Requests\HomeRequest;
//use App\Http\Requests\EventStoreRequests;
use App\Http\Requests\ReviewRequest;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\ArticleCategory;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Thanas;
use App\Models\Countries;
use App\Models\Events;
use App\Models\ArticleLanguages;
use App\Models\EventLanguages;
use App\Models\Language;
use App\Models\Addresses;
use App\Models\Articles;
use App\Models\Ads;
use App\Models\AdPositions;
use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Tag;
use App\Models\ArticleTags;
use App\Models\FooterSliders;

use App\Commands\ChangeLocaleCommand;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	private $articleCategory;
	private $country;
	private $divisions;
	private $districts;
	private $thanas;
	private $events;
	private $eventLanguages;
	private $languages;
	private $address;
	private $articles;
	private $articleLanguages;
	private $ads;
	private $adPosition;
	private $tags;
	private $atags;
	private $footersliders;

	private $languageId;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function  __construct(ArticleCategory $articleCategory, 
	Divisions $divisions, Districts $districts, Thanas $thanas,
	Countries $country, Events $events, EventLanguages $eventLanguages,
	Language $language, Addresses $address, Articles $articles, 
	ArticleLanguages $articleLanguages, Ads $ads, AdPositions $adPosition,Tag $tags, ArticleTags $atags,FooterSliders $footersliders)
    {
	$this->articleCategory = $articleCategory;
	$this->country = $country;
	$this->divisions = $divisions;
	$this->districts = $districts;
	$this->thanas = $thanas;
	$this->language = $language;
	$this->eventLanguages = $eventLanguages;
	$this->events = $events;
	$this->address = $address;
	$this->articleLanguages = $articleLanguages;
	$this->articles = $articles;
	$this->ads = $ads;
	$this->adPosition = $adPosition;
	$this->tags = $tags;
	$this->atags = $atags;
	$this->footersliders = $footersliders;
	//$this->middleware('auth');
	if(session('locale') == "en" )
		$this->languageId = 1;
	else
		$this->languageId = 2;
    }

    function getAds(){
	return $this->ads
			->with('ad_position')
			->whereIsActive(1)
			->wherePosition('Top-Right')
			->get([
				'ads.id',
				'ads.image',
				'ads.short_desc',
				'ads.link',
				'ads.ad_position_id'
				])
			->take(5);

    }
    function getBottomAds(){
	return $this->ads
			->with('ad_position')
			->whereIsActive(1)
			->wherePosition('Bottom-Right')
			->get([
				'ads.id',
				'ads.image',
				'ads.short_desc',
				'ads.link',
				'ads.ad_position_id'
				])
			->take(5);

    }

    public function categoryList(){
	return $this->articleCategory->all()->lists('title', 'id');
    }

    public function moreArticles( ){
	$articles = $this->articles->with('article_category')
					->whereIsActive(1)
					//->whereFeatured(0)
					//->whereMoreFromDhaka(0)
					//->whereListTag(0)
					//->whereIsReviewing(0)
					->orderBy('created_at', 'desc')
					->orderBy('id', 'desc')
					//->get()
					->paginate( 2 );
		$ar = [];
		foreach ($articles as $key => $value) {
			$ar[$key] = $value;
		}
		//print_r($ar);
		return response()->json([
				'articles' => $ar
			]);
    }

    public function moreCategoryArticles(HomeAjaxRequest $request, $id){
	$articles = $this->articles->with('article_category')
					->whereIsActive(1)
					//->whereFeatured(0)
					//->whereMoreFromDhaka(0)
					//->whereListTag(0)
					//->whereIsReviewing(0)
					->whereArticleCategoryId( $id )
					->orderBy('created_at', 'desc')
					->orderBy('id', 'desc')
					//->get()
					->paginate( 2 );
		$ar = [];
		foreach ($articles as $key => $value) {
			$ar[$key] = $value;
		}
		return response()->json([
				'articles' => $ar
			]);
    }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$arti = $this->articles->with('article_category')
					->whereIsActive(1)
					//->whereFeatured(0)
					//->whereMoreFromDhaka(0)
					//->whereListTag(0)
					//->whereIsReviewing(0)
					->orderBy('created_at', 'desc')
					->orderBy('id', 'desc')
					->get();
					//->take(2);
		$featuredArticles = $this->articles->with('article_category')
							->whereIsActive(1)
							->whereFeatured(1)
							//->whereMoreFromDhaka(0)
							//->whereListTag(0)
							//->whereIsReviewing(0)
							->get()
							->take(10);
		$moreTagArticles =      $this->articles->with('article_category')
									->whereIsActive(1)
									//->whereFeatured(0)
									->whereMoreFromDhaka(1)
									//->whereListTag(0)
									//->whereIsReviewing(0)
									->get()
									->take(10);
		$ads = $this->getAds();
		//print "<pre>"; print_r($ads); print "</pre>";
		//die();
		$bottomAds = $this->getBottomAds();
		$events = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					//->whereFeatured(0)
					->whereLastMinute(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle',
							'events.featured_title',
							'events.price',
							'events.strike_price',
							'events.address_id',
							'events.opening_date'
						])
					->take(2);
		$featuredEvents = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereFeatured(1)
					//->whereLastMinute(0)
					->get()
					->take(2);
		$listArticles = $this->articles->with('article_category')
						->whereIsActive(1)
						->whereListTag(1)
						//->whereMoreFromDhaka(0)
						//->whereFeatured(0)
						//->whereIsReviewing(0)
						->get()
						->take(3);

		$reviewArticles = $this->articles->with('article_category')
						->whereIsActive(1)
						//->whereListTag(0)
						//->whereMoreFromDhaka(0)
						//->whereFeatured(0)
						->whereIsReviewing(1)
						->get()
						->take(3);
		
		//print "<pre>"; print_r($listArticles); print "</pre>";
		$mostReads = $this->articles
					->whereIsActive(1)
					->orderBy('page_view_count', 'desc')
					->get()
					->take(5);
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$articles = $arti->take(2);
		$total = count($arti);
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();

		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);
		//dd($articles);							
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
					

		return view('front.index', compact('articles', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'reviewArticles', 'total', 'categoryLists', 'listEvent', 'editorChoice','footersliders', 'bottomAds'));

	}

	public function featuredArticles(){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(1)
									//->whereMoreFromDhaka(0)
									//->whereListTag(0)
									//->whereIsReviewing(0)
									->get()
									->take(2);
	}
	public function getEvents(){
		return $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					//->whereFeatured(0)
					->whereLastMinute(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.featured_title',
							'events.price',
							'events.strike_price',
							'events.address_id',
							'events.opening_date',
							'events.bnTitle'
						])
					->take(2);
	}

	public function featuredEvents(){
		return $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereFeatured(1)
					//->whereLastMinute(0)
					->get()
					->take(2);
	}
	public function moreTaggedArticles(){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									//->whereFeatured(0)
									->whereMoreFromDhaka(1)
									//->whereListTag(0)
									//->whereIsReviewing(0)
									->get()
									->take(10);
	}
	public function moreTaggedArticlesByCategoryId( $id ){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									//->whereFeatured(0)
									->whereMoreFromDhaka(1)
									//->whereListTag(0)
									//->whereIsReviewing(0)
									->whereArticleCategoryId( $id )
									->get()
									->take(10);
	}
	public function listTaggedArticles(){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									->whereListTag(1)
									//->whereMoreFromDhaka(0)
									//->whereFeatured(0)
									//->whereIsReviewing(0)
									->get()
									->take(3);
	}
	public function mostReadArticles(){
		return $this->articles
					->whereIsActive(1)
					->orderBy('page_view_count', 'desc')
					->get()
					->take(5);
	}
	public function articleDetails( $id ){

		$ads                            = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                         = $this->getEvents();
		$featuredEvents         = $this->featuredEvents();
		$moreTagArticles        = $this->moreTaggedArticles();
		$listArticles           = $this->listTaggedArticles();
		$mostReads                      = $this->mostReadArticles();

		$article                        = $this->articles
										->with('article_category')
										->with('address')
										->findOrFail( $id );

		$total = 1;
		if( $article->page_view_count )
			$total += $article->page_view_count;

		$article->where('id', $id)->update([
											'page_view_count' => $total
										]);
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();

		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		//$tags = $this->atags->whereArticleId($id)->get();
		
		//$users = \DB::select('select article_id, tag_id from article_tag where article_id=' . $id)->get();
		$at = \DB::table('article_tag')->where('article_id', '=', $id)->get();
		$ts = [];
		foreach ($at as $key => $value) {
			array_push($ts, $value->tag_id);
		}
		$art_tag = \DB::table('article_tag')
											->distinct()
											->select(\DB::raw('article_id'))
											->whereIn('tag_id', $ts)
											->get();
		$art = [];
		foreach ($art_tag as $key => $value) {
			if( $value->article_id != $id ){
				array_push($art, $value->article_id);
			} 
			
		}
		krsort($art);
		$articleRelated = $this->articles->whereIn('id', $art)->get()->take(2);
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$bottomAds = $this->getBottomAds();
		return view('front.details-article', compact('article', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'categoryLists', 'listEvent', 'editorChoice', 'articleRelated', 'footersliders', 'bottomAds'));
	}
	public function articleCategory( $id ){
		$ads                            = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                         = $this->getEvents();
		$featuredEvents         = $this->featuredEvents();
		$moreTagArticles        = $this->moreTaggedArticlesByCategoryId($id);
		$listArticles           = $this->listTaggedArticles();
		$mostReads                      = $this->mostReadArticles();
		$reviewArticles = $this->articles->with('article_category')
									->whereIsActive(1)
									//->whereListTag(0)
									//->whereMoreFromDhaka(0)
									//->whereFeatured(0)
									->whereIsReviewing(1)
									->get()
									->take(3);
		$arLists = $this->articles->with('article_category')
									->whereIsActive(1)
									//->whereFeatured(0)
									//->whereMoreFromDhaka(0)
									//->whereListTag(0)
									//->whereIsReviewing(0)
									->whereArticleCategoryId( $id )
									->orderBy('id', 'desc')
									->get();
									//->take(5);
		$articles = $arLists->take(2);
		$total = count($arLists);
		$categoryId = $id;      
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();
		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);     
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$bottomAds = $this->getBottomAds();
		return view('front.category-articles', compact('articles', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'reviewArticles', 'total', 'categoryId', 'categoryLists', 'listEvent', 'editorChoice', 'footersliders', 'bottomAds') );
	}

	public function eventDetails( $id ){
		
		$ads                            = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                         = $this->getEvents();
		$featuredEvents         = $this->featuredEvents();
		$moreTagArticles        = $this->moreTaggedArticles();
		$listArticles           = $this->listTaggedArticles();
		$mostReads                      = $this->mostReadArticles();

		$event                  = $this->events
						->with('article_category')
						->with('address')
						->findOrFail( $id );

		$total = 1;
		if( $event->page_view_count )
			$total += $event->page_view_count;

		$event->where('id', $id)->update([
			'page_view_count' => $total
		]);
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();
		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$articleRelated = [];
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$bottomAds = $this->getBottomAds();
		return view('front.details-event', compact('event', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'categoryLists', 'listEvent','editorChoice', 'articleRelated', 'footersliders', 'bottomAds'));
	}
	public function featuredEventsPaging(){
		return $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereFeatured(1)
					//->whereLastMinute(0)
					->paginate(1);
	}
	public function feventsLists(){
		$ads                            = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                         = $this->getEvents();
		$featuredEvents         = $this->featuredEventsPaging();
		$moreTagArticles        = $this->moreTaggedArticles();
		$listArticles           = $this->listTaggedArticles();
		$mostReads                      = $this->mostReadArticles();
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();
		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$bottomAds = $this->getBottomAds();
		return view('front.all-events', compact('featuredArticles','ads', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'categoryLists', 'listEvent','editorChoice', 'footersliders', 'bottomAds'));
	}

	public function reviewListsPaging(){
		return $this->articles
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereIsReviewing(1)
					//->whereLastMinute(0)
					->paginate(1);
	}

	public function reviewListsByCategory( $cid ){
		return $this->articles
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereIsReviewing(1)
					//->whereLastMinute(0)
					->whereArticleCategoryId( $cid )
					->paginate(1);
	}

	public function reviewsList(){

		$ads                            = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                         = $this->getEvents();
		$reviewLists            = $this->reviewListsPaging();
		$moreTagArticles        = $this->moreTaggedArticles();
		$listArticles           = $this->listTaggedArticles();
		$mostReads                      = $this->mostReadArticles();
		$category                       = $this->categoryList();
		$selectCat                      = "";
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();
		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$bottomAds = $this->getBottomAds();
		return view('front.all-reviews', compact('featuredArticles','ads', 'events', 'reviewLists', 'moreTagArticles', 'listArticles', 'mostReads', 'category', 'selectCat','categoryLists', 'listEvent', 'editorChoice', 'footersliders', 'bottomAds'));
	}

	public function reviewsSearch(ReviewRequest $request){
		//dd($request);
		$ads                            = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                         = $this->getEvents();
		$reviewLists            = ( $request['category'] ? $this->reviewListsByCategory($request['category']) : 
			$this->reviewListsPaging() );
		$moreTagArticles        = $this->moreTaggedArticles();
		$listArticles           = $this->listTaggedArticles();
		$mostReads                      = $this->mostReadArticles();
		$category                       = $this->categoryList();
		$selectCat                      = ($request['category'] ? $request['category'] : "");
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();
		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$bottomAds = $this->getBottomAds();
		return view('front.all-reviews', compact('featuredArticles','ads', 'events', 'reviewLists', 'moreTagArticles', 'listArticles', 'mostReads', 'category', 'selectCat','categoryLists', 'listEvent', 'editorChoice', 'footersliders', 'bottomAds'));

	}

	public function wildcardSearch(HomeRequest $request){
		$q = $request["q"];
		$category = $request["category"];
		$ads                            = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                         = $this->getEvents();
		$featuredEvents         = $this->featuredEvents();
		$moreTagArticles        = $this->moreTaggedArticles();
		$listArticles           = $this->listTaggedArticles();
		$mostReads                      = $this->mostReadArticles();
		$reviewArticles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereIsReviewing(1)
									->get()
									->take(3);

		$ar = $this->articles->whereIsActive(1);
		if($category != "all"){
			$ar = $ar->whereArticleCategoryId( $category );
		}
		if( $q != "" ){
			$ar = $ar->where('title', 'LIKE', "%{$q}%")
					->orWhere('short_detail', 'LIKE', "%{$q}%")
					->orWhere('details', 'LIKE', "%{$q}%");
		}
		$articles = $ar->orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(3);
		$total = 2;
		$categoryId = $category;        
		$categoryLists = $this->articleCategory->whereIsactive(1)->get();       
		$listEvent = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->get([
							'events.id',
							'events.media',
							'events.title',
							'events.bnTitle'
						]);                                     
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$bottomAds = $this->getBottomAds();
		return view('front.search-list', compact('articles', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'reviewArticles', 'total', 'categoryId', 'categoryLists', 'q', 'listEvent', 'editorChoice', 'footersliders', 'bottomAds') );
	}
	public function featuredEventsSearch($free, $recommend, $searchDate){
		$fe = $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereFeatured(1);
					//->whereLastMinute(0)
					//->paginate(1);
		if($free != ""){
			$fe = $fe->whereEntrance('Free');
		}
		else if($recommend != "")
			$fe = $fe->whereEntrance('Paid');
		else
			$fe = $fe;

		
		if($searchDate)
			$fe = $fe->where('opening_date', '<=', $searchDate);

		$fe = $fe->orderBy('created_at', 'desc')
			->orderBy('id', 'desc')
			//->get();
			->paginate(3);
		return $fe;

	}
	public function eventSearch(HomeRequest $request){
		//dd( $request );
		$free = "";
		$recommend = "";
		$when = 1;
		if($request["free"])
			$free = $request["free"];
		if($request["recommend"])
			$recommend = $request["recommend"];
		if($request["when"])
			$when = $request["when"];

		$sdate = mktime(0,0,0, date('m'), $when, date('Y'));
		$searchDate = date('Y-m-d', $sdate);
		
		$ads                    = $this->getAds();
		$featuredArticles       = $this->featuredArticles();
		$events                 = $this->getEvents();
		$moreTagArticles        = $this->moreTaggedArticles();
		$listArticles           = $this->listTaggedArticles();
		$mostReads              = $this->mostReadArticles();
		$categoryLists 		= $this->articleCategory->whereIsactive(1)->get();
		$listEvent 		= $this->events
								->with('article_category')
								->with('address')
								->whereIsActive(1)
								->get([
										'events.id',
										'events.media',
										'events.title',
										'events.bnTitle'
									]);
		$editorChoice = $this->articles->whereEditorchoice(1)->get()->take(5);
		$footersliders = $this->footersliders
						->whereIsActive(1)
						->orderBy('created_at', 'desc')
						->orderBy('id', 'desc')
						->get();
		$featuredEvents         = $this->featuredEventsSearch($free, $recommend, $searchDate);
		//print_r($featuredEvents);
		$bottomAds = $this->getBottomAds();
		return view('front.all-events', compact('featuredArticles','ads', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'categoryLists', 'listEvent','editorChoice', 'footersliders', 'bottomAds'));
	}
	public function dashboard(){
		return view('dashboard');
	}

	/**
	 * Display the missing page (404).
	 *
	 * @return Response
	 */
	public function missing()
	{
		return view('front.missing');
	}

	/**
	 * Change language.
	 *
	 * @param  Illuminate\Session\SessionManager  $session
	 * @return Response
	 */
	public function language(ChangeLocaleCommand $changeLocaleCommand)
	{
		$this->dispatch($changeLocaleCommand);
		return redirect()->back();
	}
}
